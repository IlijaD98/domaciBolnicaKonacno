<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Doctor;

class HomeController extends Controller
{
    //
    function index(){
        $data=Account::all();
        return view('home',['accounts'=>$data]);
    }

    function detail($id){
    
        $data= Doctor::find($id);
        return view('detail',['doctor'=>$data]);
    }
}
