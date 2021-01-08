<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class HomeController extends Controller
{
    //
    function index(){
        $data=Account::all();
        return view('home',['accounts'=>$data]);
    }
}
