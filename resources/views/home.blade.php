@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<table data-toggle="table">
      <thead>
        <tr>
          <th>Pacijent id</th>
          <th>Doctor id</th>
          <th>Dijagnoza</th>
        </tr>
      </thead>
      <tbody>
      @foreach($accounts as $account)
        <tr>
          <td>{{$account->patient_id}}</td>
          <td>{{$account->doctor_id}}</td>
          <td>{{$account->diagnosis_code}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    
</body>
</html>
@endsection