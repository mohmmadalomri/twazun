<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supervisor;
class SupervisorController extends Controller
{
    //
    public function index(){

        $supervisors = Supervisor::all();

        // return  $supervisors ;
          return view('backend.pages.supervisors.index',compact('supervisors'));
    }

    public function show($id){

        $supervisor = Supervisor::find($id);
        return view('backend.pages.supervisors.show',compact('supervisor'));
    }

    public function create(){

        return view('backend.pages.supervisors.create');

    }

    public function store(Request $request){
        $admin = new Supervisor();
        $admin->full_name = $request->full_name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        // $admin->phone_number = $request->phone_number;
        $admin->is_reception = $request->is_reception;
        $admin->is_analyzer = $request->is_analyzer;
     //   $admin->is_supervisor = $request->is_supervisor;
        $admin->save();
        return redirect()->route('backend.supervisors.index');


    }

    public function edit($id){

        $supervisor = Supervisor::findOrFail($id);

        return view('backend.pages.supervisors.edit',compact('supervisor'));
    }

    public function update(Request $request,$id){
        $admin =  Supervisor::findOrFail($id);
        $admin->full_name = $request->full_name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->is_reception = $request->is_reception;
        $admin->is_analyzer = $request->is_analyzer;
        $admin->save();

        return redirect()->route('backend.supervisors.index');
    }


    public function destroy($id){

        $supervisor =Supervisor::all();
        $supervisor =Supervisor::findOrFail($id);
        $supervisor->delete();
        return redirect()->route('backend.supervisors.index');
    }

    public function restore(){

    }

    public function forceDelete(){

    }
}
