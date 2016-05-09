<?php

namespace Pomaray\Http\Controllers;

use Illuminate\Http\Request;

use Pomaray\Http\Requests;
use Pomaray\Http\Requests\TeacherRequest;
use Pomaray\Http\Controllers\Controller;
use Pomaray\Teacher;
use Redirect;
use Session;
use DB;
class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $teachers = Teacher::select(DB::raw('*'))
                ->orderBy('id', 'desc')
                 ->get();
        return view('teacher.index',compact('teachers'));        
    }

   
    public function create()
    {
        return view('teacher.new');
    }

   
    public function store(Request $request)
    {
        Teacher::create($request->all());
        Session::flash('message','Maestro Creado Correctamente');
        return Redirect::to('admin/teacher');

    }

  
    public function video()
    {
        return view('gallery.video');
    }

   
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.edit',['teacher'=>$teacher]);
    }

   
    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->fill($request->all());
        $teacher->save();
        Session::flash('message','Maestro Actualizado Correctamente');
        return Redirect::to('admin/teacher');
    }

  
    public function destroy($id)
    {
        Teacher::destroy($id);
        Session::flash('message','Maestro Eliminado Correctamente');
        return Redirect::to('admin/teacher');
    }
}
