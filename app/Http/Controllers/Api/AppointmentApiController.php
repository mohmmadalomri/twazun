<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;

class AppointmentApiController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('doctors', 'patients', 'admin')->get();
        return response([
            'appointments' => $appointments
        ], 200);
    }


    public function show($id)
    {

        $appointment = Appointment::with('doctors', 'patients', 'admin')->find($id);
        return response()->json([
            'appointment' => $appointment
        ], 200);

    }


    public function store(Request $request)
    {
        $data['start_time'] = $request->start_time;
        $data['end_time'] = $request->end_time;
        $data['date'] = $request->date;
        $data['doctor_id'] = $request->doctor_id;
        $data['admins_id'] = $request->admins_id;
        $data['patient_id'] = $request->patient_id;

        $appointment = Appointment::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Appointment Created Successfully',
            'appointment' => $appointment,
        ]);
    }


    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        $data['start_time'] = $request->start_time;
        $data['end_time'] = $request->end_time;
        $data['date'] = $request->date;
        $data['doctor_id'] = $request->doctor_id;
        $data['admins_id'] = $request->admins_id;
        $data['patient_id'] = $request->patient_id;

        $appointment->update($data);

        return response()->json([
            'status' => true,
            'data' => $appointment,
            'message' => 'Request Information Updated Successfully',
        ]);
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return response()->json([
            'status' => true,
            'message' => 'Request Information deleted Successfully',
        ]);
    }


}
