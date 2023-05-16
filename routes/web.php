<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\PdfController;
use App\Models\Report;
// use Mcamara\LaravelLocalization\LaravelLocalization;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
 Auth::routes();
// Route::get('/pdf' ,function(){
//     return view('Pdf.view');
// });
// Route::get('/pdf' ,[PdfController::class,'index']);
Route::get('/viewpdf' ,[ReportController::class,'viewpdf'])->name('view-pdf');
Route::get('/login/{type}',[LoginController::class,'loginForm'])->middleware('guest')->name('admin.login');
Route::post('/login/admin',[LoginController::class,'checkAdminLogin'])->name('save.admin.login');
Route::post('/login/doctor',[LoginController::class,'checkDoctorLogin'])->name('save.doctor.login');
Route::post('/login/patient',[LoginController::class,'checkPatientLogin'])->name('save.lab.login');
Route::post('/login/lab',[LoginController::class,'checkLabLogin'])->name('save.lab.login');
Route::post('/login/user',[LoginController::class,'checkUserLogin'])->name('save.login');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/register/{type}',[RegisterController::class,'registerForm'])->middleware('guest')->name('admin.login');
Route::post('/register/doctor',[RegisterController::class,'doctorCreate'])->middleware('guest')->name('doctor.register');
Route::post('/register/patient',[RegisterController::class,'patientCreate'])->middleware('guest')->name('patient.register');
Route::get('/123', function () {
    return view('date');
});
Route::get('/showview1',function(){
    $reports= Report::all()->last();
    return view('Pdf.view',compact('reports'));

});
Route::get('/reportdone',function(){
    $report= Report::all()->last();
    return view('Pdf.viewreport',compact('report'));

});
Route::get('/img',function(){
    $report= Report::all()->last();
    return view('Pdf.imageonly',compact('report'));

});

Route::get('/showview2',function(){
    $reports= Report::all();
    return view('Pdf.view2',compact('reports'));

});
Route::get('/pdf29', function () {
    return view('testpdf');
});
Route::get('/admin', function () {
    return view('auth.admin');
});

Route::get('/supervisor', function () {
    return view('auth.supervisor');
});
Route::get('/mail' ,[PdfController::class,'test']);

