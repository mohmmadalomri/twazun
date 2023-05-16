@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('supervisor_trans.Supervisor')}}
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
            <h4 class="mb-0">Supervisor-Name: {{ $supervisor->full_name }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/backend/admins" class="default-color">{{trans('admin_trans.All_Admins')}}</a></li>
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

                <table id="table_id" class="display" class="table">
                    {{-- <thead> --}}
                        <tr>
                         <th style="width: 50px">{{trans('admin_trans.Id')}}</th>
                         <td>{{ $supervisor->id }}</td>
                        </tr>
                            <th>{{trans('admin_trans.Full_Name')}}</th>
                            <td>{{ $supervisor->full_name }}</td>
                        </tr>
                            <th>{{trans('admin_trans.Email')}}</th>
                            <td>{{ $supervisor->email }}</td>
                        </tr>
                        <th>{{trans('admin_trans.Password')}}</th>
                        <td>{{ $supervisor->password }}</td>
                    </tr>
                            <th>{{trans('admin_trans.Phone_Number')}}</th>
                            <td>{{ $supervisor->phone_number }}</td>
                        </tr>
                            <th>{{trans('admin_trans.Is_Reception')}}</th>
                            <td>
                                @if(  $supervisor->is_reception  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('admin_trans.Reception') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('admin_trans.Not_Reception') }}</span>
                                @endif
                             </td>
                        </tr>
                            <th>{{trans('admin_trans.Is_Analyzer')}}</th>
                            <td>
                                @if(  $supervisor->is_analyzer  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('admin_trans.Analyzer') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('admin_trans.Not_Analyzer') }}</span>
                                @endif
                             </td>

                        </tr>
                            <th>{{trans('admin_trans.Is_Supervisor')}}</th>
                            <td>
                                @if(  $supervisor->is_analyzer  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('admin_trans.Analyzer') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('admin_trans.Not_Analyzer') }}</span>
                                @endif
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
