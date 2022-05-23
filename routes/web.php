<?php

use App\Http\Controllers\DenemeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/laravel',function(){
    return "Laravel Sayfasi";
});

//Get ve Post birlikte yakalama
Route::match(['get','post'],'/birles',function (){
   return "Ana";
});

//Parametre Alma
/*Route::get('{name?}',function ($name){
    //return $name;
    echo $name;
});
Route::get('/{id}',function ($id){
    return $id;
});*/

Route::get('/deneme',[DenemeController::class,'index']);
Route::get('/deneme/{name?}',[DenemeController::class,'index']);
Route::get('/deneme/{name?}/{surname?}',[DenemeController::class,'index']);

