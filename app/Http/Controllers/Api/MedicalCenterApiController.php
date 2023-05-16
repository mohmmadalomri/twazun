<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedicalCenter;

class MedicalCenterApiController extends Controller
{
    // use ApiResponseTrait;
    public function index()
    {

        $medical_centers = MedicalCenter::all();
        return response([
            'medical_centers' => $medical_centers
        ], 200);

        // return view('backend.pages.medical_centers.index',compact('medical_centers'));
    }

    public function show($id)
    {

        $meducal_cinter = MedicalCenter::find($id);
        return response()->json([
            'meducal_cinter' => $meducal_cinter
        ], 200);
    }

    public function store(Request $request)
    {

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['phone_number'] = $request->phone_number;
        //$medical_center->is_reception = $request->is_reception;
        $data['address'] = $request->address;
        $data['website'] = $request->website;
        $medical_center = MedicalCenter::create($data);

        return response()->json([
            'status' => true,
            'message' => 'medical_center Created Successfully',
            'medical_center' => $medical_center,
        ]);

    }


    public function update(Request $request, $id)
    {

        $medical_center = MedicalCenter::findOrFail($id);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['phone_number'] = $request->phone_number;
        //$medical_center->is_reception = $request->is_reception;
        $data['address'] = $request->address;
        $data['website'] = $request->website;
        $medical_center = MedicalCenter::create($data);

        $medical_center->update($data);
        return response()->json([
            'status' => true,
            'medical_center' => $medical_center,
            'message' => 'User Updated Successfully',
        ]);
    }


    public function destroy($id)
    {
        $medical_center = MedicalCenter::findOrFail($id);
        $medical_center->delete();
        return response()->json([
            'status' => true,
            'message' => 'Request Information deleted Successfully',
        ]);
    }

    public function trash()
    {

    }

    public function restore()
    {

    }

    public function forceDelete()
    {

    }

}
