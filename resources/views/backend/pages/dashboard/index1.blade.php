<!-- @extends('backend.layouts.master') -->
@section('css')
<!-- <link rel="stylesheet" href="./public/assets/css/styleLog.css"> -->
@endsection
@section('title')
empty
@endsection
@section('page-header')


<head>
    <link rel="stylesheet" href="{{ asset('assets/css/styleLog.css') }}">
</head>

@endsection
@section('content')
<!-- row -->
<div class="container main-dashboard">
    <div class="row">
        <div class="col-md-12 column">
            <div class="card">
                <div class="card-body doctor">
                    <h5 class="card-title">Schedule's</h5>
                    <div class="d-flex">
                        <a href="/backend/schedules/create">
                        <div class="avatar px-1"><img src="{{URL::asset('assets/images/plus.png')}}" class="rounded-circle" style="width: 65px; height:65px" alt="Avatar" /><span>Create</span>
                        </div>
                    </a>

                        <a href="/backend/schedules">
                        <div class="avatar px-1"><img src="{{URL::asset('assets/images/scch.jpg')}}" class="rounded-circle" style="width: 65px; height:65px" alt="Avatar" /><span>All</span>
                        </a>
                        </div>
                        {{-- <div class="avatar px-1"><img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" style="width: 65px; height:65px" alt="Avatar" /><span>JOHN</span>
                        </div> --}}
                        {{-- <span class="rounded-circle d-inline-block" style="width: 65px; height:65px;background:#eee;padding-top:21px;text-align:center" alt="Avatar"><i class="fa-regular fa-plus"></i></span> --}}
                    </div>
                </div>
                <div class="card-body patient">
                    <h5 class="card-title">Doctor's</h5>
                    <div class="d-flex">
                        <a href="/backend/doctors/create">
                         <div class="avatar px-1"><img src="{{URL::asset('assets/images/plus.png')}}"  class="rounded-circle" style="width: 65px; height:65px" alt="Avatar" /><span>Create</span>
                         </a>
                        </div>
                        <a href="/backend/doctors/">
                        <div class="avatar px-1"><img src="{{URL::asset('assets/images/doctor.jpg')}}"  class="rounded-circle" style="width: 65px; height:65px" alt="Avatar" /><span>All</span>
                        </a>
                        </div>
                        {{-- <div class="avatar px-1"><img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" style="width: 65px; height:65px" alt="Avatar" /><span>JOHN</span>
                        </div> --}}
                        {{-- <span class="rounded-circle d-inline-block" style="width: 65px; height:65px;background:#eee;padding-top:21px;text-align:center" alt="Avatar"><i class="fa-regular fa-plus"></i></span> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-8 column">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header ">
                            Featured <i class="fa-regular fa-eye"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Featured <i class="fa-regular fa-eye"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Featured <i class="fa-regular fa-eye"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Featured <i class="fa-regular fa-eye"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"> --}}
                            {{-- Featured <i class="fa-regular fa-eye"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Featured <i class="fa-regular fa-eye"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<!-- row closed -->
@endsection
@section('js')

@endsection
