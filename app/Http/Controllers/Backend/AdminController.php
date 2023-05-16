<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Api\ApiResponseTrait;
class AdminController extends Controller
{
    // use ApiResponseTrait;
    public function index(){

        $admins = Admin::all();
        //return $this->apiResponse($admins,'ok',200);
        return view('backend.pages.admins.index',compact('admins'));
   }

        //  return $admins;


        public function show($id)
        {
            $admin = Admin::find($id);
            return view('backend.pages.admins.show',compact('admin'));
        }

    public function create(){

        return view('backend.pages.admins.create');

    }

    public function store(StoreAdminRequest $request){

        $admin = new Admin;
        $admin->full_name = $request->full_name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->phone_number = $request->phone_number;
        $admin->is_reception = $request->is_reception;
        $admin->is_analyzer = $request->is_analyzer;
        $admin->is_supervisor = $request->is_supervisor;
        $admin->save();

        return redirect()->route('backend.admins.index')->with('success', 'Patient added successfully');

    }

    public function edit($id){

        $admin = Admin::findOrFail($id);
        return view('backend.pages.admins.edit',compact('admin'));
    }

    public function update(StoreAdminRequest $request , $id){

        $admin =  Admin::findOrFail($id);
        $admin->full_name = $request->full_name;
        $admin->email = $request->email;
        $admin->password =  $request->password ? Hash::make($request->password) : $admin->password;
        $admin->phone_number = $request->phone_number;
        $admin->is_reception = $request->is_reception;
        $admin->is_analyzer = $request->is_analyzer;
        $admin->is_supervisor = $request->is_supervisor;
        $admin->save();

        return redirect()->route('backend.admins.index');


    }

    public function destroy( $id){
        // $admin->delete();
        // return redirect()->route('backend.admins.index');

       // $admin = Admin::all();
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('backend.admins.index');


    }



    public function restore(){

    }

    public function forceDelete(){

    }

}
