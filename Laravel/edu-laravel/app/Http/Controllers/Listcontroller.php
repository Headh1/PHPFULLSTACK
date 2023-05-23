<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Listcontroller extends Controller
{
    function index() {
        return view('list');
    }
}
