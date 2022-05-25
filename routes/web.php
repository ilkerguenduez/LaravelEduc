<?php

use App\Http\Controllers\admin\indexController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

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


/*Route::get('/admin',[indexController::class,'panel']);
Route::get('/',[indexController::class,'anasayfa']);*/

Route::group(['namespace'=>'admin','prefix'=>'admin'],function (){
     Route::get('/',[indexController::class,'index']);
     Route::group(['namespace'=>'kullanici','prefix'=>'kullanici'],function (){
         Route::get('/ekle',[App\Http\Controllers\admin\kullanici\indexController::class,'ekle']);
     });

});

Route::group(['namespace'=>'front'],function (){
   Route::get('/',[\App\Http\Controllers\front\indexController::class,'index']);
   //Route::group(['namespace'=>'blogvb']);
});
