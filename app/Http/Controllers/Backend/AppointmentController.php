<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Schedule;

class AppointmentController extends Controller
{
    //
    public function index(){
        $appointments = Appointment::all();
         return view('backend.pages.appointments.index',compact('appointments'));
        // return $appointments;
    }

    public function show($id){
        $appointment = Appointment::find($id);
        return view('backend.pages.appointments.show',compact('appointment'));

    }

    public function create(){

        $doctors = Doctor::all();
        $admins = Admin::all();
        $patients = Patient::all();

        return view('backend.pages.appointments.create',compact('doctors','patients','admins'));

    }

    public function store(Request $request){
        $appointment = new Appointment;
        $appointment->start_time = $request->start_time;
        $appointment->end_time = $request->end_time;
        $appointment->date = $request->date;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->admins_id = $request->admins_id;
        $appointment->patient_id = $request->patient_id;
        // $appointment->is_supervisor = $request->is_supervisor;
        $appointment->save();
        return redirect()->route('backend.appointments.index');
    }

    public function edit($id){
        $appointment = Appointment::findOrFail($id);
        $schedule = Schedule::all();
        $admins = Admin::all();
        $patients = Patient::all();
        $doctors=Doctor::all();
        return view('backend.pages.appointments.edit',compact('admins','schedule','doctors','appointment','patients'));
        // return view('backend.pages.appointments.edit',compact('appointment'));
    }


    public function update(Request $request,$id){
        $appointment =  Appointment::findOrFail($id);
        $appointment->start_time = $request->start_time;
        $appointment->end_time = $request->end_time;
        $appointment->date = $request->date;
        $appointment->doctor_id = $request->doctor_id;
        // $appointment->admin_id = $request->admin_id;
        $appointment->patient_id = $request->patient_id;
        // $appointment->is_supervisor = $request->is_supervisor;
        $appointment->save();
        return redirect()->route('backend.appointments.index');
    }

    public function destroy($id){

        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return redirect()->route('backend.appointments.index');
    }

    public function restore(){

    }

    public function forceDelete(){

    }
}
