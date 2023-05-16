@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('doctor_trans.Doctors')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('doctor_trans.Doctors')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('doctor_trans.All_Doctors')}}</a></li>
                <li class="breadcrumb-item active">{{trans('doctor_trans.Doctors')}}</li>
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
                            {{-- <th>{{trans('doctor_trans.Id')}}</th> --}}
                            <th>{{trans('doctor_trans.Full_Name')}}</th>
                            <th>{{trans('doctor_trans.Email')}}</th>
                            {{-- <th>{{trans('doctor_trans.Address')}}</th> --}}
                            <th>{{trans('doctor_trans.Phone_Number')}}</th>
                            {{-- <th>{{trans('doctor_trans.Nationality')}}</th> --}}
                            {{-- <th>{{trans('doctor_trans.Doctor_Rate')}}</th> --}}
                            <th>{{trans('doctor_trans.Control')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                        <tr>
                            {{-- <td>{{ $doctor->id }}</td> --}}
                            <td>{{ $doctor->full_name }}</td>

                            <td>{{ $doctor->email }}</td>
                            {{-- <td>{{ $doctor->address }}</td> --}}
                            <td>{{ $doctor->phone_number }}</td>
                            {{-- <td>{{ $doctor->nationality }}</td> --}}
                            {{-- <td>{{ $doctor->Doctor_rate }}</td> --}}

                            <td>
                                <a href="{{Route('backend.doctors.show',$doctor->id)}}"class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{Route('backend.doctors.edit',$doctor->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{Route('backend.doctors.destroy',$doctor->id)}}" method="post" style="display:inline">
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
