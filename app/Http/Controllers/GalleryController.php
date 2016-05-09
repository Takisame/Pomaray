<?php

namespace Pomaray\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use Storage;
use League\Flysystem\Filesystem;
use Pomaray\Gallery;
use Pomaray\Http\Requests;
use Pomaray\Http\Requests\GalleryRequest;
use Pomaray\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        
        $files =Gallery::select(DB::raw('*'))
                ->orderBy('id', 'desc')
                 ->paginate(20);
        if ($request->ajax()) 
        {
            if ($request->has('category')) 
            {
                if ($request['category'] != '*') 
                {
                    $files =Gallery::select(DB::raw('*'))
                    ->orderBy('id', 'desc')
                    ->where('category','=',$request['category'])
                     ->paginate(20);
                }    
            }
            
            
            return response()->json(view('gallery.files',compact('files'))->render());
        }
        return view('gallery.index',compact('files')); 
    }

   
    public function create()
    {
        return view('gallery.create');

    }

  
    public function store(Request $request)
    {
            $category = $request->get('category');
            $files = $request->file('file');
            foreach($files as $file)
            {
                $rand = rand(0,89895);
                $fileName = $rand.'_'.$file->getClientOriginalName();
                \Storage::disk('gallery')->put($fileName, \File::get($file));
                Gallery::create([
                    'category'=> $category,
                    'image'=> $fileName,]);
            }

    }

   
    public function destroy($id)
    {
        $file = Gallery::find($id);
        if ($file->category == 'video') 
        {
            $file->delete();
            return response()->json(['mensaje'=>'Eliminado']);  
        }
        else
        {
            if (unlink('images/galeria/'.$file->image)) 
            {
                $file->delete();
                return response()->json(['mensaje'=>'Eliminado']);
            }
        }
        
         
    }
}
