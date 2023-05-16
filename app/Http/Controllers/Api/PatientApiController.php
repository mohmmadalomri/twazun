<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientApiController extends Controller
{
    // use ApiResponseTrait;
    public function index()
    {

        $patients = Patient::with('admin', 'supervisor', 'appointment', 'doctors', 'report')->get();
        // return view('backend.pages.patients.index',compact('patients'));
        return response([
            'patients' => $patients
        ], 200);

    }

    public function show($id)
    {

        $patient = Patient::with('admin', 'supervisor', 'appointment', 'doctors', 'report')->find($id);
        return response()->json([
            'patient' => $patient
        ], 200);
    }


    public function store(Request $request)
    {


        $data['full_name'] = $request->full_name;
        $data['date_of_birth'] = $request->date_of_birth;
        $data['n_number'] = $request->n_number;
        $data['phone_number'] = $request->phone_number;
        $data['file_no'] = $request->file_no;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['height'] = $request->height;
        $data['weight'] = $request->weight;
        $data['blood_type'] = $request->blood_type;
        $data['disease_name'] = $request->disease_name;
        $data['description_disease'] = $request->description_disease;
        $data['gender'] = $request->gender;
        $data['patient_rate'] = $request->patient_rate;
        $data['supervisor_id'] = $request->supervisor_id;
        $data['admin_id'] = $request->admin_id;
        $data['password'] = $request->password;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
        }
//        $data['image'] = $this->images($image, null);
        // $file_ext=$request->photo->getClientOriginalExtension() ;
        // $file_name=time().'.'.$file_ext;
        // $path='images/patients';
        // $request->photo->move($path,$file_name);
        // $data['photo']=$file_name;
        $patient = Patient::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Patient Created Successfully',
            'patient' => $patient,
        ]);

    }


    public function update(Request $request, $id)
    {

        $patient = Patient::findOrFail($id);
        $data['full_name'] = $request->full_name;
        $data['date_of_birth'] = $request->date_of_birth;
        $data['n_number'] = $request->n_number;
        $data['phone_number'] = $request->phone_number;
        $data['file_no'] = $request->file_no;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['height'] = $request->height;
        $data['weight'] = $request->weight;
        $data['blood_type'] = $request->blood_type;
        $data['disease_name'] = $request->disease_name;
        $data['description_disease'] = $request->description_disease;
        $data['gender'] = $request->gender;
        $data['patient_rate'] = $request->patient_rate;
        $data['supervisor_id'] = $request->supervisor_id;
        $data['admin_id'] = $request->admin_id;
        $data['password'] = $request->password;
        $data = $request->all();
        if ($request->hasFile('photo')) {

            $oldimage = $patient->photo;
            $image = $request->file('photo');
            $data['photo'] = $this->images($image, $oldimage);
        }
        $patient->update($data);
        return response()->json([
            'status' => true,
            'data' => $patient,
            'message' => 'Patient Updated Successfully',
        ]);


    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return response()->json([
            'status' => true,
            'message' => 'Request Information deleted Successfully',
        ]);
    }

    public function restore()
    {

    }

    public function forceDelete()
    {

    }
}
