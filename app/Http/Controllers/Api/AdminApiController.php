<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use Illuminate\Support\Facades\Hash;
class AdminApiController extends Controller
{
    // use ApiResponseTrait;
    //
    public function index(){

        // $admins = Admin::all();
        // return view('backend.pages.admins.index',compact('admins'));
        //  return $admins;
         $admins = Admin::get()->all();
         return  response([
            'admins'=>$admins
        ],200);
    }


    public function show(){

    }

    public function create(){

        return view('backend.pages.admins.create');

    }

    public function store(Request $request){


        $data['full_name']  = $request->full_name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['phone_number'] = $request->phone_number;
        $data['is_reception']  = $request->is_reception;
        $data['is_analyzer']  = $request->is_analyzer;
        $data['is_supervisor']  = $request->is_supervisor;


        $admin= Admin::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Admin Created Successfully',
            'admin' => $admin,
        ]);

    }

    public function edit($id){

        $admin = Admin::findOrFail($id);
        return view('backend.pages.admins.edit',compact('admin'));
    }

    public function update(Request $request , $id){

        $admin =  Admin::find($id);
        $data['full_name']  = $request->full_name;
        $data['email']     = $request->email;
        $data['password']   =  $request->password ? Hash::make($request->password) : $admin->password;
        $data['phone_number'] = $request->phone_number;
        $data['is_reception'] = $request->is_reception;
        $data['is_analyzer ']= $request->is_analyzer;
        $data['is_supervisor'] = $request->is_supervisor;

        $admin->update($data);
        return response()->json([
            'status'=>true,
            'data'=>$admin,
            'message' => 'Admin Updated Successfully',
        ]);
}

 public function destroy($id)
{
    $admin = Admin::findOrFail($id);
        $admin->delete();
    return response()->json([
        'status'=>true,
        'message' => 'Request Information deleted Successfully',
    ]);
    }

    public function restore(){

    }

    public function forceDelete(){

    }

}
