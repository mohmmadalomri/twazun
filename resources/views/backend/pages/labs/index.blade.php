@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('lab_trans.Labs')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('lab_trans.Labs')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('lab_trans.All_Labs')}}</a></li>
                <li class="breadcrumb-item active">{{trans('lab_trans.Labs')}}</li>
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
                            {{-- <th>{{trans('lab_trans.Id')}}</th> --}}
                            <th>{{trans('lab_trans.Name')}}</th>
                            <th>{{trans('lab_trans.Email')}}</th>
                            <th>{{trans('lab_trans.Phone_Number')}}</th>
                            {{-- <th>{{trans('lab_trans.Address')}}</th> --}}
                            <th>{{trans('lab_trans.Website')}}</th>
                            <th>{{trans('lab_trans.Control')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($labs as $lab)
                        <tr>
                            {{-- <td>{{ $lab->id }}</td> --}}
                            <td>{{ $lab->name }}</td>

                            <td>{{ $lab->email }}</td>
                            <td>{{ $lab->phone_number }}</td>
                            {{-- <td>{{ $Lab->address }}</td> --}}
                            <td>{{ $lab->website }}</td>

                            <td>
                                <a href="{{Route('backend.labs.show',$lab->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{Route('backend.labs.edit',$lab->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{Route('backend.labs.destroy',$lab->id)}}" method="post" style="display:inline">
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
