<?php

namespace App\Http\Controllers;

use App\Model\ModelPengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Pengurus extends Controller
{
    public function index(){
        $pengurus = ModelPengurus::all();
        return view('pengurus',['pengurus'=>$pengurus]);
    }
}
