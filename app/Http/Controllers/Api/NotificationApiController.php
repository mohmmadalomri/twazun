<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationApiController extends Controller
{
    //
    // use ApiResponseTrait;
    public function index(){
        $notifications = Notification::all();
        return  response([
            'notifications'=>$notifications
        ],200);

    }
    public function show(){

    }
    public function destroy($id){
    $not = Notification::all();
        $not = Notification::findOrFail($id);
        return response()->json([
            'status'=>true,
            'message' => 'Request Information deleted Successfully',
        ]);
    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function trash(){

    }

    public function restore(){

    }

    public function forceDelete(){

    }
}
