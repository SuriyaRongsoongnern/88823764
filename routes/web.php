<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//การสร้าง Route
Route::get('/about/12345',[AboutController::class,'index'])->name('about');
Route::get('/index',[IndexController::class,'index']);

Route::get('/my-route/{input_data?}', function ($input_data="") {

    $datas['name'] = $input_data;

    return view('my_view', $datas);
});

Route::get('/my-controller/{input?}', [MyController::class, 'show']);

Route::post('/my-controller', function(){
    return "POST";
});