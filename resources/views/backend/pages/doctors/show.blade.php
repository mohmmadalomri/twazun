@extends('backend.layouts.master')
@section('css')

@section('title')
    {{trans('doctor_trans.doctors')}}
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
            <h4 class="mb-0">doctor-Name: {{ $doctor->full_name }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/backend/doctors" class="default-color">{{trans('doctor_trans.All_Doctors')}}</a></li>
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

                <table id="table_id" class="display" class="table">
                    {{-- <thead> --}}
                        <tr>
                         <th style="width: 50px">{{trans('doctor_trans.Id')}}</th>
                         <td>{{ $doctor->id }}</td>
                        </tr>
                        <tr>
                            <th>{{trans('doctor_trans.Full_Name')}}</th>
                            <td>{{ $doctor->full_name }}</td>
                        </tr>
                        <tr>
                            <th>{{trans('doctor_trans.Email')}}</th>
                            <td>{{ $doctor->email }}</td>
                        </tr>
                        <th>{{trans('doctor_trans.Password')}}</th>
                        <td>{{ $doctor->password }}</td>
                    </tr>
                    <tr>
                            <th>{{trans('doctor_trans.n_number')}}</th>
                            <td>{{ $doctor->n_number }}</td>
                        </tr>
                        <tr>
                            <th>{{trans('doctor_trans.job_description')}}</th>
                            <td>
                                <td>{{ $doctor->job_description }}</td>
                             </td>
                        </tr>
                        <tr>
                            <th>{{trans('doctor_trans.job_ID')}}</th>
                            <td>
                                <td>{{ $doctor->job_ID }}</td>
                             </td>

                        </tr>
                        <tr>
                            <th>{{trans('doctor_trans.date_of_birth')}}</th>
                            <td>
                                <td>{{ $doctor->date_of_birth }}</td>
                             </td>
                        </tr>
                        <tr>
                        <th>{{trans('doctor_trans.years_of_experience')}}</th>
                            <td>
                                <td>{{ $doctor->years_of_experience }}</td>
                             </td>
                             <tr>
                        </tr>
                        <th>{{trans('doctor_trans.phone_number')}}</th>
                        <td>
                            <td>{{ $doctor->phone_number }}</td>
                         </td>
                    </tr>
                    <tr>
                    <th>{{trans('doctor_trans.address')}}</th>
                    <td>
                        <td>{{ $doctor->address }}</td>
                     </td>
                </tr>
                <tr>
                <th>{{trans('doctor_trans.nationality')}}</th>
                <td>
                    <td>{{ $doctor->nationality }}</td>
                 </td>
            </tr>
            <tr>
            <th>{{trans('doctor_trans.about')}}</th>
            <td>
                <td>{{ $doctor->about }}</td>
             </td>
        </tr>
        <tr>
            <th>{{trans('doctor_trans.Doctor_rate')}}</th>
            <td>
                <td>{{ $doctor->Doctor_rate }}</td>
             </td>
        </tr>
        <tr>
            <th>{{trans('doctor_trans.admin_id')}}</th>
            <td>
                <td>{{ $doctor->admin_id }}</td>
             </td>
        </tr>
        <tr>
            <th>{{trans('doctor_trans.supervisor_id')}}</th>
            <td>
                <td>{{ $doctor->supervisor_id }}</td>
             </td>
        </tr>
        <tr>
            <th>{{trans('doctor_trans.photo')}}</th>
            <td>
                <td> <img src="../images/doctors/{{$doctor->image}}"></td>
             </td>
        </tr>
        <tr>
            <th>{{trans('doctor_trans.gender')}}</th>
            <td>
                <td>{{ $doctor->gender }}</td>
             </td>
        </tr>

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
