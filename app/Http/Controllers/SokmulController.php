<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sokmul;

class SokmulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sokmul= Sokmul::all();
        // dd($sokmul);
        return view('/sokmul/listsokmul',compact('sokmul'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sokmul.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'usia'=>'numeric'
        ]);

        $foto = $request->file('gambar');
        $nama = rand() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('images/sokmul'), $nama);

        Sokmul::create([
            'nama'=>$request->nama,
            'usia'=>$request->usia,
            'alamat'=>$request->alamat,
            'pekerjaan'=>$request->pekerjaan,
            'goal'=>$request->goal,
            'catatan'=>$request->catatan,
            'gambar'=>$nama
        ]);

        return redirect('sokmul/tampil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sokmul = Sokmul::find($id);
        return view('/sokmul/update',compact('sokmul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'nama'=>'required',
            'usia'=>'numeric'
        ]);

        $foto = $request->file('gambar');
        $nama = rand() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('images/sokmul'), $nama);

        $data=[
            'nama'=>$request->nama,
            'usia'=>$request->usia,
            'alamat'=>$request->alamat,
            'pekerjaan'=>$request->pekerjaan,
            'gambar'=>$nama
        ];
        
        $sokmul = Sokmul::find($id);
        $sokmul->update(
            $data
        );

        return redirect('sokmul/tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sokmul = Sokmul::find($id);
        $sokmul->delete();
        return back();
    }
}
