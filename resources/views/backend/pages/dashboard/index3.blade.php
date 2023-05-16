@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('appointment_trans.appointments')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
{{-- <html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html> --}}
<div class="container main-dashboard">
<div class="page-title">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="mb-0">Appointment:Today </h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/backend/appointments" class="default-color">{{trans('appointment_trans.All_appointments')}}</a></li>
                <li class="breadcrumb-item active">{{trans('appointment_trans.appointments')}}</li>
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
                {{-- @foreach ($appointments as $appointment)
@if (date('Y-m-d') == $appointment->date) --}}
                            {{-- <th>{{trans('admin_trans.id')}}</th> --}}
                            <th>date</th>
                            <th style="padding-left:29px ">start_time</th>
                            <th style="padding-left:9px ">end_time</th>
                            <th style="padding-left:29px ">created_at</th>
                            <th style="padding-left:29px ">doctor_id</th>
                            {{-- <th>{{trans('admin_trans.Is_Analyzer')}}</th>
                            <th>{{trans('admin_trans.Is_Supervisor')}}</th> --}}
                            {{-- <th>{{trans('admin_trans.Control')}}</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                        @if (date('Y-m-d') == $appointment->date)
                        <tr>
                            {{-- <td>{{ $admin->id }}</td> --}}
                            <td>{{ $appointment->date }}</td>

                            <td style="padding-left:29px ">{{ $appointment->start_time }}</td>
                            <td>{{ $appointment->end_time }}</td>
                            <td>{{ $appointment->created_at }}</td>
                            <td style="padding-left: 25px">{{ $appointment->doctor_id }}</td>


{{-- <td> --}}
<!-- breadcrumb -->

                            {{-- <th>{{trans('appointment_trans.Control')}}</th> --}}
                        {{-- </tr>
                    </thead>
                    <tbody> --}}
                        {{-- @foreach ($appointments as $appointment) --}}
                        {{-- <tr> --}}
                             {{-- <td>{{ $appointment->id }}</td>  --}}
                            {{-- <td>{{ $appointment->full_name }}</td> --}}

                            {{-- <td>{{ $appointment->email }}</td> --}}
                            {{-- <td>{{ $appointment->phone_number }}</td> --}}
                            {{-- <td>
                               @if(  $appointment->is_reception  == '1')
                                    <span class="badge rounded-pill bg-success text-white">{{ trans('appointment_trans.Reception') }}</span>
                               @else
                                    <span class="badge rounded-pill bg-danger text-white">{{ trans('appointment_trans.Not_Reception') }}</span>
                               @endif
                            </td> --}}
                            {{-- <td>
                                @if(  $appointment->is_analyzer  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('appointment_trans.Analyzer') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('appointment_trans.Not_Analyzer') }}</span>
                                @endif
                             </td> --}}
                             {{-- <td>
                                @if(  $appointment->is_supervisor  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('appointment_trans.Supervisor') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('appointment_trans.Not_Supervisor') }}</span>
                                @endif
                             </td> --}}

                            {{-- <td>

                            </td>

                        </tr>
                        {{-- </tbody> --}}
                    </td>
                </tr>

@endif
@endforeach
</tbody>
                 </table>
                </div>

            </div>
        </div>
    </div>
</div>




  @endsection
@section('js')
{{-- <script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script> --}}
@endsection
