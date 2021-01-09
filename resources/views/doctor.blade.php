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
          <th align="center"> </th>
          <th align="center">Ime </th>
          <th align="center">Prezime</th>
          <th align="center">Email</th>
          <th align="center">Strucna oblast</th>


        </tr>
      </thead>
    
      <tbody>
      @foreach($doctors as $doctor)
        <tr>
          <td><img src="{{$doctor->galerry}}"></td>
          <td>{{$doctor->name}}</td>
          <td>{{$doctor->surname}}</td>
          <td>{{$doctor->email}}</td>
          <td>{{$doctor->category}}</td>




          
         
        </tr>
        @endforeach
      </tbody>
      
    </table>
    
</body>
</html>
@endsection