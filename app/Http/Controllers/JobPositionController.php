<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobPositionController extends Controller
{
    public function index(){
        return view('layout.master');
    }
}
