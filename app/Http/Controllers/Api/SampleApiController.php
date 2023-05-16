<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sample;
use Illuminate\Support\Facades\Response;

// use GuzzleHttp\Psr7\Response;
// use Symfony\Component\HttpFoundation\Response;
// use Nette\Utils\Json;
// use Spatie\FlareClient\Http\Response;
// use

class SampleApiController extends Controller
{
    // use ApiResponseTrait;
    public function index()
    {

        $samples = Sample::all();
        return response([
            'samples' => $samples
        ], 200);


        // $samplesjes=Response::Json($samples);

        // return  $samples;

    }

// return view('backend.pages.doctors.index',compact('doctors'));
    public function show($id)
    {
        $sample = Sample::find($id);
        return \response()->json([
            'samle' => $sample
        ], 200);

    }


    public function store(Request $request)
    {

        $data['lab_id'] = $request->lab_id;
        $data['medical_center_id'] = $request->medical_center_id;
        $data['sending_doctor_name'] = $request->sending_doctor_name;
        $data['patient_name'] = $request->patient_name;
        $data['patient_file_number'] = $request->patient_file_number;
        $data['patient_nationality'] = $request->patient_nationality;
        $data['res_doctor_name'] = $request->res_doctor_name;
        $data['res_patient_name'] = $request->res_patient_name;
        $data['res_patient_file_number'] = $request->res_patient_file_number;
        $data['res_patient_nationality'] = $request->res_patient_nationality;
        $sample = Sample::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Sample Created Successfully',
            'sample' => $sample,
        ]);

    }


    public function update(Request $request, $id)
    {
        $sample = Sample::findOrFail($id);

        $data['lab_id'] = $request->lab_id;
        $data['medical_center_id'] = $request->medical_center_id;
        $data['sending_doctor_name'] = $request->sending_doctor_name;
        $data['patient_name'] = $request->patient_name;
        $data['patient_file_number'] = $request->patient_file_number;
        $data['patient_nationality'] = $request->patient_nationality;
        $data['res_doctor_name'] = $request->res_doctor_name;
        $data['res_patient_name'] = $request->res_patient_name;
        $data['res_patient_file_number'] = $request->res_patient_file_number;
        $data['res_patient_nationality'] = $request->res_patient_nationality;


        $sample->update($data);
        return response()->json([
            'status' => true,
            'data' => $sample,
            'message' => 'Sample Updated Successfully',
        ]);
    }

    public function destroy($id)
    {
        $sample = Sample::findOrFail($id);
        $sample->delete();
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
