<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Doctor;

class ScheduleController extends Controller
{
    //
    public function index(){

        $schedules = Schedule::all();

         return view('backend.pages.schedules.index',compact('schedules'));
        //return  $schedules;
    }

    public function show($id){
        $schedule = Schedule::find($id);
        return view('backend.pages.schedules.show',compact('schedule'));
    }

    public function create(){

        $doctors = Doctor::all();
        $admins = Admin::all();
      //  $doctors = Doctor::all();

        return view('backend.pages.schedules.create',compact('admins','doctors'));

    }

    public function store(Request $request){
        $schedule = new Schedule;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->date = $request->date;
        $schedule->doctor_id = $request->doctor_id;
        $schedule->admin_id = $request->admin_id;
        $schedule->supervisor_id = $request->supervisor_id;
        // $schedule->is_supervisor = $request->is_supervisor;
        $schedule->save();

        return redirect()->route('backend.schedules.index');

    }


    public function edit($id){
        $schedule = Schedule::findOrFail($id);
        $admins = Admin::all();;
        $doctors=Doctor::all();
        return view('backend.pages.schedules.edit',compact('admins','schedule','doctors'));
    }


    public function update(Request $request, $id){
        $schedule =  Schedule::findOrFail($id);
        $schedule->end_time = $request->end_time;
        $schedule->start_time = $request->start_time;
        $schedule->date = $request->date;
        $schedule->doctor_id = $request->doctor_id;
        $schedule->admin_id = 1; #Ask Mr.Odui
        $schedule->supervisor_id = $request->supervisor_id;
        $schedule->save();

        return redirect()->route('backend.schedules.index');

    }
    public function destroy($id){

    //  $schedule = Schedule::all();
    $schedule = Schedule::findOrFail($id);
    $schedule->delete();
    return redirect()->route('backend.schedules.index');


}

    public function restore(){

    }

    public function forceDelete(){

    }
}
