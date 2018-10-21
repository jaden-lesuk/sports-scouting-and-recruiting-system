<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function table(){
        return view('admin.table');
    }

    public function user(){
        return view('admin.user');
    }

    public function icons(){
        return view('admin.icons');
    }
    public function notifications(){
        return view('admin.notifications');
    }
}
