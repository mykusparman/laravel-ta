<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Sokmul;
use App\Model\Donation;
use Auth;
use Validator;
use Redirect;
use Carbon;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campaign= Campaign::all();

        $mytime = Carbon\Carbon::now();
        $date_now=$mytime->format('Y-m-d');

        foreach ($campaign as $item) {
            if ($item->expired < $date_now) {
                $campaign_update=Campaign::find($item->id);
                $campaign_update->status='close';
                $campaign_update->save();
            }
        }

        return view('campaign/listcampaign',compact('campaign'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $sokmul=Sokmul::find($id);
        return view('campaign/inputcampaign',compact('sokmul'));
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
        $foto->move(public_path('images/campaign/'),$nama);

        $validator=Validator::make($request->all(),[
            'title'=>'required|max:50',
            'date'=>'date',
            'expired'=>'date|after:date',
            'description'=>'required'
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        Campaign::create([
            'id_sokmul'=>$request->id_sokmul,
            'title'=>$request->title,
            'description'=>$request->description,
            'goal'=>$request->goal,
            'date'=>$request->date,
            'expired'=>$request->expired,
            'gambar'=>$nama
        ]);
        $update = Sokmul::find($request->id_sokmul)->update(['status'=>'1']);
        return redirect('campaign/tampil');
    }

    public function choose()
    {
       $sokmul= Sokmul::all();
        // dd($sokmul);
        return view('/sokmul/choosesokmul',compact('sokmul'));
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
        $campaign=Campaign::find($id);
        return view('campaign/update',compact('campaign'));
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
        // dd($request->all());
        $foto = $request->file('gambar');
        $nama = rand() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('images/campaign'), $nama);

        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'date'=>'date',
            'expired'=>'date|after:date',
            'description'=>'required'
        ]);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        $data=[
            'title'=>$request->title,
            'description'=>$request->description,
            'goal'=>$request->goal,
            'expired'=>$request->expired,
            'gambar'=>$nama
        ];
        
        $campaign = Campaign::find($id);
        $campaign->update(
            $data
        );
        return redirect('campaign/tampil');
    }

    public function update_status($id)
    {
        $campaign=Campaign::find($id);
        $campaign->status='close';
        $campaign->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign=Campaign::find($id);
        $campaign->delete();
        return back();
    }

    public function detail($id)
    {
        $campaign=Campaign::join('sokmul','sokmul.id','campaign.id_sokmul')
                            ->select('*','campaign.gambar AS gambarnya','campaign.goal AS goalnya')
                            ->where('campaign.id',$id)
                            ->first();
        $donation=Donation::where('id_sokmul',$campaign->id_sokmul)
                            ->where('status','success')
                            ->take(5)
                            ->latest()
                            ->get();
        $total=Donation::where('id_campaign',$id)
                        ->where('status','success')
                        ->get();
        $persen = ($total->sum('amount')/$campaign->goal) * 100; 
        return view('campaign/detail',compact('campaign','donation','total','persen'));
    }

    public function tampil_donasi()
    {
        $donation=Donation::join('users','users.id','donation.id_user')->where('donation.id_user',Auth::user()->id)->get();
        return view('donatur/detail',compact('donation'));
    }
}
