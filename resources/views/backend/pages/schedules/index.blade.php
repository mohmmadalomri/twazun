@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('schedule_trans.Schedules')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('schedule_trans.Schedules')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('schedule_trans.All_Schedules')}}</a></li>
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

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>{{trans('schedule_trans.Id')}}</th>
                            <th>{{trans('schedule_trans.Doctor_Name')}}</th>
                            {{-- <th>{{trans('schedule_trans.Supervisor_Name')}}</th> --}}
                            <th>{{trans('schedule_trans.Date')}}</th>
                            <th>{{trans('schedule_trans.Start_Time')}}</th>
                            <th>{{trans('schedule_trans.End_Time')}}</th>
                            <th>{{trans('schedule_trans.Control')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schedules as $schedule)
                        <tr>
                            <td>{{ $schedule->id }}</td>
                            <td>{{ $schedule->doctors->full_name }}</td>
                            {{-- <td>{{ $schedule->supervisor->full_name }}</td> --}}
                            <td>{{ $schedule->date }}</td>
                            <td>{{ $schedule->start_time }}</td>
                            <td>{{ $schedule->end_time }}</td>

                            <td>
                                <a href="{{Route('backend.schedules.show',$schedule->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{Route('backend.schedules.edit',$schedule->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{Route('backend.schedules.destroy',$schedule->id)}}" method="post" style="display:inline">
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
