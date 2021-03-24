<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function index()
    {
        $collection= Http::get("https://reqres.in/api/users?page=1");
        return view('users',['collection'=>$collection['data']]);
    }
    function index2()
    {
        $collection= Http::get("https://reqres.in/api/users?page=2");
        return view('users2',['collection'=>$collection['data']]);
    }
    function deto()
    {
        $posts= Http::get("https://reqres.in/api/users/2");
        return view('details',['posts'=>$posts['data']]);
    }

}
