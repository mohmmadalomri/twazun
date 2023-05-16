<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Appointment;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\DoctorPatient;
use App\Models\Lab;
use App\Models\MedicalCenter;
use App\Models\Report;
use App\Models\Sample;
use App\Models\Schedule;
use App\Models\Supervisor;
use PhpParser\Node\Stmt\Label;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{


        Admin::factory(5)->create();
        Doctor::factory(40)->create();
        Supervisor::factory(5)->create();
        Patient::factory(25)->create();
        Appointment::factory(10)->create();
        //  DoctorPatient::factory(10)->create();
        // Report::factory(10)->create();
        Schedule::factory(10)->create();
        MedicalCenter::factory(10)->create();
        Lab::factory(10)->create();
        Sample::factory(10)->create();


    }
}
