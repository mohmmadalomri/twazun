@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('supervisor_trans.Supervisors')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('supervisor_trans.Supervisors')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('supervisor_trans.All_Supervisors')}}</a></li>
                <li class="breadcrumb-item active">{{trans('supervisor_trans.Supervisors')}}</li>
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
                            {{-- <th>{{trans('supervisor_trans.Id')}}</th> --}}
                            <th>{{trans('supervisor_trans.Full_Nama')}}</th>
                            <th>{{trans('supervisor_trans.Email')}}</th>
                            {{-- <th>{{trans('supervisor_trans.Is_Reception')}}</th>
                            <th>{{trans('supervisor_trans.Is_Analyzer')}}</th> --}}
                            <th>{{trans('supervisor_trans.Control')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supervisors as $supervisor)
                        <tr>
                            {{-- <td>{{ $supervisor->id }}</td> --}}
                            <td>{{ $supervisor->full_name }}</td>

                            <td>{{ $supervisor->email }}</td>
                            {{-- <td>{{ $supervisor->is_reception }}</td>
                            <td>{{ $supervisor->is_analyzer }}</td> --}}

                            <td>
                                <a href="{{Route('backend.supervisors.show',$supervisor->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{Route('backend.supervisors.edit',$supervisor->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{Route('backend.supervisors.destroy',$supervisor->id)}}" method="post" style="display:inline">
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
