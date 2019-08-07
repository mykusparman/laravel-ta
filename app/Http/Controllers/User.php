<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// Use App\User;

class User extends Controller
{

    public function tampil()
    {
    	//mengambil data sesuai nama tabel
    	$user = DB::table('tb_users')->get();

    	//mengirim data ke view
    	return view('user/tampil',['user' => $user]);
    }

    public function tambah()
    {
    	return view('user/tambah');
    }

    public function simpan(Request $request)
    {
    	// $user = DB::table('tb_users')->insert([
    	// 	'username' =>$request->username,
    	// 	'password' =>$request->password,
    	// 	'nama' =>$request->nama,
    	// 	'alamat' =>$request->alamat,
    	// 	'no_hp' =>$request->no_hp,
    	// 	'email' =>$request->email
    	// ]);
    	dd($request->all());
    	User::create($request->all());
    	return redirect('user/tampil');
    }

    public function edit($id)
    {
    	//mengambil data berdasarkan id
    	$user = DB::table('tb_users')->where('id_user',$id)->get();
    	return view('/user/update',compact('user'));
    }

    public function update(Request $request)
    {
    	$user = DB::table('tb_users')->where('id_user',$request->id)->update([
    		'username' =>$request->username,
    		'password' =>$request->password,
    		'nama' =>$request->nama,
    		'alamat' =>$request->alamat,
    		'no_hp' =>$request->no_hp,
    		'email' =>$request->email
    	]);

    	User::findOrFail($id)->update();

    	return redirect('/user/tampil');
    }

    public function delete($id)
    {
    	$user = DB::table('tb_users')->where('id_user',$id)->delete();
    	User::destroy($id);

    	return redirect('/user/tampil');
    }
}
