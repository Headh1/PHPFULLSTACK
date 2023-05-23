<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function index() {
        $arr = [
            'name' => '김미현'
            ,'gender' => 'F'
            ,'birth' => '19980809'
            ,'addr' => '구미'
            ,'tel' => '65854076'
        ];
        
        $arr2 =[];

        return view('blade')->with('data',$arr)->with('data2',$arr2);
    }
}
