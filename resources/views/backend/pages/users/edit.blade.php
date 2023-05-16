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
            <h4 class="mb-0">  {{trans('admin_trans.Edit_User')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('admin_trans.Edit_Admin')}}</a></li>
                <li class="breadcrumb-item active">{{trans('admin_trans.Users')}}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{Route('backend.users.update',$user->id)}}" autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">{{trans('admin_trans.Full_Name')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="name" value="{{old('name',$user->name)}}" class="form-control">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('admin_trans.password')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="password" value="{{old('phone_number',$user->password)}}" type="phone" >
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email"> {{trans('admin_trans.Email')}} </label>
                                <input  class="form-control" name="email" value="{{old('email',$user->email)}}" type="email" >
                                @error('email')
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
