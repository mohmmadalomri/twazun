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



                <form method="post" enctype="multipart/form-data" action="{{Route('backend.admins.update',$admin->id)}}" autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('admin_trans.Full_Name')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="full_name" value="{{old('full_name',$admin->full_name)}}" class="form-control">
                                @error('full_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('admin_trans.Phone_Number')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="phone_number" value="{{old('phone_number',$admin->phone_number)}}" type="phone" >
                                @error('phone_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('admin_trans.Email')}} </label>
                                <input  class="form-control" name="email" value="{{old('email',$admin->email)}}" type="email" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('admin_trans.Password')}} <span class="text-danger">*</span></label>
                                <input  type="password" name="password" value="{{old('password',$admin->password)}}"  class="form-control">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>


                   <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="is_reception"> {{trans('admin_trans.Is_Reception')}} <span class="text-danger">*</span></label>

                                        <select class="custom-select mr-sm-2" name="is_reception">
                                            <option selected disabled>{{trans('admin_trans.Choose')}}</option>
                                            <option  value="0"  @if(old('is_reception', $admin->is_reception) == '0') selected @endif>{{trans('admin_trans.Not_Reception')}}</option>
                                            <option  value="1"  @if(old('is_reception', $admin->is_reception) == '1') selected @endif>{{trans('admin_trans.Reception')}}</option>
                                        </select>
                                        @error('is_reception')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="is_analyzer"> {{trans('admin_trans.Is_Analyzer')}} <span class="text-danger">*</span></label>

                                        <select class="custom-select mr-sm-2" name="is_analyzer">
                                            <option selected disabled>{{trans('admin_trans.Choose')}}</option>
                                            <option  value="0" @if(old('is_analyzer', $admin->is_analyzer) == '0') selected @endif>{{trans('admin_trans.Not_Analyzer')}}</option>
                                            <option  value="1" @if(old('is_analyzer', $admin->is_analyzer) == '1') selected @endif>{{trans('admin_trans.Analyzer')}}</option>
                                        </select>
                                        @error('is_analyzer')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="is_supervisor"> {{trans('admin_trans.Is_Supervisor')}} <span class="text-danger">*</span></label>

                                        <select class="custom-select mr-sm-2" name="is_supervisor">
                                            <option selected disabled>{{trans('admin_trans.Choose')}}</option>
                                            <option  value="0" @if(old('is_supervisor', $admin->is_supervisor) == '0') selected @endif >{{trans('admin_trans.Not_Supervisor')}}</option>
                                            <option  value="1" @if(old('is_supervisor', $admin->is_supervisor) == '1') selected @endif>{{trans('admin_trans.Supervisor')}}</option>
                                        </select>
                                        @error('is_supervisor')
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
