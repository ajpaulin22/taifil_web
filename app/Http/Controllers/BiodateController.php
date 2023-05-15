<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodateController extends Controller
{
    public function index(Request $request){
        return view('pages.bioData',['biodata'=>$request->data]);
    }
}
