<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        //echo '<a href="'.route('admin.index').'">Admin Sayfası</a>';
        return view('index');
    }
}
