<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\Campaign;
use App\Sokmul;
use Validator;
class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laporan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $campaign=Campaign::join('sokmul','sokmul.id','campaign.id_sokmul')
                            ->select('*','campaign.gambar AS gambarnya','campaign.goal AS goalnya','sokmul.nama AS namanya','sokmul.usia AS usianya','sokmul.pekerjaan AS pekerjaannya')
                            ->where('campaign.id',$id)
                            ->first();
        return view('laporan/inputlaporan',compact('id','campaign'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('gambar');
        $nama = rand(). '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('images/laporan/'),$nama);

        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'date'=>'date',
            'description'=>'required'
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        Laporan::create([
            'id_campaign'=>$request->id_campaign,
            'title'=>$request->title,
            'description'=>$request->description,
            'date'=>$request->date,
            'gambar'=>$nama
        ]);
        // dd($request->all());
        return redirect('laporan/tampil');   
    }

    public function list()
    {
        // $donation=Donation::join('campaign','campaign.id','donation.id_campaign')->select('*','donation.status as statusdonation','donation.id as iddonation')->get();
        $laporan=Laporan::all();
        return view('laporan/listlaporan',compact('laporan'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
