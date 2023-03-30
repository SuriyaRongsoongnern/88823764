<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function show($test = ""){
        $datas['name'] = "this is  my controller : " . $test;
        
        return view('my_view', $datas);
    }
}
