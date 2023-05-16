<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\Supervisor;

class SupervisorApiController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {

        $supervisors = Supervisor::all();

        return response([
            'supervisors' => $supervisors
        ], 200);

        //  return view('backend.pages.supervisors.index',compact('supervisors'));
    }

    public function show($id)
    {
        $supervisoer = Schedule::find($id);
        return response()->json([
            'supervisoer' => $supervisoer
        ], 200);

    }


    public function store(Request $request)
    {

        $data['full_name'] = $request->full_name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        // $admin->phone_number = $request->phone_number;
        $data['is_reception'] = $request->is_reception;
        $data['is_analyzer'] = $request->is_analyzer;
        //   $admin->is_supervisor = $request->is_supervisor;

        $supervisor = Supervisor::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Supervisor Created Successfully',
            'supervisor' => $supervisor,
        ]);

    }


    public function update(Request $request, $id)
    {

        $supervisor = Supervisor::findOrFail($id);
        $data['full_name'] = $request->full_name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        // $admin->phone_number = $request->phone_number;
        $data['is_reception'] = $request->is_reception;
        $data['is_analyzer'] = $request->is_analyzer;
        //   $admin->is_supervisor = $request->is_supervisor;
        $supervisor->update($data);
        return response()->json([
            'status' => true,
            'data' => $supervisor,
            'message' => 'Supervisor Updated Successfully',
        ]);
    }

    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $supervisor = Supervisor::findOrFail($id);
        $supervisor->delete();
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
