<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     public function registerForm($type){
        if($type=="doctor"){
        return view('auth.doctorRegister');}

        elseif($type=="patient"){
         return view('auth.patientRegister');}
        }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function doctorCreate(Request $request)
    {         $doctor=  Doctor::create([
                'full_name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'n_number'=>'1234',
                'job_description'=>'nice',
                'job_ID'=>10,
                'date_of_birth'=>'2020-8-20',
                'years_of_experience'=>10,
                'phone_number'=>'0999888877',
                'address'=>'syria',
                'nationality'=>'Syrian',


            ]);
            $doctor->save();
    }

    public function patientCreate(array $data)
    {         return Patient::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),]);
    }
}

