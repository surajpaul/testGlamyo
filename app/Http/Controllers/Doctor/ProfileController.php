<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\DoctorInfo;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Auth::user();
        $fee = DoctorInfo::where('doctor_id', $doctor->id)->first();
        return view('doctor.profile.index', compact('doctor', 'fee'));
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
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'city' => 'required|string|min:2|max:255',
            'email' => 'nullable',
            'phone' => 'nullable',
            'fee' => 'required',
            'password' => 'required|string|min:8',
        ]);

        $doctor = User::find($id);
        $doctor->name = $request->get('name');
        $doctor->city = $request->get('city');
        $doctor->email = $request->get('email');
        $doctor->phone = $request->get('phone');
        $doctor->password = bcrypt($request->get('password'));
        $doctor->save();

        $feeId = DoctorInfo::where('doctor_id', $doctor->id)->first()->id;
        $fee = DoctorInfo::find($feeId);
        $fee->fee = $request->get('fee');
        $fee->save();

        return redirect('/doctor/profile')->with('success', 'Doctor is successfully updated.');
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
