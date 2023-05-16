<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginForm($type){
        if($type=="admin"){
        return view('auth.loginAdmin');}

        elseif($type=="doctor"){
            return view('auth.loginDoctor');}

            elseif($type=="patient"){
                return view('auth.patientLogin');}

                elseif($type=="lab"){
                    return view('auth.loginLab');}


                    else{
                        return view('auth.login');}
            }

    public function checkAdminLogin(Request $request)
    {
        $this->validate($request, [
            // 'full_name'   => 'required|full_name',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['full_name' => $request->full_name, 'password' => $request->password])) {

            return redirect()->intended('/admin');

        }

        elseif (Auth::guard('supervisor')->attempt(['full_name' => $request->full_name, 'password' => $request->password])) {

            return redirect()->intended('/supervisor');
        }
        return back()->withInput($request->only('full_name'));
    }
    public function checkDoctorLogin(Request $request)
    {
        $this->validate($request, [
            // 'full_name'   => 'required|full_name',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('doctor')->attempt(['full_name' => $request->full_name, 'password' => $request->password])) {

            return redirect()->intended('/backend/reports/create');
        }
        return back()->withInput($request->only('full_name'));
    }

    public function checkPatientLogin(Request $request)
    {
        $this->validate($request, [
            // 'full_name'   => 'required|full_name',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('patient')->attempt(['full_name' => $request->full_name, 'password' => $request->password])) {

            return redirect()->intended('/patient');
        }
        return back()->withInput($request->only('full_name'));
    }

    public function checkLabLogin(Request $request)
    {
        $this->validate($request, [
            // 'full_name'   => 'required|full_name',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('lab')->attempt(['name' => $request->name, 'password' => $request->password])) {

            return redirect()->intended('/lab');
        }
        return back()->withInput($request->only('full_name'));
    }


    public function checkUserLogin(Request $request)
    {
        $this->validate($request, [
            // 'full_name'   => 'required|full_name',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/lab');
        }
        return back()->withInput($request->only('full_name'));
    }
}
