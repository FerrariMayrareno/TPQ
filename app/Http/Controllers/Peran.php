<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Peran extends Controller
{
    public function index(){
        $user = ModelPeran::all();
        return view('peran',['peran'=>$user]);
    }
}
