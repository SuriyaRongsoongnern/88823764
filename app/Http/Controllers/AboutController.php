<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $ad = "บ้านเลขที่ 56 ม.2 ท่าบุญมี, เกาะจันทร์, ชลบุรี 20240";
        return view('about',['address'=>$ad]);
    }
}
