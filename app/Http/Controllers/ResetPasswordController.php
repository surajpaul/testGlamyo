<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ResetPasswordController extends Controller
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
            'phone'=> 'required|integer',
        ]);
        $digits = 6;
        $otp = rand(pow(10, $digits-1), pow(10, $digits)-1);

        // send otp
        $contact = $request->get('phone');
        $apiKey = urlencode(env('TXTLOCAL_API'));
        $numbers = $contact;
        $sender = urlencode("TXTLCL");
        $message = rawurlencode("$otp is your OTP for Glamyo Login! \nRegards.\nGlamyo Health");
        $data = array("apikey" => $apiKey, "numbers" => $numbers, "sender" => $sender, "message" => $message);
        $ch = curl_init("https://api.textlocal.in/send/");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        $findUser = User::where('phone', $contact)->first();
        
        if (isset($findUser)) {
            $userId = $findUser->id;

            $form_data = array(
                'otp' => $otp,
            );
            User::whereId($userId)->update($form_data);
            return view('frontend.otp', compact('contact','userId'));
        }
        else{
            return redirect('/password/reset')->with('failure', 'Phone Number not present.');
        }
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
    public function update(Request $request, $userId)
    {
        $phone = $request->phone;
        $otp = $request->otp;
        $password = $request->password;

        $dbOtp = User::where('id', $userId)->first();
        $userOtp = $dbOtp->otp;

        if ($otp == $userOtp) {
            $form_data = array(
                'password' => bcrypt($request->password)
            );
            User::whereId($userId)->update($form_data);
            return redirect('/login')->with('success', 'Your Password is being Changed successfully.');
        }
        else{
            return redirect('/password/reset')->with('failure', 'You have entered wrong OTP. Try again.');
        }
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
