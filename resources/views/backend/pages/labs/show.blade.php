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
            <h4 class="mb-0">Lab-Name: {{ $lab->name }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="/backend/labs" class="default-color">{{trans('admin_trans.All_Labs')}}</a></li>
                <li class="breadcrumb-item active">{{trans('admin_trans.Labs')}}</li>
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
                         <td>{{ $lab->id }}</td>
                        </tr>
                            <th>{{trans('admin_trans.name')}}</th>
                            <td>{{ $lab->name }}</td>
                        </tr>
                            <th>{{trans('address')}}</th>
                            <td>{{ $lab->address }}</td>
                        </tr>
                        <th>{{trans('phone_number')}}</th>
                        <td>{{ $lab->phone_number }}</td>
                    </tr>
                            <th>{{trans('admin_trans.Website')}}</th>
                            <td>{{ $lab->website }}</td>
                        </tr>

                             </tr>
                             <th>{{trans('admin_trans.email')}}</th>
                             <td>{{ $lab->email }}</td>
                        </tr>

                           </tr>
                           <th>{{trans('admin_trans.Password')}}</th>
                           <td>{{ $lab->password }}</td>
                       </tr>

                  </tr>
                  <th>{{trans('admin_trans.Image')}}</th>
                  <td>{{ $lab->image }}</td>
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
