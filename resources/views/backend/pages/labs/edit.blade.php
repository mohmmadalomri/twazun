@extends('backend.layouts.master')
@section('css')

@section('title')
{{trans('lab_trans.Edit_Lab')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{trans('lab_trans.Edit_Lab')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('lab_trans.Edit_Lab')}}</a></li>
                <li class="breadcrumb-item active">{{trans('lab_trans.Labs')}}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{Route('backend.labs.update',$lab->id)}}" autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('lab_trans.Name')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="name" value="{{old('name',$lab->name)}}" class="form-control">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('lab_trans.Phone_Number')}}  <span class="text-danger">*</span></label>
                                <input  class="form-control" name="phone_number" value="{{old('phone_number',$lab->phone_number)}}" type="phone" >
                                @error('phone_number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('lab_trans.Website')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="website" value="{{old('website',$lab->website)}}"  class="form-control">
                                @error('website')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('lab_trans.Email')}} </label>
                                <input  class="form-control" name="email" value="{{old('email',$lab->email)}}"  type="email" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('lab_trans.Password')}} <span class="text-danger">*</span></label>
                                <input  type="password" name="password" value="{{old('password',$lab->password)}}" class="form-control">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="address">{{trans('lab_trans.address')}} <span class="text-danger">*</span></label>
                                <input  type="address" name="address" value="{{old('aaa',$lab->address)}}" class="form-control">
                                @error('adress')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label> {{trans('lab_trans.Image')}}<span class="text-danger">*</span></label>
                                <input  class="form-control" name="image" type="file" accept="image/*">
                                @error('image')
                                <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="col-md-6">
                            <img  src="{{ URL::asset('storage/'.$value)}}"   width="200" height="200">
                        </div> --}}
                    </div>





                   <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg" >{{trans('lab_trans.Add')}}</button>


                </form>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
