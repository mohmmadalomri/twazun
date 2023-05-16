<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<table >
    <thead>
        <tr>
        <th>ID</th>
        <th>Test</th>
        <th>date</th>
        <th>admin_id</th>
        <th>patient_id</th>
        <th>doctor_id</th>
        <th>y</th>
        <th>z</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reports as $report )
            <tr>
                <td data-column="Fisrt Name" >{{$report->id}}</td>
                <td>{{$report->test}}</td>
                <td>{{$report->date}}</td>
                <td>{{$report->admin_id}}</td>
                <td>{{$report->patient_id}}</td>
                <td>{{$report->doctor_id}}</td>
                {{-- <td> <img src="..\files\assets\images\{{$report->avatar}}"alt="report-Profile-Image" width= "25%;"></td> --}}
                <td>{{$report->created_at}}</td>
                <td>{{$report->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</html>
