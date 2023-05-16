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
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 40px" >ID</th>
            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px" >Test</th>
            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 80x" >Date</th>
            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"style="width: 25px padding-right:60px"  >admin_id</th>
            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style=" padding-left:12px" >patient_id</th>
            <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"    style=" padding-left:12px" >doctor_id</th>
       <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"    style="width: 150px "  >admission_diagnosis</th>
        <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"  style="width: 150px"  >admitting_thhc</th>
        <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 80px" >physician</th>
        <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 360x" >specialty</th>
    </tr>
</thead>
    <tbody>
        @foreach($reports as $report)
        <tr role="row" class="odd">
            <td >{{$report->id}}</td>
            <td>{{$report->test}}</td>
            <td>{{$report->date}}</td>
            {{-- <td style="padding-left: 25px ">{{$report->admin_id}}</td>
            <td style="padding-left: 19px ">{{$report->patient_id}}</td>
            <td style="padding-left: 19px ">{{$report->doctor_id}}</td> --}}

            <td style="padding-right: 19px ">{{$report->admin_id}}</td>
            <td style= >{{$report->patient_id}}</td>
            <td style=>{{$report->doctor_id}}</td>

            <td>{{$report->admission_diagnosis}}</td>
            <td>{{$report->admitting_thhc}}</td>
            <td>{{$report->physician}}</td>
            <td>{{$report->specialty}}</td>
            <td>{{$report->signature}}</td>
        </tr>
        <tr></tr>
        @endforeach
    </tbody>
