<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sms;

class smsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.sms');
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
        $request->validate([
            'pt_name' => 'required',
            'pt_city' => 'required',
            'pt_contact' => 'required',
        ]);
//main code


        $name = $request->get('pt_name');
        $city = $request->get('pt_city');
        $contact = $request->get('pt_contact');
        $apiKey = urlencode(env('TXTLOCAL_API'));
        $numbers = $contact;
        $sender = urlencode("TXTLCL");
        $message = rawurlencode("Congratulations $name. Your Appointment has been booked successfully in $city ! Regards Glamyo");
        $data = array("apikey" => $apiKey, "numbers" => $numbers, "sender" => $sender, "message" => $message);
        $ch = curl_init("https://api.textlocal.in/send/");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        // curl_close($ch);
        // echo $response;

        return redirect('/sms')->with('success', 'sms send.');
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
