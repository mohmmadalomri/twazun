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
{{trans('patient_trans.Edit_Patient')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{trans('patient_trans.Edit_Patient')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('patient_trans.Edit_Patient')}}</a></li>
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



                <form method="post" enctype="multipart/form-data" action= "{{Route('backend.patients.update',$patient->id)}}"autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('patient_trans.Full_Name')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="full_name" value="{{old('full_name',$patient->full_name)}}" class="form-control">
                                @error('full_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="n_number"> {{trans('patient_trans.N_Number')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="n_number" value="{{old('n_number',$patient->n_number)}}" type="number" >
                                @error('n_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('patient_trans.File_Number')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="file_no" value="{{old('file_no',$patient->file_no)}}" type="number" >
                                @error('file_no')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('patient_trans.Date_Of_Birth')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="date_of_birth" value="{{old('date_of_birth',$patient->date_of_birth)}}" id="datepicker-action" data-date-format="yyyy-mm-dd" >
                                @error('date_of_birth')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('patient_trans.Phone_Number')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="phone_number" value="{{old('phone_number',$patient->phone_number)}}" type="phone" >
                                @error('phone_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('patient_trans.Height')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="height" value="{{old('height',$patient->height)}}" type="number" >
                                @error('height')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('patient_trans.Weight')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="weight"  value="{{old('weight',$patient->weight)}}" type="number" >
                                @error('weight')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="blood_type"> {{trans('patient_trans.Blood_Type')}} <span class="text-danger">*</span></label>

                                <select class="custom-select mr-sm-2" name="blood_type">
                                    <option selected disabled>{{trans('patient_trans.Choose')}}</option>
                                    <option  value="A+"  @if(old('blood_type', $patient->blood_type) == 'A+') selected @endif>A+</option>
                                    <option  value="A-"  @if(old('blood_type', $patient->blood_type) == 'A-') selected @endif>A-</option>
                                    <option  value="B+"  @if(old('blood_type', $patient->blood_type) == 'B+') selected @endif>B+</option>
                                    <option  value="B-"  @if(old('blood_type', $patient->blood_type) == 'B-') selected @endif>B-</option>
                                    <option  value="O+"  @if(old('blood_type', $patient->blood_type) == 'O+') selected @endif>O+</option>
                                    <option  value="O-"  @if(old('blood_type', $patient->blood_type) == 'O-') selected @endif>O-</option>
                                    <option  value="AB+" @if(old('blood_type', $patient->blood_type) == 'AB+') selected @endif>AB+</option>
                                    <option  value="AB-" @if(old('blood_type', $patient->blood_type) == 'AB-') selected @endif>AB-</option>
                                </select>
                                @error('blood_type')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('patient_trans.Email')}} </label>
                                <input  class="form-control" name="email" value="{{old('email',$patient->email)}}" type="email" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('patient_trans.Password')}} <span class="text-danger">*</span></label>
                                <input  type="password" name="password" value="{{old('password',$patient->password)}}" class="form-control">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender"> {{trans('patient_trans.Gender')}} <span class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="gender">
                                    <option selected disabled>{{trans('patient_trans.Choose')}}</option>
                                    <option  value="male" @if(old('gender', $patient->gender) == 'male') selected @endif>{{trans('patient_trans.Male')}}</option>
                                    <option  value="female" @if(old('gender', $patient->gender) == 'female') selected @endif>{{trans('patient_trans.Female')}}</option>
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
                                <label> {{trans('patient_trans.Patient_Rate')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="patient_rate" value="{{old('patient_rate',$patient->patient_rate)}}" type="number" >
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
                                <label>{{trans('patient_trans.Address')}} <span class="text-danger">*</span></label>
                                <input  type="text" name="address" value="{{old('address',$patient->address)}}"  class="form-control">
                                @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{trans('patient_trans.Disease_Name')}} <span class="text-danger">*</span></label>
                                <input  type="text" name="disease_name" value="{{old('disease_name',$patient->disease_name)}}"  class="form-control">
                                @error('disease_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="textAreaExample6">{{trans('patient_trans.Description_Disease')}}</label>
                                <textarea name="description_disease" class="form-control" id="textAreaExample6" rows="3">
                                    {{old('description_disease',$patient->description_disease)}}
                                </textarea>
                                @error('description_disease')
                                <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('lab_trans.Image')}}<span class="text-danger">*</span></label>
                                {{-- <input  class="form-control" name="image" type="file" accept="image/*"> --}}
                                <div class="avatar-img">
                                    <label class="avatar-label circle" for="photo" >+</label>
                                    <img class="avatar" src="{{URL::asset('assets/images/user.png')}}" alt="">
                                    <input onchange="preview()" type="file" name="photo" accept="image/*" id="upload-photo" />
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




                   <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg" >{{trans('patient_trans.Add')}}</button>


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
