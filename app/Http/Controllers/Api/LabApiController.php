<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lab;

class LabApiController extends Controller
{
    //
    // use ApiResponseTrait;
    public function index()
    {

        $labs = Lab::all();
        return response([
            'labs' => $labs
        ], 200);

    }

    public function show($id)
    {
        $lap = Lab::find($id);
        return response()->json([
            'lap' => $lap
        ], 200);

    }


    public function store(Request $request)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['phone_number'] = $request->phone_number;
        //$lab->is_reception = $request->is_reception;
        $data['address'] = $request->address;
        $data['website'] = $request->website;
        // $file_ext=$request->image->getClientOriginalExtension() ;
        // $file_name=time().'.'.$file_ext;
        // $path='images/labs';
        // $request->image->move($path,$file_name);
        // $data['image']=$file_name;
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $data['image'] = $this->images($image, null);
//        }
        $lab = Lab::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Lab Created Successfully',
            'lab' => $lab,
        ]);


    }


    public function update(Request $request, $id)
    {

        $lab = Lab::find($id);
        $request->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'phone_number' => 'string',
            'address' => 'string',
            'website' => 'string',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {

            $oldimage = $lab->image;
            $image = $request->file('image');
            $data['image'] = $this->images($image, $oldimage);
        }
        $lab->update($data);
        return response()->json([
            'lab' => $data
        ], 200);


    }

    public function destroy($id)
    {

        $lab = Lab::findOrFail($id);
        $lab->delete();
        return response()->json([
            'status' => true,
            'message' => 'Request Information deleted Successfully',
        ]);
    }


}
