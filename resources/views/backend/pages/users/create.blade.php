@extends('backend.layouts.master')
@section('css')

@section('title')
{{trans('admin_trans.Add_User')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0" style="color: #556AFF;">Add_User</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('admin_trans.Add_Admin')}}</a></li>
                <li class="breadcrumb-item active">{{trans('admin_trans.User')}}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{Route('backend.users.store')}}" autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('Name')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="name"  class="form-control">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('admin_trans.Email')}} <span class="text-danger">*</span></label>
                                <input  class="form-control" name="email" type="email" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('admin_trans.Password')}} <span class="text-danger">*</span></label>
                                <input  type="password" name="password"  class="form-control">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>






                    <div style="padding-left:660px ">

                        <a class="btn btn-outline-primary btn-md  btn-lg" type="submit" href="/backend/users/create" >save and create another</a>

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

@endsection
