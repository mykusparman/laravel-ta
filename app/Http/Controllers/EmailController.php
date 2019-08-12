<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function sendEmail(Request $request)
    {
        //ambil data
        $email= $request->email;
        $data = array(
            'name' => $request->name,
            'email_body' => $request->email_body
        );

        //kirim email
        Mail::send('email.email',$data, function($mail) use($email){
            $mail->to($email,'no-reply')
                ->subject('Penggunaan Dana');
            $mail->from('yusufm267@gmail.com','Testing');
        });

        if (Mail::failures()) {
            return "Gagal Mengirim Email";
        }
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('email.sendemail');
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
