<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Doctor;

class ScheduleApiController extends Controller
{
    // use ApiResponseTrait;
    public function index()
    {
        $schedules = Schedule::all();
        return response([
            'schedules' => $schedules
        ], 200);


    }

    public function show($id)
    {
        $schedules = Schedule::find($id);
        return response()->json([
            'schedules' => $schedules
        ], 200);
    }



    public function store(Request $request)
    {
        $data['start_time'] = $request->start_time;
        $data['end_time'] = $request->end_time;
        $data['date'] = $request->date;
        $data['doctor_id'] = $request->doctor_id;
        $data['admin_id'] = $request->admin_id;
        $data['supervisor_id'] = $request->supervisor_id;
        // $schedule->is_supervisor = $request->is_supervisor;
        $schedule = Schedule::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Schedule Created Successfully',
            'schedule' => $schedule,
        ]);

    }



    public function update(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);
        $data['start_time'] = $request->start_time;
        $data['end_time'] = $request->end_time;
        $data['date'] = $request->date;
        $data['doctor_id'] = $request->doctor_id;
        $data['admin_id'] = $request->admin_id;
        $data['supervisor_id'] = $request->supervisor_id;
        $schedule->update($data);
        return response()->json([
            'status' => true,
            'schedule' => $schedule,
            'message' => 'Schedule Updated Successfully',
        ]);
    }

    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();
        return response()->json([
            'status' => true,
            'message' => 'Request Information deleted Successfully',
        ]);
    }


}
