<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
class DoctorController extends Controller
{
    //
    public function index(){

        $doctors = Doctor::all();

         return view('backend.pages.doctors.index',compact('doctors'));
        // return  $doctors;

    }

    public function show($id){
        $doctor = Doctor::find($id);
        return view('backend.pages.doctors.show',compact('doctor'));
    }

    public function create(){

        return view('backend.pages.doctors.create');
    }

    public function store(Request $request){
        $doctor = new Doctor;
        $doctor->full_name = $request->full_name;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $doctor->n_number = $request->n_number;
        $doctor->job_description = $request->job_description;
        $doctor->job_ID = $request->Job_ID;
        $doctor->date_of_birth = $request->date_of_birth;
        $doctor->years_of_experience = $request->years_of_experience;
        $doctor->phone_number = $request->phone_number;
        $doctor->address = $request->address;
        $doctor->nationality = $request->nationality;
        $doctor->gender = $request->gender;
        $doctor->about = $request->about;
        $doctor->Doctor_rate = $request->Doctor_rate;
        $doctor->admin_id = $request->admin_id;
        $doctor->supervisor_id = $request->supervisor_id;
        // $file_ext=$request->photo->getClientOriginalExtension() ;
        // $file_name=time().'.'.$file_ext;
        // $path='images/doctors';
        // $request->photo->move($path,$file_name);
        // $doctor->image=$file_name;
        $doctor->save();

    }

    public function edit($id){

        $doctor = Doctor::findOrFail($id);

        return view('backend.pages.doctors.edit',compact('doctor'));
    }

    public function update(Request $request,$id){
        $doctor =  Doctor::findOrFail($id);
        $doctor->full_name = $request->full_name;
        $doctor->email = $request->email;
        $doctor->password = $request->password;
        $doctor->n_number = $request->n_number;
        $doctor->job_description = $request->job_description;
        $doctor->job_ID = $request->Job_ID;
        $doctor->date_of_birth = $request->date_of_birth;
        $doctor->years_of_experience = $request->years_of_experience;
        $doctor->phone_number = $request->phone_number;
        $doctor->address = $request->address;
        $doctor->nationality = $request->nationality;
        $doctor->gender = $request->gender;
        $doctor->about = $request->about;
        $doctor->Doctor_rate = $request->Doctor_rate;
        $doctor->admin_id = $request->admin_id;
        $doctor->supervisor_id = $request->supervisor_id;
        if ($request->hasFile('photo')) {
         $file_ext=$request->photo->getClientOriginalExtension() ;
                 $file_name=time().'.'.$file_ext;
                 $path='images/doctors';
                 $request->photo->move($path,$file_name);
                 $doctor->image=$file_name;
        $doctor->image = $request->photo;
        }




        $doctor->save();

        return redirect()->route('backend.doctors.index');
    }

    public function destroy($id){
        $doctor =Doctor::all();
        $doctor =Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->route('backend.doctors.index');
    }

    public function restore(){

    }

    public function forceDelete(){

    }
}
