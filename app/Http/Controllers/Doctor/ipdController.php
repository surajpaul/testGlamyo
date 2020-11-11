<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ipd;
use App\User;
use App\DoctorInfo;
use App\HospitalInfo;
use App\Room;
use App\Treatment;
use App\Payment;
use Auth;

class ipdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctorId = Auth::id();
        $ipds = ipd::latest()->where('doctor_id', $doctorId)->paginate(10);
        return view('doctor.ipd.index', compact('ipds'));
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
        $ipd = ipd::findOrFail($id);
        $hospital = HospitalInfo::where('hospital_id', $ipd->hospital_id)->first();
        return view('doctor.ipd.show', compact('ipd', 'hospital'));
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

    // Active
    public function active(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'nullable',
        ]);
        ipd::whereId($id)->update($validatedData);

        return redirect('/doctor/ipd')->with('success', 'IPD status is successfully updated.');
    }

    // Complete
    public function complete(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|integer',
        ]);
        ipd::whereId($id)->update($validatedData);

        return redirect('/doctor/ipd')->with('success', 'IPD status is successfully updated.');
    }

    // Cancel
    public function cancel(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|integer',
        ]);
        ipd::whereId($id)->update($validatedData);

        return redirect('/doctor/ipd')->with('success', 'IPD status is successfully updated.');
    }
}
