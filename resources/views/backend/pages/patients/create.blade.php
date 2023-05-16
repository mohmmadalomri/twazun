@extends('backend.layouts.master')
@section('css')
<style>


#upload-photo {
   opacity: 0;
   position: absolute;
   z-index: -1;
}
.avatar-img{
    position: relative;
}
.avatar-label {
   cursor: pointer;
   position:absolute;
   top: 20px;
   right: 10px;
   font-size: 20px;
   border-radius:60%;
   border:solid black 1px;
   padding:5px;
   color: white;
    background-color: #673ab7;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    line-height: 10px;
    /* font-size: 10px; */
    text-align: center;
    cursor: pointer;
    /* z-index: 999; */
   /* Style as you please, it will become the visible UI component. */
}
.avatar {
  vertical-align: middle;
  width: 120px;
  height: 120px;
  border-radius: 50%;
}
.add-sign{

}
</style>
@section('title')
{{trans('patient_trans.Add_Patient')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0" style="color: #556AFF;">Add_Patient</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('patient_trans.Add_Patient')}}</a></li>
                <li class="breadcrumb-item active">{{trans('patient_trans.Patients')}}</li>

            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">



                <form method="post" enctype="multipart/form-data" action="{{Route('backend.patients.store')}}"autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="full_name">Full_Name<span class="text-danger">*</span></label>
                                <input  type="text" name="full_name"  class="form-control">
                                @error('full_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="n_number">N_Number <span class="text-danger"></span></label>
                                <input  class="form-control" name="n_number" type="number" >
                                @error('n_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="file_no">File_Number <span class="text-danger"></span></label>
                                <input  class="form-control" name="file_no" type="number" >
                                @error('file_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="date_of_birth">Date_Of_Birth  <span class="text-danger"></span></label>
                                <input  class="form-control" name="date_of_birth" id="datepicker-action" data-date-format="yyyy-mm-dd" >
                                @error('date_of_birth')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone_number">Phone_Number <span class="text-danger">*</span></label>
                                <input  class="form-control" name="phone_number" type="phone" >
                                @error('phone_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> Height  <span class="text-danger"></span></label>
                                <input  class="form-control" name="height" type="number" >
                                @error('height')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="weight">Weight <span class="text-danger"></span></label>
                                <input  class="form-control" name="weight" type="number" >
                                @error('weight')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="blood_type">Blood_Group <span class="text-danger"></span></label>

                                <select class="custom-select mr-sm-2" name="blood_type">
                                    <option selected disabled>{{trans('patient_trans.Choose')}}</option>
                                    <option  value="A+">A+</option>
                                    <option  value="A-">A-</option>
                                    <option  value="B+">B+</option>
                                    <option  value="B-">B-</option>
                                    <option  value="O+">O+</option>
                                    <option  value="O-">O-</option>
                                    <option  value="AB+">AB+</option>
                                    <option  value="AB-">AB-</option>
                                </select>
                                @error('blood_group')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input  class="form-control" name="email" type="email" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="password">Password <span class="text-danger">*</span></label>
                                <input  type="password" name="password"  class="form-control">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender">Gender<span class="text-danger"></span></label>
                                <select class="custom-select mr-sm-2" name="gender">
                                    <option selected disabled>{{trans('patient_trans.Choose')}}</option>
                                    <option  value="male">{{trans('patient_trans.Male')}}</option>
                                    <option  value="female">{{trans('patient_trans.Female')}}</option>
                                </select>
                                @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                    </div>

                    <div class="row">





                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="patient_rate"> Patient_Rate <span class="text-danger"></span></label>
                                <input  class="form-control" name="patient_rate" type="number" >
                                @error('patient_rate')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('patient_trans.Nationality')}} <span class="text-danger">*</span></label>
                                <input  type="text" name="nationality"  class="form-control">
                                @error('nationality')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}


                    </div>



                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Address<span class="text-danger"></span></label>
                                <input  type="text" name="address"  class="form-control">
                                @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Disease_Name <span class="text-danger"></span></label>
                                <input  type="text" name="disease_name"  class="form-control">
                                @error('disease_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="textAreaExample6">Description_Disease</label>
                                <textarea name="description_disease" class="form-control" id="textAreaExample6" rows="3"></textarea>
                                @error('description_disease')
                                <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Image<span class="text-danger"></span></label>
                                {{-- <input  class="form-control" name="image" type="file" accept="image/*"> --}}
                                <div class="avatar-img">
                                    <label class="avatar-label circle" for="photo" >+</label>
                                    <img class="avatar" src="{{URL::asset('assets/images/user.png')}}" alt="">
                                    <input  type="file" name="photo" a/>
                                </div>

                                @error('image')
                                <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded-lg text-center p-3">
                                {{-- <img id="frame" src="#" alt="your image" /> --}}
                                <img src="//placehold.it/140?text=IMAGE" class="img-fluid" id="frame" />
                            </div>
                        </div>
                    </div>



                    {{-- <input type="image" src="{{URL::asset('assets/images/user.png')}}" > --}}



                    <div style="padding-left:660px ">

                        <a class="btn btn-outline-primary btn-md  btn-lg" type="submit" href="/backend/patients/create" >save and create another</a>

                       <button type="submit" style="margin: 10px;" class="btn btn-primary btn-md  btn-lg" >save now</button>
                     </div>

                </form>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
<script>


function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
}




</script>
@endsection
