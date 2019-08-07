<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Member extends Controller
{
    public function coba($nama)
    {
    	return $nama;
    }

    public function formulir()
    {
    	return view('member/formulir');
    }

    public function proses(Request $request)
    {
    	$nama=$request->input('nama');
    	$alamat=$request->input('alamat');
    	return "Nama: ".$nama.", Alamat: ".$alamat;
    }
}
