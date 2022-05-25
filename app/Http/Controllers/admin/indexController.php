<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        echo "Admin Paneli";
        //echo '<a href="'.route('admin.kullanici.ekle').'">Kullanıcı ekleme Sayfası</a>';
        return view('admin.index');
    }
    /*public function anasayfa(){
        echo "Anasayfa";
    }*/
}
