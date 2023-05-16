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
{{trans('doctor_trans.Add_Doctor')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{trans('doctor_trans.Add_Doctor')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('doctor_trans.Add_Doctor')}}</a></li>
                <li class="breadcrumb-item active">{{trans('doctor_trans.Doctors')}}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{Route('backend.doctors.update',$doctor->id)}}" autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('doctor_trans.Full_Name')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="full_name" value="{{old('full_name',$doctor->full_name)}}" class="form-control">
                                @error('full_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('doctor_trans.N_Number')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="n_number" value="{{old('n_number',$doctor->n_number)}}" type="number" >
                                @error('n_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Job_ID"> {{trans('doctor_trans.Job_ID')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="Job_ID" value="{{old('Job_ID',$doctor->Job_ID)}}" type="number" >
                                @error('Job_ID')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-outline mb-4">
                                <label class="form-label" >{{trans('doctor_trans.Job_Description')}}</label>
                                <select class="custom-select mr-sm-2" name="job_description">
                                    <option selected disabled>{{trans('doctor_trans.Choose')}}</option>

                                    <option  value="HCP Doctor"
                                        @if(old('job_description', $doctor->job_description) == 'HCP Doctor') selected @endif>
                                        {{trans('doctor_trans.HCP_Doctor')}}
                                    </option>

                                    <option  value="HCP Nurse"
                                        @if(old('job_description', $doctor->job_description) == 'HCP Nurse') selected @endif>
                                        {{trans('doctor_trans.HCP_Nurse')}}
                                    </option>
                                    <option  value=" HCP Physiotherapy"
                                        @if(old('job_description', $doctor->job_description) == 'HCP Physiotherapy') selected @endif>
                                        {{trans('doctor_trans.HCP_Physiotherapy')}}
                                    </option>
                                </select>
                                @error('job_description')
                                <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('doctor_trans.Date_Of_Birth')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="date_of_birth" value="{{old('date_of_birth',$doctor->date_of_birth)}}" id="datepicker-action" data-date-format="yyyy-mm-dd" >
                                @error('date_of_birth')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('doctor_trans.Phone_Number')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="phone_number" value="{{old('phone_number',$doctor->phone_number)}}" type="phone" >
                                @error('phone_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('doctor_trans.Email')}} </label>
                                <input  class="form-control" name="email" value="{{old('email',$doctor->email)}}" type="email" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('doctor_trans.Password')}} <span class="text-danger">*</span></label>
                                <input  type="password" name="password" value="{{old('password',$doctor->password)}}" class="form-control">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gender"> {{trans('doctor_trans.Gender')}} <span class="text-danger">*</span></label>
                                <select class="custom-select mr-sm-2" name="gender">
                                    <option selected disabled>{{trans('doctor_trans.Choose')}}</option>
                                    <option  value="male">{{trans('doctor_trans.Male')}}</option>
                                    <option  value="female">{{trans('doctor_trans.Female')}}</option>
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
                                <label> {{trans('doctor_trans.Years_Of_Experience')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="years_of_experience" value="{{old('years_of_experience',$doctor->years_of_experience)}}" type="number" >
                                @error('years_of_experience')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('doctor_trans.Doctor_Rate')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="Doctor_rate"  type="number" >
                                {{-- <input  class="form-control" name="Doctor_rate" value="{{old('Doctor_rate',$doctor->Doctor_rate)}}" type="number" > --}}
                                @error('Doctor_rate')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('doctor_trans.Nationality')}} <span class="text-danger">*</span></label>
                                <input  type="text" name="nationality" value="{{old('nationality',$doctor->nationality)}}"  class="form-control">
                                @error('nationality')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    </div>



                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{trans('doctor_trans.Address')}} <span class="text-danger">*</span></label>
                                <input  type="text" name="address" value="{{old('address',$doctor->address)}}"  class="form-control">
                                @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="textAreaExample6">{{trans('doctor_trans.About')}}</label>
                                <textarea name="about" class="form-control" id="textAreaExample6" rows="3">
                                    {{old('about',$doctor->about)}}
                                </textarea>
                                @error('about')
                                <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="photo"> {{trans('lab_trans.Image')}}<span class="text-danger">*</span></label>
                                <input  class="form-control" name="photo" type="file" accept="image/*">
                                @error('image')
                                <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    {{-- <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('lab_trans.Image')}}<span class="text-danger">*</span></label>
                                {{-- <input  class="form-control" name="image" type="file" accept="image/*"> --}}
                                {{-- <div class="avatar-img">
                                    <label  for="photo"></label>
                                    <img class="avatar" src="{{URL::asset('assets/images/user.png')}}" alt="">
                                    <input lass="form-control"  type="file" name="photo">
                                </div>

                                @error('image') --}}
                                {{-- <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded-lg text-center p-3">
                                {{-- <img id="frame" src="#" alt="your image" /> --}}
                                {{-- <img src="//placehold.it/140?text=IMAGE" class="img-fluid" id="frame" /> --}}
                            {{-- </div>
                        </div>
                    </div>  --}}



                    {{-- <input type="image" src="{{URL::asset('assets/images/user.png')}}" > --}}




                   <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg" >{{trans('doctor_trans.Add')}}</button>


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
