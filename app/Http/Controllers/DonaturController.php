<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Campaign;
use App\Laporan;
use App\Sokmul;
use App\Model\Donation;
use DB;
use Carbon;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $campaign=Campaign::inRandomOrder()->take(6)->where('status','open')->get();
        $mytime = Carbon\Carbon::now();
        $date_now=$mytime->format('Y-m-d');

        $campaign=Campaign::join('sokmul','sokmul.id','campaign.id_sokmul')
                            ->select('*','campaign.id as idnya','campaign.gambar AS gambarnya','campaign.goal AS goalnya',                     
                                DB::raw("(SELECT SUM(donation.amount) FROM donation
                                WHERE donation.id_campaign = campaign.id
                                GROUP BY donation.id_campaign) as total_amount")
                            )
                            // ->inRandomOrder()
                            ->take(3)
                            ->where('campaign.status','open')
                            ->where('expired','>',$date_now)
                            ->orderBy("campaign.id", "DESC")
                            ->get();

        $laporan=Laporan::join('campaign','campaign.id','laporan.id_campaign')
                            ->join('sokmul','sokmul.id','campaign.id_sokmul')
                            ->select('*','sokmul.nama AS namanya','laporan.gambar AS gambarnya','laporan.id AS idnya','laporan.title AS title_laporan','laporan.description AS description_laporan')
                            ->take(3)
                            ->orderBy("laporan.id", "DESC")
                            ->get();
        // $laporan=Laporan::all();

        $c_total=Campaign::all();
        $d_total=Donation::where('status','success')
                            ->sum('amount');
                            

        return view('user.index',compact('campaign','laporan','c_total','d_total'));
    }

    public function dashboard()
    {
        $donation=Donation::where('id_user',Auth::user()->id)->get();
        return view('donatur.dashboard',compact('donation'));
    }

    public function listdonation()
    {
        $donation=Donation::where('id_user',Auth::user()->id)->get();
        return view('donatur.listdonation',compact('donation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
