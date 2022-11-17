<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function index(){
        return view('pagina/index');
    }

    public function login(){
        return view('pagina/login');
    }
}
