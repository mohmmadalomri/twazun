@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('appointment_trans.Appointments')}}
@stop
@endsection
@section('page-header')

<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            {{-- <h4 class="mb-0">appointment-Name: {{ $appointment->full_name }}</h4> --}}
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/backend/appointments" class="default-color">{{trans('appointment_trans.All_Appointments')}}</a></li>
                {{-- <li class="breadcrumb-item active">{{trans('appointment_trans.Appointments')}}</li>   تعديل الاسم بمجلد اللغات --}}
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

                <table id="table_id" class="display" class="table">
                    {{-- <thead> --}}
                        <tr>
                         <th style="width: 50px">{{trans('appointment_trans.Id')}}</th>
                         <td>{{ $appointment->id }}</td>
                        </tr>
                            <th>{{trans('appointment_trans.start_time')}}</th>
                            <td>{{ $appointment->start_time }}</td>
                        </tr>
                            <th>{{trans('appointment_trans.End_time')}}</th>
                            <td>{{ $appointment->end_time }}</td>
                        </tr>
                        <th>{{trans('appointment_trans.Date')}}</th>
                        <td>{{ $appointment->date }}</td>
                    </tr>
                            <th>{{trans('appointment_trans.Doctor_id')}}</th>
                            <td>{{ $appointment->doctor_id }}</td>
                        </tr>
                            <th>{{trans('appointment_trans.Admins_id')}}</th>
                            <td>
                                <td>{{ $appointment->admins_id }}</td>
                             </td>
                        </tr>


                    </table>
                </div>





  @endsection
@section('js')
{{-- <script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script> --}}
@endsection
