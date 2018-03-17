<?php

namespace App\Http\Controllers;
use App\Barang;
use DB;

class HomeController extends Controller
{
   public function getHome()
   {
//   	$a = Barang::all();
   	$a=DB::table('barang')->get();
   	dd($a);
   	return view('welcome');

    }
}
