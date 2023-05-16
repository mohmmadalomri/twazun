@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('admin_trans.Admins')}}
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
            <h4 class="mb-0">User-Name: {{ $user->name }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/backend/users" class="default-color">{{trans('All_Users')}}</a></li>
                <li class="breadcrumb-item active">{{trans('Users')}}</li>
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
                         <th style="width: 50px">{{trans('User-Id')}}</th>
                         <td>{{ $user->id }}</td>
                        </tr>
                            <th>{{trans('admin_trans.Full_Name')}}</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                            <th>{{trans('admin_trans.Email')}}</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <th>{{trans('admin_trans.Password')}}</th>
                        <td>{{ $user->password }}</td>
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
