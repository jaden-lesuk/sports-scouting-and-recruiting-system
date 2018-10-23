<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('scouts.index');
    }

    public function table(){
        return view('scouts.table');
    }

    public function user(){
        return view('scouts.user');
    }

    public function icons(){
        return view('scouts.icons');
    }
    public function notifications(){
        return view('scouts.notifications');
    }
}
