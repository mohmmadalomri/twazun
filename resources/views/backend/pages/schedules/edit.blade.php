@extends('backend.layouts.master')
@section('css')

@section('title')
{{trans('schedule_trans.Edit_Schedule')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{trans('schedule_trans.Edit_Schedule')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('schedule_trans.Edit_Schedule')}}</a></li>
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



                <form method="post" enctype="multipart/form-data" action="{{Route('backend.schedules.update',$schedule->id)}}" autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('schedule_trans.Doctor_Name')}}<span class="text-danger">*</span></label>

                                <select name="doctor_id" class="custom-select mr-sm-2">
                                    @foreach($doctors as $doctor)
                                    <option value="{{$doctor->id}}" @if($doctor->id == old('doctor_id',$schedule->doctor_id)) selected @endif >{{ $doctor->full_name }}</option>
                                    @endforeach
                                </select>

                                @error('doctor_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('schedule_trans.Date')}} </label>
                                <input  class="form-control" name="date" value="{{old('date',$schedule->date)}}" id="datepicker-action" data-date-format="yyyy-mm-dd" >
                                @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('schedule_trans.Start_Time')}} </label>
                                <input class="form-control" type="time" value="{{old('start_time',$schedule->start_time)}}"  name="start_time">
                                @error('start_time')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('schedule_trans.End_Time')}} </label>
                                <input class="form-control" type="time" value="{{old('end_time',$schedule->end_time)}}"  name="end_time">
                                @error('end_time')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>




                   <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg" >{{trans('schedule_trans.Add')}}</button>


                </form>


            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
