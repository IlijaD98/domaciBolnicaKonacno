@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
           <img class="detail-img" src="{{$doctor['galerry']}}"> 
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <h2>{{$doctor['name']}} {{$doctor['surname']}}</h2>
            <h3>Email: {{$doctor['email']}} $</h3>
            <h4>Oblast: {{$doctor['category']}}</h4>
            <br><br>
            
            <br><br>
            
            <br><br>
        </div>
    </div>

    
</div>
@endsection