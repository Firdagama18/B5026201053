<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IkanController extends Controller
{
    public function index()
    {
     // mengambil data dari table pegawai
    //  $pegawai = DB::table('pegawai')->get();
    $ikan = DB::table('ikan')->paginate(3) ;

     // mengirim data sandal ke view index
     return view('ikan.index',['ikan' => $ikan]);

    }
    // method untuk menampilkan view form tambah sandal
    public function tambah()
    {

 // memanggil view tambah
 return view('ikan.tambah');

    }
    // method untuk insert data ke table sandal
    public function store(Request $request)
    {
 // insert data ke table sandal
 DB::table('ikan')->insert([
  'kodeikan' => $request->kodeikan,
  'namaikan' => $request->namaikan,
  'jumlahikan' => $request->jumlah,
  'tersedia' => $request->tersedia
 ]);
 // alihkan halaman ke halaman sandal
 return redirect('/ikan');

    }
    // method untuk edit data sandal
    public function edit($id)
    {
 // mengambil data sandal berdasarkan id yang dipilih
 $ikan = DB::table('ikan')->where('kodeikan',$id)->get();
 // passing data sandal yang didapat ke view edit.blade.php
 return view('ikan.edit',['ikan' => $ikan]);

    }
    // update data sandal
    public function update(Request $request)
    {
 // update data sandal
 DB::table('ikan')->where('kodeikan',$request->id)->update([
    'kodeikan' => $request->kodeikan,
    'namaikan' => $request->namaikan,
    'jumlahikan' => $request->jumlah,
    'tersedia' => $request->tersedia
 ]);
 // alihkan halaman ke halaman sandal
 return redirect('/ikan');
    }
    // method untuk hapus data sandal
    public function hapus($id)
    {
 // menghapus data sandal berdasarkan id yang dipilih
 DB::table('ikan')->where('kodeikan',$id)->delete();

 // alihkan halaman ke halaman sandal
 return redirect('/ikan');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table sandal sesuai pencarian data
		$ikan = DB::table('ikan')
		->where('namaikan','like',"%".$cari."%" )
		->paginate();

    		// mengirim data sandal ke view index
		return view('ikan.index',['ikan' => $ikan]);

	}
    public function detail($id){
        $ikan = DB::table('ikan')->where('kodeikan',$id)->first();
        return view('ikan.detail', compact('ikan'));
        }
}
