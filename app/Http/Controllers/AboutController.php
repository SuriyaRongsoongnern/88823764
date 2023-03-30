<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        $address = "บ้านเลขที่ 56 ม.2 ท่าบุญมี, เกาะจันทร์, ชลบุรี 20240";
        $telephone = "092-3314336";
        $email = "surirong1@gmail.com";
        return view('about')
        ->with('address',$address)
        ->with('telephone',$telephone)
        ->with('email',$email)
        ->with('error','404 Not Found')
        ->with('select','บันทึกข้อมูลเรียบร้อย');
    }
}
