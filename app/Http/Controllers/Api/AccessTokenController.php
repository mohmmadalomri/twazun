<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Lab;
use App\Models\MedicalCenter;
use App\Models\Patient;
use App\Models\Supervisor;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;

class AccessTokenController extends Controller
{ use HasApiTokens;

    public function storeAdmin(Request $request)
    {

        $request->validate([
            'email' => 'required|email|max:255',
        ]);
        $admin = Admin::where('email', $request->email)->first();
        if ($admin && Hash::check($request->password, $admin->password)) {
            $device_name = $request->post('device_name', $request->userAgent());
            $token = $admin->createToken($device_name);
            return \Illuminate\Support\Facades\Response::json([
                'token' => $token->plainTextToken,
                'admin' => $admin,
            ], 201);
        }
        return \Illuminate\Support\Facades\Response::json([
            'code' => 0,
            'message' => 'invaled credentioal'
        ], 401);


    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',

        ]);

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $device_name = $request->post('device_name', $request->userAgent());
            $token = $user->createToken($device_name);
            return \Illuminate\Support\Facades\Response::json([
                'token' => $token->plainTextToken,
                'user' => $user,
            ], 201);
        }
        return \Illuminate\Support\Facades\Response::json([
            'code' => 0,
            'message' => 'invaled credentioal'
        ], 401);


    }
    public function storeDoctor(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',

        ]);

        $doctor = Doctor::where('email', $request->email)->first();
        if ($doctor && Hash::check($request->password, $doctor->password)) {
            $device_name = $request->post('device_name', $request->userAgent());
            $token = $doctor->createToken($device_name);
            return \Illuminate\Support\Facades\Response::json([
                'token' => $token->plainTextToken,
                'doctor' => $doctor,
            ], 201);
        }
        return \Illuminate\Support\Facades\Response::json([
            'code' => 0,
            'message' => 'invaled credentioal'
        ], 401);


    }

    public function storeLab(Request $request)
    {

        $request->validate([
            'email' => 'required|email|max:255',
        ]);
        $lab = Lab::where('email', $request->email)->first();
        if ($lab && Hash::check($request->password, $lab->password)) {
            $device_name = $request->post('device_name', $request->userAgent());
            $token = $lab->createToken($device_name);
            return \Illuminate\Support\Facades\Response::json([
                'token' => $token->plainTextToken,
                'lab' => $lab,
            ], 201);
        }
        return \Illuminate\Support\Facades\Response::json([
            'code' => 0,
            'message' => 'invaled credentioal'
        ], 401);


    }

    public function storePatient(Request $request)
    {

        $request->validate([
            'email' => 'required|email|max:255',
        ]);
        $patient = Patient::where('email', $request->email)->first();
        if ($patient && Hash::check($request->password, $patient->password)) {
            $device_name = $request->post('device_name', $request->userAgent());
            $token = $patient->createToken($device_name);
            return \Illuminate\Support\Facades\Response::json([
                'token' => $token->plainTextToken,
                'patient' => $patient,
            ], 201);
        }
        return \Illuminate\Support\Facades\Response::json([
            'code' => 0,
            'message' => 'invaled credentioal'
        ], 401);


    }


    public function storeMedical(Request $request)
    {

        $request->validate([
            'email' => 'required|email|max:255',
        ]);
        $medical = MedicalCenter::where('email', $request->email)->first();
        if ($medical && Hash::check($request->password, $medical->password)) {
            $device_name = $request->post('device_name', $request->userAgent());
            $token = $medical->createToken($device_name);
            return \Illuminate\Support\Facades\Response::json([
                'token' => $token->plainTextToken,
                'medical-center' => $medical,
            ], 201);
        }
        return \Illuminate\Support\Facades\Response::json([
            'code' => 0,
            'message' => 'invaled credentioal'
        ], 401);


    }

    public function storeSupervisor(Request $request)
    {

        $request->validate([
            'email' => 'required|email|max:255',
        ]);
        $supervisor = Supervisor::where('email', $request->email)->first();
        if ($supervisor && Hash::check($request->password, $supervisor->password)) {
            $device_name = $request->post('device_name', $request->userAgent());
            $token = $supervisor->createToken($device_name);
            return \Illuminate\Support\Facades\Response::json([
                'token' => $token->plainTextToken,
                'supervisor' => $supervisor,
            ], 201);
        }
        return \Illuminate\Support\Facades\Response::json([
            'code' => 0,
            'message' => 'invaled credentioal'
        ], 401);


    }

    public function destroy($token = null)
    {
        $admin = Auth::guard('sanctum')->user();
        if (null == $token) {
            $admin->currentAccessToken()->delete();
            return \Illuminate\Support\Facades\Response::json([
                'masege'=>' Access Token Delete'
            ],200);
        }
        $admin->tokens()->where('token', $token)->delete();


    }


}







