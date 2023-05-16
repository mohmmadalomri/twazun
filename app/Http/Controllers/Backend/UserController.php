<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Api\ApiResponseTrait;
use App\Models\User;

class UserController extends Controller
{
    // use ApiResponseTrait;
    public function index(){

        $users = User::all();
        //return $this->apiResponse($admins,'ok',200);
        return view('backend.pages.users.index',compact('users'));
   }

        //  return $admins;


        public function show($id)
        {
            $user = User::find($id);
            return view('backend.pages.users.show',compact('user'));
        }

    public function create(){

        return view('backend.pages.users.create');

    }

    public function store(Request $request){

        $data = $request->all();

        $user = User::create($data);
        return view('backend.pages.users.index');

    }

    public function edit($id){

        $user = User::findOrFail($id);
        return view('backend.pages.users.edit',compact('user'));
    }

    public function update(Request $request ,  $id){

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  $request->password ;
        $user->save();
        return redirect()->route('backend.users.index');
    }




    public function destroy( $id){
        // $admin->delete();
        // return redirect()->route('backend.admins.index');

       // $admin = Admin::all();
        $user = User::findOrFail($id);
        $user->delete();
        return view('backend.pages.users.index');


    }



    public function restore(){

    }

    public function forceDelete(){

    }

}
