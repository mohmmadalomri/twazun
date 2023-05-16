@extends('backend.layouts.master')
@section('css')

@section('title')
{{trans('schedule_trans.Add_Schedule')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0" style="color: #556AFF;">Add_Schedule</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('schedule_trans.Add_Schedule')}}</a></li>
                <li class="breadcrumb-item active">{{trans('schedule_trans.Schedules')}}</li>

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



                <form method="post" enctype="multipart/form-data" action="{{Route('backend.schedules.store')}}" autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('schedule_trans.Doctor_Name')}}<span class="text-danger">*</span></label>

                                <select name="doctor_id" class="custom-select mr-sm-2">
                                    <option selected disabled>{{trans('supervisor_trans.Choose')}}</option>
                                    @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}"  >{{ $doctor->full_name }}</option>
                                    @endforeach
                                </select>

                                @error('doctor_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>




                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('schedule_trans.Admin_id')}}<span class="text-danger">*</span></label>

                                <select name="admin_id" class="custom-select mr-sm-2">
                                    <option selected disabled>{{trans('supervisor_trans.Choose')}}</option>
                                    @foreach($admins as $admin)
                                    <option >{{$admin->id }}</option>
                                    @endforeach
                                </select>

                                @error('admin_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('schedule_trans.Date')}} </label>
                                <input  class="form-control" name="date" id="datepicker-action" data-date-format="yyyy-mm-dd" >
                                @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="start_time"> {{trans('schedule_trans.Start_Time')}} </label>
                                <input class="form-control" type="time"  name="start_time">
                                @error('start_time')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('schedule_trans.End_Time')}} </label>
                                <input class="form-control" type="time"  name="end_time">
                                @error('end_time')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>


                    <div style="padding-left:660px ">

                        <a class="btn btn-outline-primary btn-md  btn-lg" type="submit" href="/backend/schedules/create" >save and create another</a>

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
