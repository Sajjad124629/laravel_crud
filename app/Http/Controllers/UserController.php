<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
   public  function index(){

        $res = Http::withOptions(['verify' => false])->get("https://reqres.in/api/users?page=1");
         return view('clint',['getonlinedata'=>$res['data']]);

    }
}
