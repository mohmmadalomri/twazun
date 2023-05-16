<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Lab;
use App\Models\MedicalCenter;
use App\Models\Patient;
use App\Models\Report;
use App\Models\Schedule;
use App\Models\Supervisor;

class DashboardController extends Controller
{
    //

    public function index(){
        $appointments = Appointment::all();
        $patients = Patient::all();
        $doctors = Doctor::all();
        $labs   =  Lab::all();
        $medical_centers = MedicalCenter::all();
        $supervisors = Supervisor::all();
        $admins = Admin::all();
        $reports = Report::all();

        return view('backend.pages.dashboard.index',compact('appointments','patients','doctors','labs','medical_centers','supervisors','reports','admins'));
    }

    public function show(){

    }

    public function create(){

    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function trash(){

    }

    public function restore(){

    }

    public function forceDelete(){

    }


}
