<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    function login(Request $req){
        $user= Admin::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "Uneli ste pogresne podatke";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
     }

     function register(Request $req){
         
        $user=new Admin;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect("/login");



     }
}
