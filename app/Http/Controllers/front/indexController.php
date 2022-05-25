<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        //echo '<a href="'.route('admin.index').'">Admin Sayfası</a>';
        $data =['name'=>'Ilker','surname'=>'Guenduez','info'=>['age'=>'21','job'=>'Software Developer']];
        return view('index',$data);

    }
}
