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
<h2 class="naslovPacijent">Lista pacijenata</h2>
<br>
<br>
<table data-toggle="table" class="table">
      <thead>
        <tr>
          <th align="center">ID </th>
          <th align="center">Ime </th>
          <th align="center">Prezime</th>
        </tr>
      </thead>
    
      <tbody>
      @foreach($patients as $patient)
        <tr>
          <td>{{$patient->id}}</td>
          <td>{{$patient->first_name}}</td>
          <td>{{$patient->last_name}}</td>
          
         
        </tr>
        @endforeach
      </tbody>
      
    </table>
    
</body>
</html>
@endsection