<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenemeController extends Controller
{
    public function index($name=null,$surname=null)
    {
        //echo "Deneme Sayfasi controller index part $name $surname";
        echo $name." ".$surname;
    }
}
