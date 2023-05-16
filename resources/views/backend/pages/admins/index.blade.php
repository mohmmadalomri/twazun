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
                            <th>{{trans('admin_trans.Phone_Number')}}</th>
                            <th>{{trans('admin_trans.Is_Reception')}}</th>
                            {{-- <th>{{trans('admin_trans.Is_Analyzer')}}</th>
                            <th>{{trans('admin_trans.Is_Supervisor')}}</th> --}}
               @if( auth('doctor')->user() )
                        @if(auth('doctor')->user()->hasRole('user')  )

               @endif
                            {{-- @role('user') --}}
                            <th>{{trans('admin_trans.Control')}}</th>



                         @endif

                            {{-- @endrole --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                        <tr>
                            {{-- <td>{{ $admin->id }}</td> --}}
                            <td>{{ $admin->full_name }}</td>

                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->phone_number }}</td>
                            <td>
                               @if(  $admin->is_reception  == '1')
                                    <span class="badge rounded-pill bg-success text-white">{{ trans('admin_trans.Reception') }}</span>
                               @else
                                    <span class="badge rounded-pill bg-danger text-white">{{ trans('admin_trans.Not_Reception') }}</span>
                               @endif
                            </td>
                            {{-- <td>
                                @if(  $admin->is_analyzer  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('admin_trans.Analyzer') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('admin_trans.Not_Analyzer') }}</span>
                                @endif
                             </td>
                             <td>
                                @if(  $admin->is_supervisor  == '1')
                                     <span class="badge rounded-pill bg-success text-white">{{ trans('admin_trans.Supervisor') }}</span>
                                @else
                                     <span class="badge rounded-pill bg-danger text-white">{{ trans('admin_trans.Not_Supervisor') }}</span>
                                @endif
                             </td> --}}
              {{-- @if(auth('doctor')->user()->hasRole('user') or auth('admin')->user()->hasRole('user') ) --}}
              {{-- @role('user') --}}
                            <td>
                                <a href="{{Route('backend.admins.show',$admin->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{Route('backend.admins.edit',$admin->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <form action="{{Route('backend.admins.destroy',$admin->id)}}" method="post" style="display:inline">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                 {{-- @endrole --}}
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
