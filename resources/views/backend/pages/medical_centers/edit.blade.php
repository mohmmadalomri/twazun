@extends('backend.layouts.master')
@section('css')

@section('title')
{{trans('medical_center_trans.Edit_Medical_Center')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{trans('medical_center_trans.Edit_Medical_Center')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('medical_center_trans.Edit_Medical_Center')}}</a></li>
                <li class="breadcrumb-item active">{{trans('medical_center_trans.Medical_Centers')}}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{Route('backend.medical_centers.update',$medical_center->id)}}"  autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('medical_center_trans.Name')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="name" value="{{old('name',$medical_center->name)}}" class="form-control">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('medical_center_trans.Phone_Number')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="phone_number" value="{{old('phone_number',$medical_center->phone_number)}}" type="phone" >
                                @error('phone_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('medical_center_trans.Website')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="website" value="{{old('website',$medical_center->website)}}"  class="form-control">
                                @error('website')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('medical_center_trans.Email')}} </label>
                                <input  class="form-control" name="email" value="{{old('email',$medical_center->email)}}"  type="email" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('medical_center_trans.Password')}} <span class="text-danger">*</span></label>
                                <input  type="password" name="password" value="{{old('password',$medical_center->password)}}" class="form-control">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">{{trans('medical_center_trans.Password')}} <span class="text-danger">*</span></label>
                            <input  type="text" name="address" value="{{old('address',$medical_center->address)}}" class="form-control">
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    </div>





                   <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg" >{{trans('medical_center_trans.Add')}}</button>


                </form>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