Route::get('/lab', function () {
    return view('auth.lab');
});
Route::get('/signin',function () {
    return view('auth.sign');
})->name('signin');
Route::get('/doctor', function () {
    return view('auth.doctor');
});
Route::group(['prefix' => 'test', 'middleware' => ['role:user']] ,function() {
Route::get('/test', function () {
    return view('auth.lab');
});
});
Route::get('/teest',[PdfController::class,'nawar'])->middleware('role:user');
Route::post('/report/show',[ReportController::class,'index']);

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeCookieRedirect', 'localizationRedirect', 'localeViewPath' ]

],function(){

    Route::group(
        ['prefix'=>'/backend',
        'as'=>'backend.',
        'namespace'=>'App\Http\Controllers\Backend',
        // 'middleware'=>['auth:sanctum',config('jetstream.auth_session'),'verified']
        ],
        function(){

            Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

            Route::group([
                'prefix'=>'/admins',
                'as'=>'admins.',
                'controller'=>'AdminController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{admin_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{admin_id}','edit')->name('edit');
                Route::post('/update/{admin_id}','update')->name('update');
                Route::delete('/delete/{admin_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{admin_id}','restore')->name('restore');
                Route::delete('/force_delete/{admin_id}','forceDelete')->name('forceDelete');
            });

            Route::group([
                'prefix'=>'/samples',
                'as'=>'samples.',
                'controller'=>'SampleController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{sample_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{sample_id}','edit')->name('edit');
                Route::put('/update/{sample_id}','update')->name('update');
                Route::delete('/delete/{sample_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{sample_id}','restore')->name('restore');
                Route::delete('/force_delete/{sample_id}','forceDelete')->name('forceDelete');
            });
            Route::group([
                'prefix'=>'/users',
                'as'=>'users.',
                'controller'=>'UserController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{user_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{user_id}','edit')->name('edit');
                Route::post('/update/{user_id}','update')->name('update');
                Route::delete('/delete/{user_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{user_id}','restore')->name('restore');
                Route::delete('/force_delete/{user_id}','forceDelete')->name('forceDelete');
            });


            Route::group([
                'prefix'=>'/supervisors',
                'as'=>'supervisors.',
                'controller'=>'SupervisorController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{supervisor_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{supervisor_id}','edit')->name('edit');
                Route::post('/update/{supervisor_id}','update')->name('update');
                Route::delete('/delete/{supervisor_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{supervisor_id}','restore')->name('restore');
                Route::delete('/force_delete/{supervisor_id}','forceDelete')->name('forceDelete');
            });

            Route::group([
                'prefix'=>'/doctors',
                'as'=>'doctors.',
                'controller'=>'DoctorController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{doctor_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{doctor_id}','edit')->name('edit');
                Route::post('/update/{doctor_id}','update')->name('update');
                Route::delete('/delete/{doctor_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{doctor_id}','restore')->name('restore');
                Route::delete('/force_delete/{doctor_id}','forceDelete')->name('forceDelete');
            });


            Route::group([
                'prefix'=>'/schedules',
                'as'=>'schedules.',
                'controller'=>'ScheduleController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{schedule_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{schedule_id}','edit')->name('edit');
                Route::post('/update/{schedule_id}','update')->name('update');
                Route::delete('/delete/{schedule_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{schedule_id}','restore')->name('restore');
                Route::delete('/force_delete/{schedule_id}','forceDelete')->name('forceDelete');
            });

            Route::group([
                'prefix'=>'/patients',
                'as'=>'patients.',
                'controller'=>'PatientController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{patient_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{patient_id}','edit')->name('edit');
                Route::post('/update/{patient_id}','update')->name('update');
                Route::delete('/delete/{patient_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{patient_id}','restore')->name('restore');
                Route::delete('/force_delete/{patient_id}','forceDelete')->name('forceDelete');
            });



            Route::group([
                'prefix'=>'/appointments',
                'as'=>'appointments.',
                'controller'=>'AppointmentController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{appointment_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{appointment_id}','edit')->name('edit');
                Route::post('/update/{appointment_id}','update')->name('update');
                Route::delete('/delete/{appointment_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{appointment_id}','restore')->name('restore');
                Route::delete('/force_delete/{appointment_id}','forceDelete')->name('forceDelete');
            });

            Route::group([
                'prefix'=>'/medical_centers',
                'as'=>'medical_centers.',
                'controller'=>'MedicalCenterController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{medical_center_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{medical_center_id}','edit')->name('edit');
                Route::post('/update/{medical_center_id}','update')->name('update');
                Route::delete('/delete/{medical_center_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{medical_center_id}','restore')->name('restore');
                Route::delete('/force_delete/{medical_center_id}','forceDelete')->name('forceDelete');
            });



            Route::group([
                'prefix'=>'/labs',
                'as'=>'labs.',
                'controller'=>'LabController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{lab_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{lab_id}','edit')->name('edit');
                Route::post('/update/{lab_id}','update')->name('update');
                Route::delete('/delete/{lab_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{lab_id}','restore')->name('restore');
                Route::delete('/force_delete/{lab_id}','forceDelete')->name('forceDelete');
            });


            Route::group([
                'prefix'=>'/reports',
                'as'=>'reports.',
                'controller'=>'ReportController',],
                function(){
                Route::get('/', 'index')->name('index');
                Route::get('/show/{report_id}', 'show')->name('show');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{report_id}','edit')->name('edit');
                Route::post('/update/{report_id}','update')->name('update');
                Route::delete('/delete/{report_id}','destroy')->name('destroy');
                Route::get('/trash','trash')->name('trash');
                Route::put('/restore/{report_id}','restore')->name('restore');
                Route::delete('/force_delete/{report_id}','forceDelete')->name('forceDelete');
            });


        });
    });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


