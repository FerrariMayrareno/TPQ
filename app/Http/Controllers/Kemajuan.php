<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Kemajuan extends Controller
{
    public function index(){
        $santri = DB::table('kemajuan')->get();
        return view('kemajuansantri',['kemajuan'=>$santri]);
    }
}
