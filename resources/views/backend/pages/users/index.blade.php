@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('admin_trans.Admins')}}
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
                            {{-- <th>{{trans('admin_trans.Id')}}</th> --}}
                            <th>{{trans('admin_trans.Full_Name')}}</th>
                            <th>{{trans('admin_trans.Email')}}</th>
                            <th>{{trans('admin_trans.Password')}}</th>
                            <th>{{trans('admin_trans.Control')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            {{-- <td>{{ $admin->id }}</td> --}}
                            <td>{{ $user->name }}</td>

                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>



                            <td>
                                <a href="{{Route('backend.users.show',$user->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{Route('backend.users.edit',$user->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{Route('backend.users.destroy',$user->id)}}" method="post" style="display:inline">
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
