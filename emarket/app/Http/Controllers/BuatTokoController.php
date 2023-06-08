<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatTokoController extends Controller
{
    public function buattoko(){
        return view('buattoko1');
    }

    public function next(){
        return view('signup');
    }
}

