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
use App\Models\User;
use PhpParser\Node\Stmt\Label;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
$admin=  Doctor::create([
    'full_name'=>' admin',
    'email'=>'super9@gmail.com',
    'password'=>123456,
    'phone_number'=>'0945458778',
    'n_number'=>'1234',
    'job_description'=>'nice',
    'job_ID'=>'2',
    'date_of_birth'=>'2022-3-5',
    'years_of_experience'=>10,
    'address'=>'syria',
    'nationality'=>'syrian',
    'Doctor_rate'=>4
]);
$admin->addRole('user');

    }
}
