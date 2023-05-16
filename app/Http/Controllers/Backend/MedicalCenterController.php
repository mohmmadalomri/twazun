<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedicalCenter;
class MedicalCenterController extends Controller
{
    //
    public function index(){

        $medical_centers = MedicalCenter::all();
    //  return $medical_centers;
         return view('backend.pages.medical_centers.index',compact('medical_centers'));
    }

    public function show($id){

     $medical_center = MedicalCenter::find($id);
    return view('backend.pages.medical_centers.show',compact('medical_center'));
}



    public function create(){

        return view('backend.pages.medical_centers.create');

    }

    public function store(Request $request){

        $medical_center = new MedicalCenter();
        $medical_center->name = $request->name;
        $medical_center->email = $request->email;
        $medical_center->password = $request->password;
        $medical_center->phone_number = $request->phone_number;
        //$medical_center->is_reception = $request->is_reception;
        $medical_center->address = $request->address;
        $medical_center->website = $request->website;
        $medical_center->save();
        return redirect()->route('backend.medical_centers.index');

    }
    public function edit($id){

        $medical_center = MedicalCenter::findOrFail($id);
        return view('backend.pages.medical_centers.edit',compact('medical_center'));
    }

    public function update(Request $request,$id){
        $medical_center =  MedicalCenter::findOrFail($id);
        $medical_center->name = $request->name;
        $medical_center->email = $request->email;
        $medical_center->password = $request->password;
        $medical_center->phone_number = $request->phone_number;
        //$medical_center->is_reception = $request->is_reception;
        $medical_center->address = $request->address;
        $medical_center->website = $request->website;
        $medical_center->save();
        return redirect()->route('backend.medical_centers.index');

    }



    public function destroy($id){
        $medical_center = MedicalCenter::all();
        $medical_center = MedicalCenter::findOrFail($id);
        $medical_center->delete();
        return redirect()->route('backend.medical_centers.index');


    }

    public function restore(){

    }

    public function forceDelete(){

    }

}
