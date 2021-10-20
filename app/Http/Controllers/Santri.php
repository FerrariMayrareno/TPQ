<?php

namespace App\Http\Controllers;

use App\Models\ModelSantri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\COntrollers\Controller;

class Santri extends Controller
{
    public function index()
	{
		$santri = ModelSantri::all();
		return view('staff.santri.santri',['santri' => $santri]);
	}
 
	public function tambah()
	{
		return view('tambahsantri');
	}
 
	public function store(Request $request)
	{
		DB::table('santri')->insert([
			'IDSANTRI' => $request->idsantri,
			'NAMASANTRI' => $request->namasantri,
			'GENDER' => $request->gender,
			'TGLLAHIR' => $request->tgllahir,
            'KOTALAHIR' => $request->kotalahir,
            'NAMAORTU' => $request->namaortu,
            'ALAMATORTU' => $request->alamatortu,
            'HP' => $request->hp,
            'EMAIL' => $request->email,
            'PASSWORD' => $request->password,
            'TANGGALMASUK' => $request->tglmasuk,
            'AKTIF' => $request->aktif
		]);
		return redirect('/pegawai');
	}
 
	public function edit($id)
	{
		$santri = DB::table('santri')->where('IDSANTRI',$id)->get();
		return view('editsantri',['santri' => $santri]);
	}
 
	public function update(Request $request)
	{
		DB::table('santri')->where('IDSANTRI',$request->id)->update([
			'IDSANTRI' => $request->idsantri,
			'NAMASANTRI' => $request->namasantri,
			'GENDER' => $request->gender,
			'TGLLAHIR' => $request->tgllahir,
            'KOTALAHIR' => $request->kotalahir,
            'NAMAORTU' => $request->namaortu,
            'ALAMATORTU' => $request->alamatortu,
            'HP' => $request->hp,
            'EMAIL' => $request->email,
            'PASSWORD' => $request->password,
            'TANGGALMASUK' => $request->tglmasuk,
            'AKTIF' => $request->aktif
		]);
		return redirect('/pegawai');
	}
 
	public function hapus($id)
	{
		DB::table('santri')->where('IDSANTRI',$id)->delete();
		return redirect('/santri');
	}
}
