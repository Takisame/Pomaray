<?php

namespace Pomaray\Http\Controllers;

use Illuminate\Http\Request;
use Pomaray\Http\Requests;
use Mail;
use Session;
use Redirect;
use Pomaray\Gallery;
use Pomaray\Teacher;
use DB;

class HomeController extends Controller
{


    public function index()
    {
        $teachers = Teacher::select(DB::raw('*'))
                ->orderBy('id', 'desc')
                 ->paginate(15);

        $files =Gallery::select(DB::raw('*'))
                ->orderBy('id', 'desc')
                ->limit(6)
                 ->get();
        return view('Home.welcome',compact('teachers','files'));
    }

     public function store(Request $request)
     {
        
     }
    public function gallery(Request $request)
    {
       $files =Gallery::select(DB::raw('*'))
                ->orderBy('id', 'desc')
                 ->paginate(21);
        if ($request->ajax()) 
        {
            if ($request->has('category')) 
            {
                if ($request['category'] != '*') 
                {
                    $files =Gallery::select(DB::raw('*'))
                    ->orderBy('id', 'desc')
                    ->where('category','=',$request['category'])
                     ->paginate(15);
                }    
            }
            
            
            return response()->json(view('Home.files',compact('files'))->render());
        }
        return view('Home.gallery',compact('files')); 
    }



}
