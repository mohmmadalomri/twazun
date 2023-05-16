@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('appointment_trans.Appointments')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('appointment_trans.Appointments')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('appointment_trans.All_Appointments')}}</a></li>
                <li class="breadcrumb-item active">{{trans('appointment_trans.Appointments')}}</li>
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

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            {{-- <th>{{trans('appointment_trans.Id')}}</th> --}}
                            <th>{{trans('appointment_trans.Doctor_Name')}}</th>
                            <th>{{trans('appointment_trans.Patient_Name')}}</th>
                            <th>{{trans('appointment_trans.Date')}}</th>
                            {{-- <th>{{trans('appointment_trans.Start_Time')}}</th> --}}
                            {{-- <th>{{trans('appointment_trans.End_Time')}}</th> --}}
                            <th>{{trans('appointment_trans.Control')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                        <tr>
                            {{-- <td>{{ $appointment->id }}</td> --}}
                            <td>{{ $appointment->doctors->full_name }}</td>
                            <td>{{ $appointment->patients->full_name }}</td>
                            {{-- <td>{{ $Appointment->supervisor->full_name }}</td> --}}
                            <td>{{ $appointment->date }}</td>
                            {{-- <td>{{ $appointment->start_time }}</td> --}}
                            {{-- <td>{{ $appointment->end_time }}</td> --}}

                            <td>
                                <a href="{{Route('backend.appointments.show',$appointment->id)}}"  class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{Route('backend.appointments.edit',$appointment->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{Route('backend.appointments.destroy',$appointment->id)}}" method="post" style="display:inline">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>


                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
@endsection
