<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\opd;
use App\User;
use App\DoctorInfo;
use App\HospitalInfo;
use App\Room;
use App\Treatment;
use App\Payment;
use Auth;

class opdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctorId = Auth::id();
        $opds = opd::latest()->where('doctor_id', $doctorId)->paginate(10);
        return view('doctor.opd.index', compact('opds'));
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
        $opd = opd::findOrFail($id);
        $hospital = HospitalInfo::where('hospital_id', $opd->hospital_id)->first();
        return view('doctor.opd.show', compact('opd', 'hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opd = opd::findOrFail($id);
        return view('doctor.opd.edit', compact('opd'));
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
        $prescription_name = $request->prescription_hide_user;
        $prescription = $request->file('prescription');
        if($prescription != ''){
            $prescription_name = rand() . '.' . $prescription->getClientOriginalExtension();
            $prescription->move(public_path('prescription'), $prescription_name);
        }else{
        }

        $form_data = array(
            'prescription' => $prescription_name,
        );

        opd::whereId($id)->update($form_data);
        return redirect('/doctor/opd')->with('success', 'Prescription has been successfully updated.');
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

    public function active(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'nullable',
        ]);
        opd::whereId($id)->update($validatedData);

        return redirect('/doctor/opd')->with('success', 'OPD status is successfully updated.');
    }

    public function complete(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|integer',
        ]);
        opd::whereId($id)->update($validatedData);

        return redirect('/doctor/opd')->with('success', 'OPD status is successfully updated.');
    }

    public function cancel(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|integer',
        ]);
        opd::whereId($id)->update($validatedData);

        return redirect('/doctor/opd')->with('success', 'OPD status is successfully updated.');
    }
}
