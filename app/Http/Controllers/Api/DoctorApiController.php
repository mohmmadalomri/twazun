<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorApiController extends Controller
{
    // use ApiResponseTrait;

    public function index()
    {

        $doctors = Doctor::with('admin', 'supervisor')->get();
        return response([
            'doctors' => $doctors
        ], 200);
    }
    // return view('backend.pages.doctors.index',compact('doctors'));
    // return  $doctors;


    public function show($id)
    {

        $doctoer = Doctor::with('admin', 'supervisor')->find($id);
        return response()->json([
            'doctoer' => $doctoer
        ], 200);
    }

    public function store(Request $request)
    {

        $data['full_name'] = $request->full_name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['n_number'] = $request->n_number;
        $data['job_description'] = $request->job_description;
        $data['job_ID'] = $request->Job_ID;
        $data['date_of_birth'] = $request->date_of_birth;
        $data['years_of_experienc'] = $request->years_of_experience;
        $data['phone_number'] = $request->phone_number;
        $data['address'] = $request->address;
        $data['nationality'] = $request->nationality;
        $data['gender'] = $request->gender;
        $data['about'] = $request->about;
        $data['Doctor_rate'] = $request->Doctor_rate;
        $data['admin_id'] = $request->admin_id;
        $data['supervisor_id'] = $request->supervisor_id;
        // $data = $request->all();
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $data['image'] = $this->images($image, null);
        }
        // $file_ext=$request->photo->getClientOriginalExtension() ;
        // $file_name=time().'.'.$file_ext;
        // $path='images/doctors';
        // $request->photo->move($path,$file_name);
        // $data['image']=$file_name;
        $doctor = Doctor::create($data);
        return response()->json([
            'status' => true,
            'message' => 'Doctor Created Successfully',
            'doctor' => $doctor,
        ]);
    }


    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $data['full_name'] = $request->full_name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['n_number'] = $request->n_number;
        $data['job_description'] = $request->job_description;
        $data['job_ID'] = $request->Job_ID;
        $data['date_of_birth'] = $request->date_of_birth;
        $data['years_of_experienc'] = $request->years_of_experience;
        $data['phone_number'] = $request->phone_number;
        $data['address'] = $request->address;
        $data['nationality'] = $request->nationality;
        $data['gender'] = $request->gender;
        $data['about'] = $request->about;
        $data['Doctor_rate'] = $request->Doctor_rate;
        $data['admin_id'] = $request->admin_id;
        $data['supervisor_id'] = $request->supervisor_id;
        if ($request->hasFile('image')) {

            $oldimage = $doctor->image;
            $image = $request->file('image');
            $data['image'] = $this->images($image, $oldimage);
        }
        $doctor->update($data);
        return response()->json([
            'status' => true,
            'data' => $doctor,
            'message' => 'Request Information Updated Successfully',
        ]);
    }

    public function destroy($id)
    {

        $doctor = Doctor::findOrFail($id);
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
