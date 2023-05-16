<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Api\ApiResponseTrait;
use App\Models\Sample;

class SampleController extends Controller
{
    // use ApiResponseTrait;
    public function index(){

        $samples = Sample::all();
        //return $this->apiResponse($admins,'ok',200);
        return view('backend.pages.samples.index',compact('samples'));
   }

        //  return $admins;


        public function show($id)
        {
            $sample = Sample::find($id);
            return view('backend.pages.samples.show',compact('sample'));
        }

    public function create(){

        return view('backend.pages.samples.create');

    }

    public function store(Request $request){

        $sample = new Sample();
        $sample->lab_id = $request->lab_id;
        $sample->medical_center_id = $request->medical_center_id;
        $sample->sending_doctor_name = $request->sending_doctor_name;
        $sample->patient_name = $request->patient_name;
        $sample->patient_file_number = $request->patient_file_number;
        $sample->patient_nationality = $request->patient_nationality;
        $sample->res_doctor_name = $request->res_doctor_name;
        $sample->res_patient_name = $request->res_patient_name;
        $sample->res_patient_file_number = $request->res_patient_file_number;
        $sample->res_patient_nationality = $request->res_patient_nationality;

        $sample->save;
        return redirect()->route('backend.samples.index')->with('success', 'Patient added successfully');

    }

    public function edit($id){

        $sample = Sample::findOrFail($id);
        return view('backend.pages.samples.edit',compact('sample'));
    }

    public function update(Request $request , $id){

        $sample =  Sample::findOrFail($id);
        $sample->lab_id = $request->lab_id;
        $sample->medical_center_id = $request->medical_center_id;
        $sample->sending_doctor_name = $request->sending_doctor_name;
        $sample->patient_name = $request->patient_name;
        $sample->patient_file_number = $request->patient_file_number;
        $sample->patient_nationality = $request->patient_nationality;
        $sample->res_doctor_name = $request->res_doctor_name;
        $sample->res_patient_name = $request->res_patient_name;
        $sample->res_patient_file_number = $request->res_patient_file_number;
        $sample->res_patient_nationality = $request->res_patient_nationality;
        $sample->save();

        return redirect()->route('backend.samples.index');


    }

    public function destroy( $id){
        // $admin->delete();
        // return redirect()->route('backend.admins.index');

       // $admin = Admin::all();
        $sample = Sample::findOrFail($id);
        $sample->delete();
        return redirect()->route('backend.samples.index');


    }



    public function restore(){

    }

    public function forceDelete(){

    }

}
