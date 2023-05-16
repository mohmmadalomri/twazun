<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Zero config.table start -->
                <div class="card">
                    <div class="card-header">
                        {{-- <h5>User</h5>
                        <span>count total</span> --}}
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <table>
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 40px" >ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px" >Test</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 360x" >Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style=" padding-left:12px" >patient</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"    style=" padding-left:12px" >doctor</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"    style="width: 150px "  >admission_diagnosis</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >admitting_thhc</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px" >physician</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 360x" >specialty</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"style="width: 25px padding-right:10px"  >reason_for_thhc</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style=" padding-left:12px" >info_from</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"    style=" padding-left:12px" >temp</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"    style=" padding-left:12px" >type1</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"    style="width: 150px "  >pulse_rate</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >type2</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px" >blood_pressure</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 360x" >type3</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"style="width: 25px padding-right:10px"  >R_awl</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style=" padding-left:12px" >respiration</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"    style=" padding-left:12px" >oxygen_saturation</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"    style="width: 150px "  >Height</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"    style=" padding-left:12px" >Weight</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >actual_esimated</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >medication</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >food</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >doctor_id</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >created_at</th>
                                            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >updated_at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($reports as $report)
                                            <tr role="row" class="odd">
                                                <td >{{$report->id}}</td>
                                                <td>{{$report->test}}</td>
                                                <td>{{$report->date}}</td>
                                                <td style="padding-left: 19px ">{{$report->patient_id}}</td>
                                                <td style="padding-left: 19px ">{{$report->doctor_id}}</td>
                                                {{-- <td> <img src="..\files\assets\images\{{$report->avatar}}"alt="report-Profile-Image" width= "25%;"></td> --}}
                                                <td>{{$report->admission_diagnosis}}</td>
                                                <td>{{$report->admitting_thhc}}</td>
                                                <td>{{$report->physician}}</td>
                                                <td>{{$report->specialty}}</td>
                                                <td>{{$report->reason_for_thhc}}</td>
                                                <td>{{$report->info_from}}</td>
                                                <td>{{$report->temp}}</td>
                                                <td>{{$report->type1}}</td>
                                                <td>{{$report->pulse_rate}}</td>
                                                <td>{{$report->type2}}</td>
                                                <td>{{$report->blood_pressure}}</td>
                                                <td>{{$report->type3}}</td>
                                                <td>{{$report->R_awl}}</td>
                                                <td>{{$report->respiration}}</td>
                                                <td>{{$report->oxygen_saturation}}</td>
                                                <td>{{$report->weight}}</td>
                                                <td>{{$report->height}}</td>
                                                <td>{{$report->actual_esimated}}</td>
                                                <td>{{$report->medication}}</td>
                                                <td>{{$report->food}}</td>
                                                <td>{{$report->signed}}</td>
                                                <td>{{$report->signedby}}</td>
                                                <td>{{$report->Ptients_Copy_given_to}}</td>
                                                <td>{{$report->ORIENTATION}}</td>
                                                <td>{{$report->created_at}}</td>
                                                <td>{{$report->updated_at}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




