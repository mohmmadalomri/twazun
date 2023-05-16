@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('patient_trans.Patients')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{trans('patient_trans.Patients')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('patient_trans.All_Patients')}}</a></li>
                <li class="breadcrumb-item active">{{trans('patient_trans.Patients')}}</li>
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
                            {{-- <th>{{trans('patient_trans.Id')}}</th> --}}
                            <th>{{trans('patient_trans.Full_Name')}}</th>
                            <th>{{trans('patient_trans.Email')}}</th>
                            {{-- <th>{{trans('patient_trans.Address')}}</th> --}}
                            <th>{{trans('patient_trans.Phone_Number')}}</th>
                            {{-- <th>{{trans('patient_trans.Nationality')}}</th> --}}
                            {{-- <th>{{trans('patient_trans.Patient_Rate')}}</th> --}}
                            <th>{{trans('patient_trans.Control')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)
                        <tr>
                            {{-- <td>{{ $patient->id }}</td> --}}
                            <td>{{ $patient->full_name }}</td>

                            <td>{{ $patient->email }}</td>
                            {{-- <td>{{ $Patient->address }}</td> --}}
                            <td>{{ $patient->phone_number }}</td>
                            {{-- <td>{{ $Patient->nationality }}</td> --}}
                            {{-- <td>{{ $patient->patient_rate }}</td> --}}

                            <td>
                                <a href="{{Route('backend.patients.show',$patient->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{Route('backend.patients.edit',$patient->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{Route('backend.patients.destroy',$patient->id)}}"method="post" style="display:inline">
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
