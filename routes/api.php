<?php

use App\Http\Controllers\AdminController;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AccessTokenController;
// use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/admin/1/schedules/1', function () {
    return Appointment::create([
        'doctor_id' =>1,
        'admins_id' =>1,
        'start_time'=>'12:12:12',
        'end_time'=>'1:1:1',
        'date'=>'2023-1-1',
        'patient_id'=>1
    ]);
    });
    /////// Auth ApiToken     ///////////////
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
Route::post('auth/token/supervisor', [AccessTokenController::class,'storeSupervisor']);
Route::post('auth/token/user', [AccessTokenController::class,'storeUser']);
Route::post('auth/token/doctor', [AccessTokenController::class,'storeDoctor']);
Route::post('auth/token/admin', [AccessTokenController::class,'storeAdmin']);
Route::post('auth/token/lab', [AccessTokenController::class,'storeLab']);
Route::post('auth/token/medical-center', [AccessTokenController::class,'storeMedical']);
Route::post('auth/token/patient', [AccessTokenController::class,'storePatient']);

Route::delete('auth/token/{token?}', [AccessTokenController::class, 'destroy'])
    ->middleware('auth:sanctum');


///////////End Api Token//////////////////////////
Route::apiResource('doctor',\App\Http\Controllers\Api\DoctorApiController::class);
Route::apiResource('admin',\App\Http\Controllers\Api\AdminApiController::class);
Route::apiResource('patient',\App\Http\Controllers\Api\PatientApiController::class);
Route::apiResource('lab',\App\Http\Controllers\Api\LabApiController::class);
Route::apiResource('medical_center',\App\Http\Controllers\Api\MedicalCenterApiController::class);
Route::apiResource('sample',\App\Http\Controllers\Api\SampleApiController::class);
Route::apiResource('schedule',\App\Http\Controllers\Api\ScheduleApiController::class);
Route::apiResource('supervisor',\App\Http\Controllers\Api\SupervisorApiController::class);
Route::apiResource('report',\App\Http\Controllers\Api\ReportApiController::class);
Route::apiResource('notification',\App\Http\Controllers\Api\NotificationApiController::class);
Route::apiResource('user',\App\Http\Controllers\Api\UserApiController::class);
Route::apiResource('appointment',\App\Http\Controllers\Api\AppointmentApiController::class);

Route::get('/pro',function(){
    return 'prod';
});
// Route::group([
//     'prefix' => LaravelLocalization::setLocale(),
// 	'middleware' => [ 'localeCookieRedirect', 'localizationRedirect', 'localeViewPath' ]

// ],function(){

//     Route::group(
//         ['prefix'=>'/backend',
//         'as'=>'backend.',
//         'namespace'=>'App\Http\Controllers\Api',
//         // 'middleware'=>['auth:sanctum',config('jetstream.auth_session'),'verified']
//         ],
//         function(){

//             Route::get('/dashboard', 'DashboardApiController@index')->name('dashboard.index');

//             Route::group([
//                 'prefix'=>'/admins',
//                 'as'=>'admins.',
//                 'controller'=>'AdminApiController',],
//                 function(){
//                 Route::get('/', 'index')->name('index');
//                 Route::get('/show/{admin_id}', 'show')->name('show');
//                 // Route::get('/create', 'create')->name('create');
//                 Route::post('/store', 'store')->name('store');
//                 // Route::get('/edit/{admin_id}','edit')->name('edit');
//                 Route::put('/update/{admin_id}','update')->name('update');
//                 Route::delete('/delete/{admin_id}','destroy')->name('destroy');
//                 Route::get('/trash','trash')->name('trash');
//                 Route::put('/restore/{admin_id}','restore')->name('restore');
//                 Route::delete('/force_delete/{admin_id}','forceDelete')->name('forceDelete');
//             });


