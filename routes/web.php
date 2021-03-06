<?php

use App\Http\Controllers\admin\indexController;
use App\Http\Controllers\DenemeController;
use App\Models\Kitap;
use App\Models\Yazarlar;
use Illuminate\Support\Facades\DB;
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

Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.'],function (){
     Route::get('/',[indexController::class,'index'])->name('index');
     Route::group(['namespace'=>'kullanici','prefix'=>'kullanici','as'=>'kullanici.'],function (){
         Route::get('/ekle',[App\Http\Controllers\admin\kullanici\indexController::class,'ekle'])->name('ekle');
     });

});

Route::group(['namespace'=>'front'],function (){
   Route::get('/',[\App\Http\Controllers\front\indexController::class,'index'])->name('index');
   //Route::group(['namespace'=>'blogvb']);
});

Route::get('/users',function (){

    //echo "Burası Kullanıcı Listesi";
//    $users= DB::table('users')->get();
    //dd($users);
//    foreach ($users as $key => $value){
//        echo $value->id." => ".$value->name."<br/>";
//    }

//    $users=DB::table('users')->first();
//    echo $users->name;

//    $users=DB::table('users')->where('id','=','1')->get();
//    dd($users);

//    $users=DB::table('users')->pluck('name','surname');
//    dd($users);

//    DB::table('users')->orderBy('id')->chunk(3,function ($users){
//        dd($users);
//    });



});

Route::get('/kitaplar',function (){
//    $x=\App\Models\Kitap::all();
//    dd($x);

//    $data= Kitap::all();
//    foreach ($data as $key=> $value){
//        echo $value['isim']."<br/>";
//    }

//    $data=Kitap::where('yazarid','=',1)->get();
//    dd($data);

//    $x=Kitap::orderBy('isim','desc')->get();
//
//    foreach ($x as $key=>$value) {
//        echo $value['isim']."<br/>";
//    }

//    $kitap=new Kitap();
//    $kitap->isim="Harry Potter - Ölüm Yadigarlari";
//    $kitap->yazarid="1";
//    $kitap->save();

//    $yazar=new Yazarlar();
//    $yazar->name="Ben";
//    $yazar->save();


    //Yazarlar::create(['name'=>'Ben3']);

//    $yazar=  Yazarlar::find(2);
//    $yazar->id=321;
//    $yazar->save();

    //Yazarlar::where('id','=',3)->update(['id'=>456]);

//    $yazar = Yazarlar::find(456);
//    $yazar->delete();

//    $x= Yazarlar::where('id','=',321)->delete();
//    if ($x){
//        echo 'veri silindi';
//
//    }
//    else{
//        echo 'veri silinemedi';
//    }


    //firstOrCreate
    //FirstOrNew

//    $yazar = Yazarlar::firstOrCreate(['name'=>'Ben6'],['id'=>15]);
//    dd($yazar);

});
