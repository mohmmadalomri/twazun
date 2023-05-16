<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lab;
class LabController extends Controller
{
    //

    public function index(){

         $labs = Lab::all();
//   return $labs;
         return view('backend.pages.labs.index',compact('labs'));
    }

    public function show($id){

        $lab = Lab::find($id);
        return view('backend.pages.labs.show',compact('lab'));
    }
    public function create(){

        return view('backend.pages.labs.create');

    }

    public function store(Request $request){

        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['password']= $request->password;
        $data['phone_number']= $request->phone_number;
        //$lab->is_reception = $request->is_reception;
        $data['address'] = $request->address;
        $data['website'] = $request->website;
        if ($request->hasFile('image')) {
        $file_ext=$request->image->getClientOriginalExtension() ;
        $file_name=time().'.'.$file_ext;
        $path='images/labs';
        $request->image->move($path,$file_name);
        $data['image']=$file_name;
        }
        $lab= Lab::create($data);
        // $labs = Lab::all();
        return redirect()->route('backend.labs.index');



    }



    public function edit($id){

        $lab = Lab::findOrFail($id);
        return view('backend.pages.labs.edit',compact('lab'));
    }

    public function update(Request $request,$id){
        $lab =  Lab::findOrFail($id);
        $lab->name = $request->name;
        $lab->email = $request->email;
        $lab->password = $request->password;
        $lab->phone_number = $request->phone_number;
        //$lab->is_reception = $request->is_reception;
        $lab->address = $request->address;
        $lab->website = $request->website;

        // $lab->image = $request->image;
        $lab->save();

        return redirect()->route('backend.labs.index');

    }

    public function destroy($id){
        $lab = Lab::all();
        $lab = Lab::findOrFail($id);
        $lab->delete();
        return redirect()->route('backend.labs.index');


    }

    public function restore(){

    }

    public function forceDelete(){

    }
}
