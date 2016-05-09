<?php

namespace Pomaray\Http\Controllers;

use Illuminate\Http\Request;
use Pomaray\Gallery;
use Pomaray\Http\Requests;
use Pomaray\Http\Controllers\Controller;
use Session;
use Redirect;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('gallery.video');
        
    }

   
    public function store(Request $request)
    {

        $url = $request['image'];
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
        Gallery::create([
                        'category' => 'video',
                        'image' =>$my_array_of_vars['v'] ,]);
        Session::flash('message','Video Creado Correctamente');
        return Redirect::to('/admin/gallery');
    }

    public function destroy($id)
    {
        //
    }
}
