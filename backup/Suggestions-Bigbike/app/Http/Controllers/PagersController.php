<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagersController extends Controller
{
    public function index(){
        return view('index');
    }
}
