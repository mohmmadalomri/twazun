@extends('backend.layouts.master')
@section('css')

@section('title')
{{trans('admin_trans.Edit_Admin')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{trans('admin_trans.Edit_Admin')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('admin_trans.Edit_Admin')}}</a></li>
                <li class="breadcrumb-item active">{{trans('admin_trans.Admins')}}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{Route('backend.samples.update',$sample->id)}}" autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('admin_trans.lab_id')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="lab_id" value="{{old('full_name',$sample->lab_id)}}" class="form-control">
                                @error('lab_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('admin_trans.medical_center_id')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="medical_center_id" value="{{old('phone_number',$sample->medical_center_id)}}" type="phone" >
                                @error('medical_center_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('admin_trans.sending_doctor_name')}} </label>
                                <input  class="form-control" name="sending_doctor_name" value="{{old('email',$sample->sending_doctor_name)}}" type="email" >
                                @error('sending_doctor_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('admin_trans.patient_name')}} <span class="text-danger">*</span></label>
                                <input  type="text" name="patient_name" value="{{old('password',$sample->patient_name)}}"  class="form-control">
                                @error('patient_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>


                   <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <label> {{trans('admin_trans.patient_file_number')}} </label>
                        <input  class="form-control" name="patient_file_number" value="{{old('email',$sample->patient_file_number)}}" type="email" >
                        @error('patient_file_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>{{trans('admin_trans.patient_nationality')}} <span class="text-danger">*</span></label>
                        <input  type="text" name="patient_nationality" value="{{old('password',$sample->patient_nationality)}}"  class="form-control">
                        @error('patient_nationality')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4">
                <div class="form-group">
                    <label> {{trans('admin_trans.res_doctor_name')}} </label>
                    <input  class="form-control" name="res_doctor_name" value="{{old('email',$sample->res_doctor_name)}}" type="text" >
                    @error('res_doctor_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>{{trans('admin_trans.res_patient_name')}} <span class="text-danger">*</span></label>
                    <input  type="text" name="res_patient_name" value="{{old('password',$sample->res_patient_name)}}"  class="form-control">
                    @error('res_patient_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-4">
            <div class="form-group">
                <label> {{trans('res_patient_file_number')}} </label>
                <input  class="form-control" name="res_patient_file_number" value="{{old('email',$sample->res_patient_file_number)}}" type="text" >
                @error('res_patient_file_number')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label>{{trans('res_patient_nationality')}} <span class="text-danger">*</span></label>
                <input  type="text" name="res_patient_nationality" value="{{old('password',$sample->res_patient_nationality)}}"  class="form-control">
                @error('res_patient_nationality')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>








                   <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg" >{{trans('admin_trans.Edit')}}</button>


                </form>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
