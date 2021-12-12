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


     return view('ikan.index',['ikan' => $ikan]);

    }

    public function tambah()
    {


 return view('ikan.tambah');

    }

    public function store(Request $request)
    {

 DB::table('ikan')->insert([
  'namaikan' => $request->namaikan,
  'jumlahikan' => $request->jumlah,
  'tersedia' => $request->tersedia
 ]);

 return redirect('/ikan');

    }

    public function edit($id)
    {

 $ikan = DB::table('ikan')->where('kodeikan',$id)->get();

 return view('ikan.edit',['ikan' => $ikan]);

    }

    public function update(Request $request)
    {

 DB::table('ikan')->where('kodeikan',$request->id)->update([
    'namaikan' => $request->namaikan,
    'jumlahikan' => $request->jumlah,
    'tersedia' => $request->tersedia
 ]);

 return redirect('/ikan');
    }

    public function hapus($id)
    {

 DB::table('ikan')->where('kodeikan',$id)->delete();


 return redirect('/ikan');
    }

    public function cari(Request $request)
	{

		$cari = $request->cari;


		$ikan = DB::table('ikan')
		->where('namaikan','like',"%".$cari."%" )
		->paginate();


		return view('ikan.index',['ikan' => $ikan]);

	}
    public function detail($id){
        $ikan = DB::table('ikan')->where('kodeikan',$id)->first();
        return view('ikan.detail', compact('ikan'));
        }
}
