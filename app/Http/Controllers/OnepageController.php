<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnepageController extends Controller
{
    public function index(){
        return view('onePage');
    }
}
