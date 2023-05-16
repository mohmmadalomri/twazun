@extends('layouts.sigAuth')

@section('content')
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="row d-flex align-items-center justify-content-center flex-column w-100">
            <div class="header">
                <img src="{{URL::asset('assets/images/tawazun-black-logo (2)-svg.png')}}">
            </div> --}}
            <div class="sub-header">
                <h3>sign in as</h3>
            </div>
            <div class="card-container d-flex justify-content-between flex-row">
                <div class="card mx-2 justify-content-start">
                    <h5 class="text-center" style="color:white">hello</h5>
                    <h5 class="text-center" style="color:white">health care provider</h5>
                    <div class="image row"><img class="img-fluid" src="{{URL::asset('assets/images/Group 1.svg')}}" height="200px"></div>
                    <div class="buttom row mx-auto w-100" style="position: absolute; bottom: 25px;">
                        <a href="login/doctor" style="text-decoration:none">
                            <h5 style="color: white; ">sign in as HCP</h5>
                            <button class="btn">Sign In</button>
                        </a>
                    </div>
                </div>
                <div class="card mx-2 justify-content-start" >
                    <h5 class="text-center">hello</h5>
                    <h5 class="text-center">admin</h5>
                    <div class="image row"><img class="img-fluid" src="{{URL::asset('assets/images/Group 2.svg')}}" height="200px"></div>
                    <div class="buttom row justify-content-center">
                        <a href="login/admin" style="text-decoration:none">
                            <h5 style="color: white; ">sign in as HCP</h5>
                            <button class="btn">Sign In</button>
                        </a>
                    </div>
                </div>
                <div class="card mx-2 justify-content-start">
                    <h5 class="text-center">hello</h5>
                    <h5 class="text-center">laboratory</h5>
                    <div class="image row"><img class="img-fluid" src="{{URL::asset('assets/images/Group 3.svg')}}" height="200px"></div>
                    <div class="buttom row mx-auto w-100" style="position: absolute; bottom: 25px;">
                        <a href="login/lab" style="text-decoration:none">
                        <h5 style="color: white; ">sign in as HCP</h5>
                        <button class="btn">Sign In</button>
                    </a>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @endsection
</body>

</html>