//             Route::group([
//                 'prefix'=>'/supervisors',
//                 'as'=>'supervisors.',
//                 'controller'=>'SupervisorApiController',],
//                 function(){
//                 Route::get('/', 'index')->name('index');
//                 Route::get('/show/{supervisor_id}', 'show')->name('show');
//                 // Route::get('/create', 'create')->name('create');
//                 Route::post('/store', 'store')->name('store');
// //Route::get('/edit/{supervisor_id}','edit')->name('edit');
//                 Route::put('/update/{supervisor_id}','update')->name('update');
//                 Route::delete('/delete/{supervisor_id}','destroy')->name('destroy');
//                 Route::get('/trash','trash')->name('trash');
//                 Route::put('/restore/{supervisor_id}','restore')->name('restore');
//                 Route::delete('/force_delete/{supervisor_id}','forceDelete')->name('forceDelete');
//             });

            // Route::group([
            //     'prefix'=>'/doctors',
            //     'as'=>'doctors.',
            //     'controller'=>'DoctorApiController',],
            //     function(){
            //     Route::get('/', 'index')->name('index');
            //     Route::get('/show/{doctor_id}', 'show')->name('show');
            //    // Route::get('/create', 'create')->name('create');
            //     Route::post('/store', 'store')->name('store');
            //    // Route::get('/edit/{doctor_id}','edit')->name('edit');
            //     Route::put('/update/{doctor_id}','update')->name('update');
            //     Route::delete('/delete/{doctor_id}','destroy')->name('destroy');
            //     Route::get('/trash','trash')->name('trash');
            //     Route::put('/restore/{doctor_id}','restore')->name('restore');
            //     Route::delete('/force_delete/{doctor_id}','forceDelete')->name('forceDelete');
            // });
            // Route::apiResource('doctor',\App\Http\Controllers\Api\DoctorApiController::class);

            // Route::group([
            //     'prefix'=>'/schedules',
            //     'as'=>'schedules.',
            //     'controller'=>'ScheduleApiController',],
            //     function(){
            //     Route::get('/', 'index')->name('index');
            //     Route::get('/show/{schedule_id}', 'show')->name('show');
            //    // Route::get('/create', 'create')->name('create');
            //     Route::post('/store', 'store')->name('store');
            //    // Route::get('/edit/{schedule_id}','edit')->name('edit');
            //     Route::put('/update/{schedule_id}','update')->name('update');
            //     Route::delete('/delete/{schedule_id}','destroy')->name('destroy');
            //     Route::get('/trash','trash')->name('trash');
            //     Route::put('/restore/{schedule_id}','restore')->name('restore');
            //     Route::delete('/force_delete/{schedule_id}','forceDelete')->name('forceDelete');
            // });

            // Route::group([
            //     'prefix'=>'/patients',
            //     'as'=>'patients.',
            //     'controller'=>'PatientApiController',],
            //     function(){
            //     Route::get('/', 'index')->name('index');
            //     Route::get('/show/{patient_id}', 'show')->name('show');
            //     //Route::get('/create', 'create')->name('create');
            //     Route::post('/store', 'store')->name('store');
            //   //  Route::get('/edit/{patient_id}','edit')->name('edit');
            //     Route::put('/update/{patient_id}','update')->name('update');
            //     Route::delete('/delete/{patient_id}','destroy')->name('destroy');
            //     Route::get('/trash','trash')->name('trash');
            //     Route::put('/restore/{patient_id}','restore')->name('restore');
            //     Route::delete('/force_delete/{patient_id}','forceDelete')->name('forceDelete');
            // });



            // Route::group([
            //     'prefix'=>'/appointments',
            //     'as'=>'appointments.',
            //     'controller'=>'AppointmentApiController',],
            //     function(){
            //     Route::get('/', 'index')->name('index');
            //     Route::get('/show/{appointment_id}', 'show')->name('show');
            //   //  Route::get('/create', 'create')->name('create');
            //     Route::post('/store', 'store')->name('store');
            //   //  Route::get('/edit/{appointment_id}','edit')->name('edit');
            //     Route::put('/update/{appointment_id}','update')->name('update');
            //     Route::delete('/delete/{appointment_id}','destroy')->name('destroy');
            //     Route::get('/trash','trash')->name('trash');
            //     Route::put('/restore/{appointment_id}','restore')->name('restore');
            //     Route::delete('/force_delete/{appointment_id}','forceDelete')->name('forceDelete');
            // });

            // Route::group([
            //     'prefix'=>'/medical_centers',
            //     'as'=>'medical_centers.',
            //     'controller'=>'MedicalCenterApiController',],
            //     function(){
            //     Route::get('/', 'index')->name('index');
            //     Route::get('/show/{medical_center_id}', 'show')->name('show');
            //    // Route::get('/create', 'create')->name('create');
            //     Route::post('/store', 'store')->name('store');
            //  //   Route::get('/edit/{medical_center_id}','edit')->name('edit');
            //     Route::put('/update/{medical_center_id}','update')->name('update');
            //     Route::delete('/delete/{medical_center_id}','destroy')->name('destroy');
            //     Route::get('/trash','trash')->name('trash');
            //     Route::put('/restore/{medical_center_id}','restore')->name('restore');
            //     Route::delete('/force_delete/{medical_center_id}','forceDelete')->name('forceDelete');
            // });



            // Route::group([
            //     'prefix'=>'/labs',
            //     'as'=>'labs.',
            //     'controller'=>'LabApiController',],
            //     function(){
            //     Route::get('/', 'index')->name('index');
            //     Route::get('/show/{lab_id}', 'show')->name('show');
            //  //   Route::get('/create', 'create')->name('create');
            //     Route::post('/store', 'store')->name('store');
            //   //  Route::get('/edit/{lab_id}','edit')->name('edit');
            //     Route::put('/update/{lab_id}','update')->name('update');
            //     Route::delete('/delete/{lab_id}','destroy')->name('destroy');
            //     Route::get('/trash','trash')->name('trash');
            //     Route::put('/restore/{lab_id}','restore')->name('restore');
            //     Route::delete('/force_delete/{lab_id}','forceDelete')->name('forceDelete');
            // });


            // Route::group([
            //     'prefix'=>'/reports',
            //     'as'=>'reports.',
            //     'controller'=>'ReportApiController',],
            //     function(){
            //     Route::get('/', 'index')->name('index');
            //     Route::get('/show/{report_id}', 'show')->name('show');
            //     //Route::get('/create', 'create')->name('create');
            //     Route::post('/store', 'store')->name('store');
            //    // Route::get('/edit/{report_id}','edit')->name('edit');
            //     Route::put('/update/{report_id}','update')->name('update');
            //     Route::delete('/delete/{report_id}','destroy')->name('destroy');
            //     Route::get('/trash','trash')->name('trash');
            //     Route::put('/restore/{report_id}','restore')->name('restore');
            //     Route::delete('/force_delete/{report_id}','forceDelete')->name('forceDelete');
            // });
            // Route::group([
            //     'prefix'=>'/samples',
            //     'as'=>'samples.',
            //     'controller'=>'SampleApiController',],
            //     function(){
            //     Route::get('/', 'index')->name('index');
            //     Route::get('/show/{supervisor_id}', 'show')->name('show');
            //     //Route::get('/create', 'create')->name('create');
            //     Route::post('/store', 'store')->name('store');
            //   //  Route::get('/edit/{supervisor_id}','edit')->name('edit');
            //     Route::put('/update/{supervisor_id}','update')->name('update');
            //     Route::delete('/delete/{supervisor_id}','destroy')->name('destroy');
            //     Route::get('/trash','trash')->name('trash');
            //     Route::put('/restore/{supervisor_id}','restore')->name('restore');
            //     Route::delete('/force_delete/{supervisor_id}','forceDelete')->name('forceDelete');
            // });


        // });

