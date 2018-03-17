<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function getNama($n)
   {
   //	$a = Barang::all();
 //  	$a=DB::table('barang')->get();
//   	dd($a);
   	$b = Barang::where('nama',$n)->first();
   	return 'Nama Barang Adalah : '.$b->nama;

    }

 public function getAlamat()
   {
   //	$a = Barang::all();
 //  	$a=DB::table('barang')->get();
//   	dd($a);
   	return 'Bandung';

    }
}
