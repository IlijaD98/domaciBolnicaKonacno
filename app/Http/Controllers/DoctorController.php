<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;


class DoctorController extends Controller
{
    //
    public function index(){
    
        $data=Doctor::all();
        return view('doctor',['doctors'=>$data]);
    

}


   
}
