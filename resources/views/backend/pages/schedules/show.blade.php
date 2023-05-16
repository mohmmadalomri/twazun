@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('schedule_trans.schedules')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
{{-- <html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</html> --}}
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            {{-- <h4 class="mb-0">schedule-Name: {{ $schedule->full_name }}</h4> --}}
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/backend/schedules" class="default-color">{{trans('schedule_trans.All_schedules')}}</a></li>
                <li class="breadcrumb-item active">{{trans('schedule_trans.schedules')}}</li>
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
                         <th style="width: 50px">{{trans('schedule_trans.Id')}}</th>
                         <td>{{ $schedule->id }}</td>
                        </tr>
                            <th>{{trans('schedule_trans.start_time')}}</th>
                            <td>{{ $schedule->start_time }}</td>
                        </tr>
                            <th>{{trans('schedule_trans.end_time')}}</th>
                            <td>{{ $schedule->end_time }}</td>
                        </tr>

                            <th>{{trans('schedule_trans.date')}}</th>
                            <td>{{ $schedule->date }}</td>
                        </tr>
                            {{-- <th>{{trans('schedule_trans.Is_Reception')}}</th>
                            <td>
                                @if(  $schedule->is_reception  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('schedule_trans.Reception') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('schedule_trans.Not_Reception') }}</span>
                                @endif
                             </td>
                        </tr>
                            <th>{{trans('schedule_trans.Is_Analyzer')}}</th>
                            <td>
                                @if(  $schedule->is_analyzer  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('schedule_trans.Analyzer') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('schedule_trans.Not_Analyzer') }}</span>
                                @endif
                             </td>

                        </tr>
                            <th>{{trans('schedule_trans.Is_Supervisor')}}</th>
                            <td>
                                @if(  $schedule->is_analyzer  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('schedule_trans.Analyzer') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('schedule_trans.Not_Analyzer') }}</span>
                                @endif
                             </td>
                        </tr> --}}
                            {{-- <th>{{trans('schedule_trans.Control')}}</th> --}}
                        {{-- </tr>
                    </thead>
                    <tbody> --}}
                        {{-- @foreach ($schedules as $schedule) --}}
                        {{-- <tr> --}}
                             {{-- <td>{{ $schedule->id }}</td>  --}}
                            {{-- <td>{{ $schedule->full_name }}</td> --}}

                            {{-- <td>{{ $schedule->email }}</td> --}}
                            {{-- <td>{{ $schedule->phone_number }}</td> --}}
                            {{-- <td>
                               @if(  $schedule->is_reception  == '1')
                                    <span class="badge rounded-pill bg-success text-white">{{ trans('schedule_trans.Reception') }}</span>
                               @else
                                    <span class="badge rounded-pill bg-danger text-white">{{ trans('schedule_trans.Not_Reception') }}</span>
                               @endif
                            </td> --}}
                            {{-- <td>
                                @if(  $schedule->is_analyzer  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('schedule_trans.Analyzer') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('schedule_trans.Not_Analyzer') }}</span>
                                @endif
                             </td> --}}
                             {{-- <td>
                                @if(  $schedule->is_supervisor  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('schedule_trans.Supervisor') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('schedule_trans.Not_Supervisor') }}</span>
                                @endif
                             </td> --}}

                            {{-- <td>
                            </tr> --}}
                        {{-- </tbody> --}}
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
