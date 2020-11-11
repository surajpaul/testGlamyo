<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\opd;
use App\User;
use App\DoctorInfo;
use App\HospitalInfo;
use App\Treatment;

class opdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opds = opd::latest()->paginate(10);
        return view('admin.opd.index', compact('opds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = User::latest()->where('role_id', 2)->get();
        $doctorDetails = DoctorInfo::latest()->get();

        $hospitals = User::latest()->where('role_id', 3)->get();
        $hospitalDetails = HospitalInfo::latest()->get();
        $treatments = Treatment::latest()->get();
        return view('admin.opd.create', compact('doctors','hospitals','treatments'));
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
            'patient' => 'required|string|min:2|max:255',
            'phone' => 'required|min:10|max:11',
            'doctor_id' => 'required|integer',
            'hospital_id' => 'required|integer',
            'user_id' => 'required|integer',
            'treatment_id' => 'required|integer',
            'fee' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'billed_amt' => 'nullable',
            'hospital_share' => 'nullable',
            'glamyo_share' => 'nullable',
            'status' => 'nullable',
            'prescription' => 'nullable|mimes:jpg,png,jpeg,pdf|max:204800',
        ]);
        // upload prescription
        $prescription_name = $request->prescription;
        $prescription = $request->file('prescription');
        if($prescription != '')
        {
            $request->validate([
                'prescription' => 'required'
            ]);
            $prescription_name = rand() . '.' . $prescription->getClientOriginalExtension();
            $prescription->move(public_path('prescription'), $prescription_name);
        }

        $opd = new opd([
            'patient' => $request->get('patient'),
            'phone' => $request->get('phone'),
            'doctor_id' => $request->get('doctor_id'),
            'hospital_id' => $request->get('hospital_id'),
            'user_id' => $request->get('user_id'),
            'treatment_id' => $request->get('treatment_id'),
            'fee' => $request->get('fee'),
            'appointment_date' => $request->get('appointment_date'),
            'appointment_time' => $request->get('appointment_time'),
            'billed_amt' => $request->get('billed_amt'),
            'hospital_share' => $request->get('hospital_share'),
            'glamyo_share' => $request->get('glamyo_share'),
            'status' => $request->get('status'),
            'prescription' => $prescription_name,
        ]);
        $opd->save();

        // send sms to user
        $userId = $request->get('user_id');
        $user = User::where('id', $userId)->first();
        $userPhone = $user->phone;
        // send sms to doctor
        $docId = $request->get('doctor_id');
        $doc = User::where('id', $docId)->first();
        // send sms to hospital
        $hospId = $request->get('hospital_id');
        $hosp = User::where('id', $hospId)->first();
        // treatment
        $treatId = $request->get('treatment_id');
        $treatment = Treatment::where('id', $treatId)->first();
        // hospital details
        $hospInfo = HospitalInfo::where('hospital_id', $hospId)->first();
        

        $userName = $user->name;
        $docName = $doc->name;
        $hospName = $hosp->name;
        $hospAdd = $hospInfo->address;
        $hospLoc = $hospInfo->location;
        $patientName = $request->get('patient');
        $patientPhone = $request->get('phone');
        $test = $request->get('test');
        $attendant = $request->get('attendant');
        $treatmentTime = $request->get('treatment_time');
        $arrivalTime = $request->get('arrival_time');
        $surgeryDate = $request->get('surgery_date');
        $treatmentName = $treatment->name;

        // sms to admins
        $apiKey = urlencode(env('TXTLOCAL_API'));
        $numbers = array(919910666749, 919650321222, $userPhone, $patientPhone);
        $numbers = implode(",", $numbers);
        $sender = urlencode("TXTLCL");
        $message = rawurlencode("
            An OPD for $patientName has been booked by $userName at $hospName.
            Regards
            Glamyo Health"
        );
        $data = array("apikey" => $apiKey, "numbers" => $numbers, "sender" => $sender, "message" => $message);
        $ch = curl_init("https://api.textlocal.in/send/");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        
        return redirect('/admin/opd')->with('success', 'OPD is booked successfully.');
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
        return view('admin.opd.show', compact('opd', 'hospital'));
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
        $doctors = User::latest()->where('role_id', 2)->get();
        $hospitals = User::latest()->where('role_id', 3)->get();
        $treatments = Treatment::latest()->get();
        return view('admin.opd.edit', compact('opd', 'doctors', 'hospitals', 'treatments'));
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
            'patient' => $request->patient,
            'phone' => $request->phone,
            'doctor_id' => $request->doctor_id,
            'hospital_id' => $request->hospital_id,
            'user_id' => $request->user_id,
            'treatment_id' => $request->treatment_id,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'fee' => $request->fee,
            'billed_amt' => $request->billed_amt,
            'hospital_share' => $request->hospital_share,
            'glamyo_share' => $request->glamyo_share,
            'status' => $request->status,
            'prescription' => $prescription_name,
        );

        opd::whereId($id)->update($form_data);
        return redirect('/admin/opd')->with('success', 'OPD has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opd = opd::findOrFail($id);
        $opd->delete();

        return redirect('/admin/opd')->with('success', 'OPD is successfully deleted.');
    }

    public function active(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'nullable',
        ]);
        opd::whereId($id)->update($validatedData);

        return redirect('/admin/opd')->with('success', 'OPD status is successfully updated.');
    }

    public function complete(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|integer',
        ]);
        opd::whereId($id)->update($validatedData);

        return redirect('/admin/opd')->with('success', 'OPD status is successfully updated.');
    }

    public function cancel(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|integer',
        ]);
        opd::whereId($id)->update($validatedData);

        return redirect('/admin/opd')->with('success', 'OPD status is successfully updated.');
    }
}
