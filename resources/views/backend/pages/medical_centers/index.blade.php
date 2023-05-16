@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('medical_center_trans.Medical_Centers')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('medical_center_trans.Medical_Centers')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('medical_center_trans.All_Medical_Centers')}}</a></li>
                <li class="breadcrumb-item active">{{trans('medical_center_trans.Medical_Centers')}}</li>
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
                            <th>{{trans('medical_center_trans.Id')}}</th>
                            <th>{{trans('medical_center_trans.Name')}}</th>
                            <th>{{trans('medical_center_trans.Email')}}</th>
                            <th>{{trans('medical_center_trans.Phone_Number')}}</th>
                            {{-- <th>{{trans('medical_center_trans.Address')}}</th> --}}
                            <th>{{trans('medical_center_trans.Website')}}</th>
                            <th>{{trans('medical_center_trans.Control')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medical_centers as $medical_center)
                        <tr>
                            <td>{{ $medical_center->id }}</td>
                            <td>{{ $medical_center->name }}</td>

                            <td>{{ $medical_center->email }}</td>
                            <td>{{ $medical_center->phone_number }}</td>
                            {{-- <td>{{ $medical_center->address }}</td> --}}
                            <td>{{ $medical_center->website }}</td>

                            <td>
                                <a href="{{Route('backend.medical_centers.show',$medical_center->id)}}"  class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{Route('backend.medical_centers.edit',$medical_center->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{Route('backend.medical_centers.destroy',$medical_center->id)}}" method="post" style="display:inline">
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
