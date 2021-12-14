<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $nilaikuliah = DB::table('nilaikuliah')->paginate(5);

        // mengirim data pegawai ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$nilaikuliah = DB::table('nilaikuliah')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]);

	}
    public function tambah()
    {

        // memanggil view tambah
        return view('nilaikuliah.tambah');
    }
    public function store(Request $request)
{
    if($request->NilaiAngka <= 40){
        $nilaihuruf = 'D';
    }
    else if($request->NilaiAngka >= 41 || $request->nilaiangka <= 60){
        $nilaihuruf = 'C';
    }
    else if($request->NilaiAngka >= 61 || $request->nilaiangka <= 80){
        $nilaihuruf = 'B';
    }
    else if($request->NilaiAngka >= 81){
        $nilaihuruf = 'A';
    }
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
        'ID' => $request->ID,
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS,
	]);
	// alihkan halaman ke halaman pegawai
	return view('/pegawai');

}
public function view($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$nilaikuliah = DB::table('nilaikuliah')->where('nilaikuliah_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('nilaikuliah.detail',['nilaikuliah' => $nilaikuliah]);

}
public function update(Request $request)
{
	// update data pegawai
	DB::table('nilaikuliah')->where('nilaikuliah_id',$request->id)->update([
        'ID' => $request->ID,
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/nilaikuliah');
}
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('nilaikuliah')->where('nilaikuliah_id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/nilaikuliah');
}
}
