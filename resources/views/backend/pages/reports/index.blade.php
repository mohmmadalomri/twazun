@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('admin_trans.Report')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('admin_trans.Admins')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('admin_trans.All_Admins')}}</a></li>
                <li class="breadcrumb-item active">{{trans('admin_trans.Admins')}}</li>
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
                             <th>{{trans('admin_trans.Report_Id')}}</th>
                            <th>{{trans('admin_trans.Admission_Date')}}</th>
                            <th>{{trans('admin_trans.doctor_name')}}</th>
                            <th>{{trans('admin_trans.patient_name')}}</th>
                            <th>{{trans('admin_trans.Control')}}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                        <tr>
                            {{-- <td>{{ $admin->id }}</td> --}}
                            <td>{{ $report->id }}</td>

                            <td>{{ $report->Admission_Date }}</td>
                            <td>{{ $report->doctor_name }}</td>
                            <td>{{ $report->patient_name }}</td>


                            <td>
                                <a href="{{Route('backend.reports.show',$report->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{Route('backend.reports.edit',$report->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{Route('backend.reports.destroy',$report->id)}}" method="post" style="display:inline">
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
