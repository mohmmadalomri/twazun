<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-xs-18 col-sm-18 col-sm-18 col-md-18"><div class="dataTables_length" id="simpletable_length"> <select name="simpletable_length" aria-controls="simpletable" class="form-control input-sm"></select> </div></div><div class="col-xs-12 col-sm-12 col-md-6"><div id="simpletable_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-xs-12 col-sm-12"><table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
    {{-- <thead> --}}
        <tr role="row">



    <h2> Logo Center:</h2>
    <?php

$type = pathinfo('images/signatures/{{$report->signature}}',PATHINFO_EXTENSION);
$data = file_get_contents('images/signatures/tawazun1.jpg');
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

?>
<img src="<?=$base64?>">
        </tr>

        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"  >Report Name</th>

                <td >Initial Patient Assessment
                   Nursing(Admission)</td>

            </tr>
            <hr>

            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"  >Created-At</th>

                    <td >{{$report->created_at}}</td>

                </tr>
                <hr>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >Doctor-name</th>

                <td >{{$report->doctor_name}}</td>

            </tr>
            <hr>

            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >Patient-name</th>

                    <td >{{$report->patient_name}}</td>

                </tr>

            <hr>
            <tr role="row">
            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px" >Admission_Date</th>
            <td>{{$report->Admission_Date}}</td>

        </tr>
        <hr>

        <tr role="row">
       <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"    style="width: 150px "  >Admission_Diagnosis</th>
      <td>{{$report->Admission_Diagnosis}}</td>
    </tr>
    <hr>
    <tr role="row">
        <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Admitting_Staff</th>
      <td> {{$report->Admitting_Staff}}</td>
    </tr>
    <hr>
    <tr role="row">
        <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px" >physician</th>
        <td>{{$report->Physician}}</td>
    </tr>
    <hr>
    <tr role="row">
        <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 360x" >specialty</th>

        <td> {{$report->Specialty}}</td>
    </tr>
    <hr>
    <tr role="row">
        <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"style="width: 25px padding-right:10px"  >reason_for_thhc</th>
        <td> {{$report->Reason_for_THHC}}</td>
    </tr>
    <hr>
    <tr role="row">
        <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style=" padding-left:12px" >info_from</th>
        <td> {{$report->Information_from}}</td>
    </tr>
    <hr>
    <tr role="row">
        <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"    style=" padding-left:12px" >temp</th>
        <td> {{$report->Temp}}</td>
    </tr>
    <hr>
    <tr role="row">
        <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"    style=" padding-left:12px" >Oral</th>
        <td> {{$report->Oral}}</td>
    </tr>
    <hr>
    <tr role="row">
   <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"    style="width: 150px "  >Ear</th>

   <td> {{$report->Ear}}</td>
</tr>
<hr>
<tr role="row">
    <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Axillary</th>
    <td> {{$report->Axillary}}</td>
</tr>
<hr>
<tr role="row">
    <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px" >Rectal</th>
    <td> {{$report->Rectal}}</td>
</tr>
<hr>
<tr role="row">
    <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 360x" >Regular</th>
    <td> {{$report->Regular}}</td>
</tr>
<hr>
<tr role="row">
    <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"style="width: 25px padding-right:10px"  >irregular</th>
    <td> {{$report->irregular}}</td>
</tr>
<hr>
<tr role="row">
    <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style=" padding-left:12px" >Blood_Pressure</th>
    <td> {{$report->Blood_Pressure}}</td>
</tr>
<hr>
<tr role="row">
    <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"    style=" padding-left:12px" >Pulse_Rate</th>
    <td> {{$report->Pulse_Rate}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"    style="width: 150px "  >Standing</th>
<td> {{$report->Standing}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"    style=" padding-left:12px" >Sitting</th>
<td> {{$report->Sitting}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Lying</th>
   <td> {{$report->Lying}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >R_Arm</th>
<td> {{$report->R_Arm}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >R_Wrist</th>
<td> {{$report->R_Wrist}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >R_Leg</th>
<td> {{$report->R_Leg}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >R_arm</th>
<td> {{$report->R_arm1}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >R_wrist</th>
<td> {{$report->R_wrist1}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >R_leg</th>

<td> {{$report->R_leg1}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Respiration</th>
<td> {{$report->Respiration}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Oxygen_Saturation</th>
<td> {{$report->Oxygen_Saturation}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Height</th>
<td> {{$report->Height}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Weight</th>
<td> {{$report->Weight}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Actual</th>
<td> {{$report->Actual}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Estimated</th>
<td> {{$report->Estimated}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >ORIENTATION</th>
<td> {{$report->ORIENTATION}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Pain</th>
<td> {{$report->Pain}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >ALLERGIES</th>
<td> {{$report->ALLERGIES}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Medication</th>
<td> {{$report->Medication}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >reaction_medication</th>
<td> {{$report->reaction_medication}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Food</th>
<td> {{$report->Food}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >reaction_type_food</th>
<td> {{$report->reaction_type_food}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >reaction_type_medication</th>
<td> {{$report->reaction_type_medication}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >reaction_food</th>
<td> {{$report->reaction_food}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >signed</th>
<td> {{$report->signed}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Respiration</th>
<td> {{$report->Respiration}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >copy_patient</th>
<td> {{$report->copy_patient}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >THHC_Working_Hours</th>
<td> {{$report->THHC_Working_Hours}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >THHC_Discharge_plan</th>
<td> {{$report->THHC_Discharge_plan}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >THHC_disciplines</th>
<td> {{$report->THHC_disciplines}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Service_Charges</th>
<td> {{$report->Service_Charges}}</td>
</tr>

<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Emergency_Telephone_Numbers</th>
<td> {{$report->Emergency_Telephone_Numbers}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Visit_Frequency</th>
<td> {{$report->Visit_Frequency}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >signedby</th>
<td> {{$report->signedby}}</td>
</tr>
<hr>
<tr role="row">
<th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >Emergency_Plan</th>
<td> {{$report->Emergency_Plan}}</td>
</tr>
<hr>
<tr role="row">
    <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"  >Created-At</th>

        <td >{{$report->created_at}}</td>

    </tr>

<hr>

<tr role="row">
    <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" > Doctor Make The Report</th>

        <td style="font-size: 25px">{{$report->doctor_name}}</td>

    </tr>
<tr role="row">
    </tr>


            {{-- <img src="images/signatures/{{$report->signature}} ">  print image in imgtag--}}

