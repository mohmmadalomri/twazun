@extends('backend.layouts.master')
@section('css')
<style>
    .body{
        font-weight: bold
    }
    /* .color {
    background-color: #3ac2ba;
    color: white
  } */
  .banner{
    height: 30px;
    background-color: #3ac2ba;
    color: white;
    display: flex;
    align-items: center; /* Vertical center alignment */
  }
  .custom-form-control{
    height: 40px;
  }
  .custom-form-input{
    border: 1px solid black; height:50px;
    display: flex;
    align-items: center; /* Vertical center alignment */

  }
</style>
@section('title')
{{trans('reports_trans.Report')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    {{-- <p>{{auth('admin')->user()->id}}</p> --}}
    <div class="row">
        <div class="col-sm-6">

            <h4 class="mb-0"> {{trans('reports_trans.Report')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('reports_trans.Add_Report')}}</a></li>
                <li class="breadcrumb-item active">{{trans('reports_trans.Report')}}</li>
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
                 {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif --}}


                <div class="container" style="direction:ltr; text-align:left; width: 100%; border:black 2px;">


                    <div  class="row">

                        <div class="custom-form-input col-lg-4 col-md-4" style="height: 70px">
                            <img src="{{URL::asset('assets/images/tawazun1.jpg')}}" height="40" width="40" alt="">
                        </div>

                        <div class="custom-form-input col-lg-4 col-md-4" style="height: 70px; justify-content: center; ">
                            Initial Patient Assessment <br> Nursing(Admission)
                        </div>

                        <div class="custom-form-input col-lg-4 col-md-4" style="height: 70px"></div>
                    </div>
                    <form action="/backend/reports/store" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div  class="row" >
                        <div class="banner col-lg-12 col-md-12 " >A .ADMISSION DATA</div>
                    </div>

                    <div  class="row">
                        <div class="custom-form-input col-lg-3 col-md-3"> Admission Date and Time:</div>
                        <div class="custom-form-input col-lg-3 col-md-3">
                            <input type="text" style="height: 40px;" class="form-control" name="date">
                        </div>
                        <div class="custom-form-input col-lg-3 col-md-3">Admission Diagnosis:</div>
                        <div class="custom-form-input col-lg-3 col-md-3 ">
                            <input type="text" style="height: 40px;" class="form-control" name="admission_diagnosis">
                        </div>
                    </div>

                    <div  class="row">
                        <div class="custom-form-input col-lg-8 col-md-8 p-0">
                                <div class="custom-form-input col-lg-6 col-md-6 "> Admitting THHC Staff Name and ID#:</div>

                                <div class="custom-form-input col-lg-6 col-md-6 ">
                                    <input type="text" style="height: 40px;" class="form-control custom-form-conrol" name="Admitting_Staff">
                                </div>
                        </div>

                        <div  class="custom-form-input col-lg-4 col-md-4 p-0">
                                <div class="custom-form-input col-lg-6 col-md-6 "> Physician:</div>

                                <div class="custom-form-input col-lg-6 col-md-6 ">
                                    <input type="text" style="height: 40px;" class="form-control custom-form-conrol" name="Physician">
                                </div>
                        </div>
                    </div>


                    <div  class="row">
                        <div class="custom-form-input col-lg-6 col-md-6 p-0">
                                <div class="custom-form-input col-lg-3 col-md-3 "> Specialty: </div>

                                <div class="custom-form-input col-lg-3 col-md-3 ">
                                    <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="SN">
                                    <label for="" class="m-0">SN</label>
                                </div>
                                <div class="custom-form-input col-lg-3 col-md-3 ">
                                    <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="PT" >
                                    <label for="" class="m-0">PT</label>
                                </div>
                                <div class="custom-form-input col-lg-3 col-md-3 ">
                                    <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="RT">
                                    <label for="" class="m-0">RT</label>
                                </div>

                        </div>

                        <div  class="custom-form-input col-lg-6 col-md-6 p-0">
                                <div class="custom-form-input col-lg-4 col-md-4 "> Other:</div>

                                <div class="custom-form-input col-lg-8 col-md-8 ">
                                    <input type="text" style="height: 40px;" class="form-control custom-form-conrol" name="speci_other">
                                </div>
                        </div>
                    </div>



                    <div  class="row">
                        <div class="custom-form-input col-lg-4 col-md-4 p-0">
                                <div class="custom-form-input col-lg-12 col-md-12 "> Reason for THHC : </div>
                        </div>

                        <div  class="custom-form-input col-lg-8 col-md-8 p-0">

                                <div class="custom-form-input col-lg-12 col-md-12 ">
                                    <input type="text" style="height: 40px;" class="form-control custom-form-conrol" name="Reason_for_HHC">
                                </div>
                        </div>
                    </div>


                    <div  class="row">
                        <div class="custom-form-input col-lg-6 col-md-6 p-0">
                                <div class="custom-form-input col-lg-6 col-md-6 ">Information obtained from : </div>

                                <div class="custom-form-input col-lg-3 col-md-3 ">
                                    <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Information_from">
                                    <label for="Information_from" class="m-0">Patient</label>
                                </div>

                                <div class="custom-form-input col-lg-3 col-md-3 ">
                                    <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Information-from-Family">
                                    <label for="Information from Family" class="m-0">Family</label>                                </div>
                        </div>

                        <div  class="custom-form-input col-lg-6 col-md-6 p-0">

                            <div class="custom-form-input col-lg-4 col-md-4 "> other : </div>


                                <div class="custom-form-input col-lg-8 col-md-8 ">
                                    <input type="text" style="height: 40px;" class="form-control custom-form-conrol" name="Information-from-other">
                                </div>
                        </div>
                    </div>

                    {{-- banner --}}
                    <div  class="row" >
                        <div class=" banner col-lg-12 col-md-12 " >VITAL SIGNS</div>
                    </div>

                    {{-- 9 --}}
                    <div  class="row">

                            <div class="custom-form-input col-lg-6 col-md-6 p-0" >

                                    <div class="custom-form-input col-lg-6 col-md-6 p-0">
                                        <div class="custom-form-input col-lg-6 col-md-6 " style="border:0px">
                                        Temp
                                        </div>
                                        <div class="custom-form-input col-lg-6 col-md-6 " style="border:0px">
                                            <input type="text" style="height: 40px;" class="form-control custom-form-conrol" name="Temp">
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3 p-0">
                                        <div class="custom-form-input col-lg-6 col-md-6 m-0" style="height: 20px; border:0px;">
                                            <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Oral">
                                            <label for="Oral" class="m-0">Oral</label>
                                        </div>

                                        <div class="custom-form-input col-lg-6 col-md-6 m-0" style="height: 20px; border:0px;">
                                            <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Ear">
                                            <label for="Ear" class="m-0">Ear</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 p-0">
                                        <div class="custom-form-input col-lg-6 col-md-6 " style="height: 20px; border:0px;">
                                            <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Axillary">
                                            <label for="Axillary" class="m-0"> Axillary</label>
                                        </div>

                                        <div class="custom-form-input col-lg-6 col-md-6 " style="height: 20px; border:0px;">
                                            <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Rectal">
                                            <label for="Rectal" class="m-0">Rectal</label>
                                        </div>
                                    </div>
                            </div>



                        <div  class="custom-form-input col-lg-6 col-md-6 p-0">

                            <div class="custom-form-input col-lg-4 col-md-4 "> Blood Pressure </div>


                                <div class="custom-form-input col-lg-8 col-md-8 ">
                                    <input type="text" style="height: 40px;" class="form-control custom-form-conrol" name="Blood-Pressure">
                                </div>
                        </div>
                    </div>



                    {{-- 10 --}}
                    <div  class="row">

                                <div class="custom-form-input col-lg-6 col-md-6 p-0" style="height: 70px" >

                                        <div class="custom-form-input col-lg-6 col-md-6 p-0" style="height: 70px">
                                            <div class="custom-form-input col-lg-6 col-md-6 " style="height: 70px; border:0px">
                                                Pulse Rate
                                            </div>
                                            <div class="custom-form-input col-lg-6 col-md-6 " style="height: 70px; border:0px ">
                                                <input type="text" style="height: 40px;" class="form-control custom-form-conrol" name="Pulse-Rate">
                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-3 p-0" style="height: 70px">
                                            <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 20px; border:0px;">
                                                <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Regular">
                                                <label for="" class="m-0">Regular</label>
                                            </div>

                                            <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 20px; border:0px;">
                                                <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Regular">
                                                <label for="" class="m-0">Irregular</label>
                                            </div>
                                            {{-- <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 20px; border:0px;"> --}}
                                                {{-- <input type="checkbox" style="height: 20px; margin-right:10px;" class="">
                                                <label for="" class="m-0">Ear</label>                                 --}}
                                            {{-- </div> --}}
                                        </div>

                                        <div class="col-lg-3 col-md-3 p-0" style="height: 70px">
                                            <div class="custom-form-input col-lg-4 col-md-4 " style="height: 20px; border:0px;">
                                                <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Axillary">
                                                <label for="" class="m-0"> Axillary</label>
                                            </div>

                                            <div class="custom-form-input col-lg-4 col-md-4 " style="height: 20px; border:0px;">
                                                <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Rectal">
                                                <label for="" class="m-0">Rectal</label>
                                            </div>

                                            {{-- <div class="custom-form-input col-lg-6 col-md-4 " style="height: 20px; border:0px;">
                                                <input type="checkbox" style="height: 20px; margin-right:10px;" class="">
                                                <label for="" class="m-0">Rectal</label>
                                            </div> --}}
                                        </div>
                                </div>



                            <div  class="custom-form-input col-lg-6 col-md-6 p-0" style="height: 70px">

                                    <div class="col-lg-4 col-md-4 p-0" style="height: 70px">
                                        <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 20px; border:0px;">
                                            <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Standing">
                                            <label for="" class="m-0">Standing</label>
                                        </div>

                                        <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 20px; border:0px;">
                                            <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Sitting">
                                            <label for="" class="m-0">Sitting</label>
                                        </div>
                                        <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 20px; border:0px;">
                                            <input type="checkbox" style="height: 20px; margin-right:10px;" class="" name="Lying">
                                            <label for="" class="m-0">Lying</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 p-0" style="height: 70px">

                                        <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin:5px 0px 0px 0px;">

                                                <label for="R_Arm" style="margin: 0px 10px 0px 0px; width:50px">R_Arm</label>

                                                <input type="text"  id="txtDate" maxLength="7" style="height: 20px; width:70px; margin:5px 10px 0px 0px;" name="R_Arm">
                                        </div>

                                        <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin-top: 5px;">

                                            <label for="" style="margin: 0px 10px 0px 0px;">R_Wrist</label>

                                            <input type="text"  style="height: 20px; width:70px; margin:5px 10px 0px 0px;" >
                                        </div>

                                        <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin-top: 5px;" >

                                            <label for="" style="margin: 0px 10px 0px 0px;">R_Leg</label>

                                            <input type="text" class="m-0" style="height: 20px; width:70px; margin:5px 10px 0px 0px;">
                                        </div>

                                </div>

                                <div class="col-lg-4 col-md-4 p-0" style="height: 70px">

                                    <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin:5px 0px 0px 0px;">

                                            <label for="" style="margin: 0px 10px 0px 0px; width:50px">R_Arm</label>

                                            <input type="text"  style="height: 20px; width:70px; margin:5px 10px 0px 0px;">
                                    </div>

                                    <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin-top: 5px;">

                                        <label for="" style="margin: 0px 10px 0px 0px;">R_Wrist</label>

                                        <input type="text"  style="height: 20px; width:70px; margin:5px 10px 0px 0px;">
                                    </div>

                                    <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin-top: 5px;">

                                        <label for="" style="margin: 0px 10px 0px 0px;">R_Leg</label>

                                        <input type="text" class="m-0" style="height: 20px; width:70px; margin:5px 10px 0px 0px;">
                                    </div>

                                </div>

                                {{-- <div class="col-lg-4 col-md-4 p-0" style="height: 70px">

                                    <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin:5px 0px 0px 0px;">

                                            <label for="" style="margin: 0px 10px 0px 0px; width:50px">R_Arm</label>

                                            <input type="text"  style="height: 20px; width:70px; margin:5px 10px 0px 0px;">
                                    </div>

                                    <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin-top: 5px;">

                                        <label for="" style="margin: 0px 10px 0px 0px;">R_Wrist</label>

                                        <input type="text"  style="height: 20px; width:70px; margin:5px 10px 0px 0px;">
                                    </div>

                                    <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin-top: 5px;">

                                        <label for="" style="margin: 0px 10px 0px 0px;">R_Leg</label>

                                        <input type="text" class="m-0" style="height: 20px; width:70px; margin:5px 10px 0px 0px;">
                                    </div>

                                </div> --}}


                            </div>
                    </div>



                    {{-- 11 --}}
                    {{-- 6 { 6/6 } / 6  { 4/4/4 }--}}
                    <div  class="row">

                        <div class="custom-form-input col-lg-6 col-md-6 p-0"  >

                                <div class="custom-form-input col-lg-6 col-md-6 p-0" >
                                    <div class="custom-form-input col-lg-6 col-md-6 " style=" border:0px">
                                        Respiration
                                    </div>
                                    <div class="custom-form-input col-lg-6 col-md-6 " style=" border:0px ">
                                        <input type="text" style="height: 40px;" class="form-control custom-form-conrol" name="Respiration">
                                    </div>

                                </div>

                                <div class="custom-form-input col-lg-6 col-md-6 p-0" style="">
                                    <div class="custom-form-input col-lg-6 col-md-6" style=" border:0px">
                                        Oxygen Saturation:
                                    </div>
                                    <div class="custom-form-input col-lg-6 col-md-6 " style=" border:0px ">
                                        <input type="text" style="height: 40px;" class="form-control custom-form-conrol" name="Oxygen-Saturation">
                                    </div>

                                </div>
                        </div>



                        <div  class="custom-form-input col-lg-6 col-md-6 p-0" >

                            <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin-top: 5px;">

                                <label for="" style="margin: 0px 10px 0px 0px;">Height kg :</label>

                                <input type="text"  style="height: 20px; width:70px; margin:5px 10px 0px 0px;" name="Height">
                            </div>

                            </div>


                            <div class="custom-form-input col-lg-4 col-md-4 p-0" >

                                <div class="custom-form-input col-lg-4 col-md-4 m-0" style="height: 33.3%; border:0px; margin-top: 5px;">

                                    <label for="" style="margin: 0px 10px 0px 0px;">weight kg :</label>

                                    <input type="text"  style="height: 20px; width:70px; margin:5px 10px 0px 0px;" name="weight">
                                </div>
                            </div>

                            <div class="custom-form-input col-lg-4 col-md-4 p-0" >

                                <div class="custom-form-input col-lg-5 col-md-5" style=" border:0px">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="actual">
                                    <label for="actual" class="m-0">Actual</label>
                                </div>

                                <div class="custom-form-input col-lg-7 col-md-7 " style=" border:0px ">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="Estimated">
                                    <label for="Estimated" class="m-0">Estimated</label> </div>

                            </div>


                        </div>
                    </div>


                    {{-- 12 --}}
                     {{-- banner --}}
                     <div  class="row" >
                        <div class=" banner col-lg-12 col-md-12 " >PAIN ASSESSMENT</div>
                    </div>

                    {{-- 13 --}}
                     {{-- 6 { 6/6 } / 6  { 4/8 }--}}
                     <div  class="row">

                        <div class="custom-form-input col-lg-6 col-md-6 p-0"  >

                                <div class="custom-form-input col-lg-12 col-md-12 " >
                                        Dose Patient Express or exhibit of Pain:
                                    </div>
                        </div>



                        <div  class="custom-form-input col-lg-6 col-md-6 p-0" >

                            <div class="custom-form-input col-lg-4 col-md-4 p-0" >


                                <div class="custom-form-input col-lg-5 col-md-5" style=" border:0px">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="pain">
                                    <label for="pain" class="m-0">No</label>
                                </div>

                                <div class="custom-form-input col-lg-7 col-md-7 " style=" border:0px ">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="pain">
                                    <label for="pain" class="m-0">Yes</label> </div>

                                </div>



                            <div class="custom-form-input col-lg-8 col-md-8 p-0" >

                                <div class="custom-form-input col-lg-12 col-md-12" style=" border:0px">
                                    If Yes,Initiate Pain Assessment Form (F028-THHC)
                                </div>


                            </div>

                        </div>
                    </div>



                     {{-- 14 --}}
                     {{-- 6 { 6/6 } / 6  { 8/4 }--}}
                     <div  class="row" style="background-color: #3ac2ba; color:white">

                        <div class="custom-form-input col-lg-6 col-md-6 p-0" >

                                <div class="custom-form-input col-lg-3 col-md-3" >
                                    ALLERGIES
                                </div>
                                <div class="custom-form-input col-lg-3 col-md-3" style=" border:0px">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="Yes-al">
                                    <label for="Yes-al" class="m-0">Yes</label>
                                </div>

                                <div class="custom-form-input col-lg-3 col-md-3" style=" border:0px ">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="No-al">
                                    <label for="" class="m-0">No</label>
                                </div>

                                <div class="custom-form-input col-lg-3 col-md-3" style=" border:0px ">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="NKA">
                                    <label for="NKA" class="m-0">NKA</label>
                                </div>


                        </div>


                        <div  class="custom-form-input col-lg-6 col-md-6 p-0" >

                            <div class="custom-form-input col-lg-8 col-md-8 p-0" >
                            </div>

                            <div class="custom-form-input col-lg-4 col-md-4 p-0" >

                                <div class="custom-form-input col-lg-12 col-md-12" style=" border:0px">
                                    TYPE OF REACTION
                                </div>
                           </div>
                      </div>

                     </div>


                      {{-- 15 --}}
                     {{-- 8 { 6/6 } / 4  { 12 }--}}
                     <div  class="row">

                        <div class="custom-form-input col-lg-6 col-md-6 p-0" >


                                <div class="custom-form-input col-lg-6 col-md-6" style=" border:0px">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="medication">
                                    <label for="medication" class="m-0">Medication</label>
                                </div>


                                <div class="custom-form-input col-lg-6 col-md-6" >
                                    <div class="custom-form-input col-lg-3 col-md-3 p-0" style="border:0px"> 1</div>
                                    <div class="custom-form-input col-lg-9 col-md-9  p-0" style="border:0px">
                                        <input type="text" style="height: 40px;" class="form-control" name="medication">
                                    </div>
                                </div>


                        </div>


                            <div  class="custom-form-input col-lg-6 col-md-6 p-0" >

                                    <div class="custom-form-input col-lg-4 col-md-4" >
                                        <div class="custom-form-input col-lg-2 col-md-2" style="border:0px"> 2</div>
                                        <div class="custom-form-input col-lg-10 col-md-10" style="border:0px">
                                            <input type="text" style="height: 40px;" class="form-control" name="med2">
                                        </div>
                                    </div>
                                    <div class="custom-form-input col-lg-4 col-md-4" >
                                        <div class="custom-form-input col-lg-2 col-md-2" style="border:0px"> 3</div>
                                        <div class="custom-form-input col-lg-10 col-md-10" style="border:0px">
                                            <input type="text" style="height: 40px;" class="form-control" name="med3">
                                        </div>
                                    </div>


                                    <div class="custom-form-input col-lg-4 col-md-4" >
                                        <div class="custom-form-input col-lg-12 col-md-12" style="border:0px">
                                            <input type="text" style="height: 40px;" class="form-control" name="reaction_type_med">
                                        </div>
                                    </div>
                            </div>

                     </div>



                     {{-- 16 --}}
                     {{-- 8 { 6/6 } / 4  { 12 }--}}
                     <div  class="row">

                        <div class="custom-form-input col-lg-6 col-md-6 p-0" >


                                <div class="custom-form-input col-lg-6 col-md-6" style=" border:0px">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="food" >
                                    <label for="food" class="m-0">Food</label>
                                </div>


                                <div class="custom-form-input col-lg-6 col-md-6" >
                                    <div class="custom-form-input col-lg-3 col-md-3 p-0" style="border:0px"> 1</div>
                                    <div class="custom-form-input col-lg-9 col-md-9  p-0" style="border:0px">
                                        <input type="text" style="height: 40px;" class="form-control" name="food">
                                    </div>
                                </div>


                        </div>


                            <div  class="custom-form-input col-lg-6 col-md-6 p-0" >

                                    <div class="custom-form-input col-lg-4 col-md-4" >
                                        <div class="custom-form-input col-lg-2 col-md-2" style="border:0px"> 2</div>
                                        <div class="custom-form-input col-lg-10 col-md-10" style="border:0px">
                                            <input type="text" style="height: 40px;" class="form-control" name="food2">
                                        </div>
                                    </div>
                                    <div class="custom-form-input col-lg-4 col-md-4" >
                                        <div class="custom-form-input col-lg-2 col-md-2" style="border:0px"> 3</div>
                                        <div class="custom-form-input col-lg-10 col-md-10" style="border:0px">
                                            <input type="text" style="height: 40px;" class="form-control" name="food3">
                                        </div>
                                    </div>

                                    <div class="custom-form-input col-lg-4 col-md-4" >
                                        <div class="custom-form-input col-lg-12 col-md-12" style="border:0px">
                                            <input type="text" style="height: 40px;" class="form-control" name="reaction-type-food">
                                        </div>
                                    </div>
                            </div>

                     </div>



                      {{-- 17 --}}
                     {{-- 8 { 6/6 } / 4  { 12 }--}}
                     <div  class="row">

                        <div class="custom-form-input col-lg-6 col-md-6 p-0" >


                                <div class="custom-form-input col-lg-6 col-md-6" style=" border:0px">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="">
                                    <label for="" class="m-0">Other</label>
                                </div>


                                <div class="custom-form-input col-lg-6 col-md-6" >
                                    <div class="custom-form-input col-lg-3 col-md-3 p-0" style="border:0px"> 1</div>
                                    <div class="custom-form-input col-lg-9 col-md-9  p-0" style="border:0px">
                                        <input type="text" style="height: 40px;" class="form-control" name="other1">
                                    </div>
                                </div>


                        </div>


                            <div  class="custom-form-input col-lg-6 col-md-6 p-0" >

                                    <div class="custom-form-input col-lg-4 col-md-4" >
                                        <div class="custom-form-input col-lg-2 col-md-2" style="border:0px"> 2</div>
                                        <div class="custom-form-input col-lg-10 col-md-10" style="border:0px">
                                            <input type="text" style="height: 40px;" class="form-control" name="other2">>
                                        </div>
                                    </div>
                                    <div class="custom-form-input col-lg-4 col-md-4" >
                                        <div class="custom-form-input col-lg-2 col-md-2" style="border:0px"> 3</div>
                                        <div class="custom-form-input col-lg-10 col-md-10" style="border:0px">
                                            <input type="text" style="height: 40px;" class="form-control" name="other3">>
                                        </div>
                                    </div>


                                    <div class="custom-form-input col-lg-4 col-md-4" >
                                        <div class="custom-form-input col-lg-12 col-md-12" style="border:0px">
                                            <input type="text" style="height: 40px;" class="form-control" name="reaction-type-other">
                                        </div>
                                    </div>
                            </div>

                     </div>

                     {{-- 18 --}}
                    {{-- banner --}}
                    <div  class="row" >
                        <div class=" banner col-lg-12 col-md-12 ">CONSENT</div>
                    </div>


                     {{-- 19 --}}
                     {{-- 4 { 6/6 } / 8  { 8/4 }--}}
                     <div  class="row" >

                        <div class="custom-form-input col-lg-4 col-md-4 p-0" >

                                <div class="custom-form-input col-lg-4 col-md-4" style=" border:0px" >
                                    Signed
                                </div>
                                <div class="custom-form-input col-lg-4 col-md-4" style=" border:0px">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="signed">
                                    <label for="signed" class="m-0">Yes</label>
                                </div>

                                <div class="custom-form-input col-lg-4 col-md-4" style=" border:0px ">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class=""  name="signed">
                                    <label for="signed" class="m-0">No</label>
                                </div>
                        </div>


                        <div  class="custom-form-input col-lg-8 col-md-8 p-0" >

                            <div class="custom-form-input col-lg-3 col-md-3" >
                                Signed By
                            </div>

                            <div class="custom-form-input col-lg-3 col-md-3" style=" border:0px ">
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="signedby">
                                <label for="signedby" class="m-0">Patient</label>
                            </div>



                            <div class="custom-form-input col-lg-6 col-md-6 p-0" >

                                <div class="custom-form-input col-lg-4 col-md-4" style=" border:0px ">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="signedby">
                                    <label for="signedby" class="m-0">Other</label>
                                </div>

                                <div class="custom-form-input col-lg-8 col-md-8" style=" border:0px">
                                    <input type="text" style="height: 40px;" class="form-control" name="signedby">
                                </div>
                           </div>
                      </div>

                     </div>



                    {{-- 20 --}}
                    {{-- banner --}}
                    <div  class="row" >
                        <div class=" banner col-lg-12 col-md-12 ">PATIENT BILL OF RIGHTS</div>
                    </div>


                    {{-- 21 --}}
                     {{-- 4 { 6/6 } / 8  { 8/4 }--}}
                     <div  class="row" >

                        <div class="custom-form-input col-lg-4 col-md-4 p-0" >

                                <div class="custom-form-input col-lg-12 col-md-12" style=" border:0px" >
                                    Ptients Copy/Explanation given to:
                                </div>

                        </div>


                        <div  class="custom-form-input col-lg-8 col-md-8 p-0" >


                            <div class="custom-form-input col-lg-4 col-md-4" style=" border:0px ">
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="copy-patient">
                                <label for="copy-patient" class="m-0">Patient</label>
                            </div>

                            <div class="custom-form-input col-lg-8 col-md-8 p-0" style=" border:0px " >

                                <div class="custom-form-input col-lg-4 col-md-4" style=" border:0px ">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="copy-patient">
                                    <label for="copy-patient" class="m-0"> Other(Specify):</label>
                                </div>

                                <div class="custom-form-input col-lg-8 col-md-8" style=" border:0px">
                                    <input type="text" style="height: 40px;" class="form-control" name="copy-patient">
                                </div>
                           </div>
                      </div>

                     </div>



                     {{-- 21 --}}
                     {{-- 4 { 6/6 } / 8  { 8/4 }--}}
                     {{-- <div  class="row" style="background-color: #3ac2ba; height:50px;">

                        <div class="custom-form-input col-lg-12 col-md-12 p-0" style=" border:0px" >

                                <div class="custom-form-input col-lg-12 col-md-12" style=" border:0px" >
                                    ORIENTATION
                                </div>

                        </div>


                        <div  class="custom-form-input col-lg-9 col-md-9 p-0" style=" border:0px">


                            <div class="custom-form-input col-lg-4 col-md-4" style=" border:0px ">
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="">
                                <label for="" class=>Patient</label>
                            </div>

                            <div class="custom-form-input col-lg-4 col-md-4 p-0" style=" border:0px " >
                                <div class="custom-form-input col-lg-4 col-md-4" style=" border:0px ">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="">
                                    <label for="" class="m-0"> Other(Specify):</label>
                                </div>

                                <div class="custom-form-input col-lg-8 col-md-8" style=" border:0px">
                                    <input type="text" style="height: 40px;" class="form-control">
                                </div>
                           </div>
                      </div>

                     </div> --}}
                     <div  class="row" style="background-color: #3ac2ba; color:white; height:50px;">

                        <div class="custom-form-input col-lg-3 col-md-3 p-0" style=" border:0px" >

                                <div class="custom-form-input col-lg-12 col-md-12" style=" border:0px" >
                                    ORIENTATION
                                </div>

                        </div>


                        <div  class="custom-form-input col-lg-9 col-md-9 p-0" style=" border:0px">


                            <div class="custom-form-input col-lg-4 col-md-4" style=" border:0px ">
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="ori">
                                <label for="ori" class="m-0">Patient</label>
                            </div>

                            <div class="custom-form-input col-lg-8 col-md-8 p-0" style=" border:0px " >

                                <div class="custom-form-input col-lg-4 col-md-4" style=" border:0px ">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="ori">
                                    <label for="ori" class="m-0"> Other(Specify):</label>
                                </div>

                                <div class="custom-form-input col-lg-8 col-md-8" style=" border:0px">
                                    <input type="text" style="height: 40px;" class="form-control">
                                </div>
                           </div>
                      </div>

                     </div>


                     {{-- 22 --}}
                     {{-- 6 { 12 } / 6  { 6/6 }--}}
                     <div  class="row" >

                        <div class="custom-form-input col-lg-6 col-md-6 p-0"  >

                            <div class="custom-form-input col-lg-12 col-md-12" style=" border:0px ">
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="THHC Working Hours">
                                <label for="THHC Working Hours" class="m-0">THHC Working Hours</label>
                            </div>

                        </div>


                        <div  class="custom-form-input col-lg-6 col-md-6 p-0" >


                            <div class="custom-form-input col-lg-6 col-md-6" >
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="THHC Discharge plan">
                                <label for="THHC Discharge plan" class="m-0">THHC Discharge plan</label>
                            </div>
                            <div class="custom-form-input col-lg-6 col-md-6" >
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="Emergency Telephone Numbers">
                                <label for="Emergency Telephone Numbers" class="m-0">Emergency Telephone Numbers</label>
                            </div>


                        </div>

                     </div>


                    {{-- 23 --}}
                     {{-- 6 { 12 } / 6  { 6/6 }--}}
                     <div  class="row" >

                        <div class="custom-form-input col-lg-6 col-md-6 p-0"  >

                            <div class="custom-form-input col-lg-12 col-md-12" style=" border:0px ">
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="THHC disciplines involve">
                                <label for="THHC disciplines involve" class="m-0">THHC disciplines involve in patient care</label>
                            </div>

                        </div>


                        <div  class="custom-form-input col-lg-6 col-md-6 p-0" >


                            <div class="custom-form-input col-lg-6 col-md-6" >
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="THHC Telephone Numbers">
                                <label for="THHC Telephone Numbers" class="m-0">THHC Telephone Numbers</label>
                            </div>
                            <div class="custom-form-input col-lg-6 col-md-6" >
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="Service Charges">
                                <label for="Service Charges" class="m-0">Service Charges</label>
                            </div>


                        </div>

                     </div>


                    {{-- 24 --}}
                     {{-- 6 { 12 } / 6  { 6/6 }--}}
                     <div  class="row" >

                        <div class="custom-form-input col-lg-6 col-md-6 p-0"  >

                            <div class="custom-form-input col-lg-12 col-md-12" style=" border:0px ">
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="Visit Frequency">
                                <label for="Visit Frequency" class="m-0">Visit Frequency,days and time</label>
                            </div>

                        </div>


                        <div  class="custom-form-input col-lg-6 col-md-6 p-0" >


                            <div class="custom-form-input col-lg-6 col-md-6" >
                                <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="Emergency Plan">
                                <label for="Emergency Plan" class="m-0"> Emergency Plan</label>
                            </div>
                            <div class="custom-form-input col-lg-6 col-md-6 p-0" style=" border:0px ">
                                <div class="custom-form-input col-lg-3 col-md-3" style=" border:0px ">
                                    <input type="checkbox" style="height: 20px; margin-right:5px;" class="" name="visit-other">
                                    <label for="visit-other" class="m-0">Other</label>
                                </div>

                                <div class="custom-form-input col-lg-9 col-md-9" style=" border:0px">
                                    <input type="text" style="height: 40px;" class="form-control" name="visit-other">
                                </div>
                            </div>


                        </div>
                        <br>
                        <br>
                        <br>
                        <label for="image" class="m-0"> <b>doctorSignature</b></label>
                        <input
                        type="file"
                        name="image"
                        value="doctorSignature"
                        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
                        placeholder="doctorSignature">

                      </div>
<br>
                      <button type="submit" class="bg-green-500 primary shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                        Submit
                    </button>
                    </form>

                    {{-- 25 --}}
                    {{-- banner --}}
                    <div  class="row" >
                        <div class=" banner col-lg-12 col-md-12 " style="border: 1px solid black;">B . HEALTH HISTORY</div>
                    </div>

                      {{-- 26 --}}
                    {{-- banner --}}
                    <div  class="row" >
                        <div class=" banner col-lg-12 col-md-12" style="border: 1px solid black;">CUURENT AND / OR PAST HEALTH PROBLEMS</div>
                    </div>







            </div>

                {{-- <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                    @csrf



                <br>

                <div class="row" style="direction: ltr; text-align:left">
                    <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 child-repeater-table">
                        <table style="direction: ltr; width:100%; display:table" class="table table-bordered " id="table">

                            <thead>

                                <tr style="width: 100%; "  >

                                    <th colspan="1"><img src="{{URL::asset('assets/images/tawazun1.jpg')}}" height="50" width="50" alt=""></th>
                                    <th colspan="1"></th>
                                    <th colspan="1"></th>
                                </tr>
                            </thead>

                            <tbody id="tbody">

                               <tr width="100%">

                                <td colspan="4" class="color"> A .ADMISSION DATA </td>

                               </tr>


                               <tr width="100%">

                                <td width="25%"> Admission Date and Time:
                                <td width="25%"> <input type="text" > </td>
                                <td width="25%"> Admission Diagnosis: </td>
                                <td width="25%"> <input type="text" > </td>

                               </tr>


                            </tbody>


                        </table>
                    </div>
                </div>

             <button type="submit" class="btn btn-primary">{{trans('reports_trans.Add')}}</button>

            </form> --}}

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
<script>

var separator = "/";

$("input[type=text]").keyup(function(e) {
  var textSoFar = $(this).val();
  if (e.keyCode != 191) {
    if (e.keyCode != 8) {
      if (textSoFar.length == 3 || textSoFar.length == 8) {
        $(this).val(textSoFar + separator);
      } else if (e.keyCode == 86 && textSoFar.length == 8) {
        //to handle copy & paste of 8 digit
        $(this).val(
          textSoFar.substr(0, 2) +
            separator +
            textSoFar.substr(2, 2) +
            separator +
            textSoFar.substr(4, 4)
        );
      }
    } else {
      //backspace would skip the slashes and just remove the numbers
      if (textSoFar.length == 5) {
        $(this).val(textSoFar.substring(0, 4));
      } else if (textSoFar.length == 2) {
        $(this).val(textSoFar.substring(0, 1));
      }
    }
  } else {
    //remove slashes to avoid 12//01/2014
    $(this).val(textSoFar.substring(0, textSoFar.length - 1));
  }

  // $("#output").text(new Date(textSoFar));
});


</script>
@endsection
