<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
class PatientController extends Controller
{
    //
    public function index(){

        $patients = Patient::all();
         return view('backend.pages.patients.index',compact('patients'));
        //  return $patients;
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        return view('backend.pages.patients.show',compact('patient'));
    }


    public function create(){

        return view('backend.pages.patients.create');

    }

    public function store(Request $request){

        $patient = new Patient;
        $patient->full_name = $request->full_name;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->n_number = $request->n_number;
        $patient->phone_number = $request->phone_number;
        $patient->file_no = $request->file_no;
        $patient->email = $request->email;
        $patient->password = $request->password;
        $patient->address = $request->address;
        $patient->height = $request->height;
        $patient->weight = $request->weight;
        $patient->blood_type = $request->blood_type;
        $patient->disease_name = $request->disease_name;
        $patient->description_disease = $request->description_disease;
        $patient->gender = $request->gender;
        $patient->patient_rate = $request->patient_rate;
        $patient->supervisor_id = $request->supervisor_id;
        $patient->admin_id = $request->admin_id;
        $patient->password = $request->password;
        if ($request->hasFile('image')) {
             $image_user=$request->file('photo')->store('user_image','public');
             $patient->photo = $image_user;

         $file_ext=$request->photo->getClientOriginalExtension() ;
         $file_name=time().'.'.$file_ext;
         $path='images/patients';
         $request->photo->move($path,$file_name);
         $patient->photo=$file_name;
        }
        $patient->save();

        return redirect()->route('backend.patients.index');

    }

    public function edit($id){

        $patient = Patient::findOrFail($id);

        return view('backend.pages.patients.edit',compact('patient'));

    }

    public function update(Request $request,$id){
        $patient =  Patient::findOrFail($id);
        $patient->full_name = $request->full_name;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->n_number = $request->n_number;
        $patient->phone_number = $request->phone_number;
        $patient->file_no = $request->file_no;
        $patient->email = $request->email;
        $patient->password = $request->password;
        $patient->address = $request->address;
        $patient->height = $request->height;
        $patient->weight = $request->weight;
        $patient->blood_type = $request->blood_type;
        $patient->disease_name = $request->disease_name;
        $patient->description_disease = $request->description_disease;
        $patient->gender = $request->gender;
        $patient->patient_rate = $request->patient_rate;
        $patient->supervisor_id = $request->supervisor_id;
        $patient->admin_id = $request->admin_id;
        $patient->password = $request->password;
        $patient->photo=$request->hasFile('photo');
        // $file_ext=$request->photo->getClientOriginalExtension() ;
        //         $file_name=time().'.'.$file_ext;
        //         $path='images/patients';
        //         $request->photo->move($path,$file_name);
        //         $patient->photo=$file_name;
        $patient->save();

        return redirect()->route('backend.patients.index');

    }



    public function destroy($id){
        $patient = Patient::all();
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect()->route('backend.patients.index');


    }

    public function restore(){

    }

    public function forceDelete(){

    }
}
