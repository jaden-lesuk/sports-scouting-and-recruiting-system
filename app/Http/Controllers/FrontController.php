<?php

namespace App\Http\Controllers;

use App\Players;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        return view('scouts.index');
    }

    public function table(){
        $players= Players::all();
        return view('scouts.table',compact('players'));
    }

    public function user(){
        return view('scouts.user');
    }
    public function edit(){
        $players= Players::all();
        return view('scouts.edit');
    }

    public function icons(){
        return view('scouts.icons');
    }
    public function notifications(){
        return view('scouts.notifications');
    }
}
