<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ipd;
use App\User;
use App\DoctorInfo;
use App\HospitalInfo;
use App\Room;
use App\Treatment;
use App\Payment;

class ipdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ipds = ipd::latest()->paginate(10);
        return view('admin.ipd.index', compact('ipds'));
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

        $rooms = Room::latest()->get();
        $treatments = Treatment::latest()->get();
        $payments = Payment::latest()->get();
        return view('admin.ipd.create', compact('doctors','hospitals','rooms','treatments', 'payments'));
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
            'room_id' => 'required|integer',
            'treatment_id' => 'required|integer',
            'surgery_date' => 'required',
            'arrival_time' => 'required',
            'treatment_time' => 'required',
            'test' => 'nullable',
            'attendant' => 'required',
            'aadhar.*' => 'required|mimes:jpg,png,jpeg|max:204800',
            'payment_id' => 'required|integer',
            'admission_amt' => 'required_if:payment_id,1',
            'discharge_amt'=> 'required_if:payment_id,1',
            'insurance.*'=> 'nullable|mimes:jpg,png,jpeg|max:204800',
            'billed_amt'=> 'nullable',
            'settled_amt'=> 'nullable',
            'hospital_share'=> 'nullable',
            'glamyo_share'=> 'nullable',
            'status'=> 'nullable',
        ]);
        //aadhar image saving
        $aadhar_name = $request->aadhar;
        $aadhar = $request->file('aadhar');
        if($aadhar != '')
        {
            $request->validate([
                'aadhar' => 'required|mimes:jpg,png,jpeg,pdf|max:204800'
            ]);
            $aadhar_name = rand() . '.' . $aadhar->getClientOriginalExtension();
            $aadhar->move(public_path('aadhar'), $aadhar_name);
        }
        //insurance image saving
        $insurance_name = $request->insurance;
        $insurance = $request->file('insurance');
        if($insurance != '')
        {
            $request->validate([
                'insurance' => 'required|mimes:jpg,png,jpeg,pdf|max:204800'
            ]);
            $insurance_name = rand() . '.' . $insurance->getClientOriginalExtension();
            $insurance->move(public_path('insurance'), $insurance_name);
        }
        $ipd = new ipd([
            'patient' => $request->get('patient'),
            'phone' => $request->get('phone'),
            'doctor_id' => $request->get('doctor_id'),
            'hospital_id' => $request->get('hospital_id'),
            'user_id' => $request->get('user_id'),
            'room_id' => $request->get('room_id'),
            'treatment_id' => $request->get('treatment_id'),
            'surgery_date' => $request->get('surgery_date'),
            'arrival_time' => $request->get('arrival_time'),
            'treatment_time' => $request->get('treatment_time'),
            'test' => $request->get('test'),
            'attendant' => $request->get('attendant'),
            'aadhar' => $aadhar_name,
            'payment_id' => $request->get('payment_id'),
            'admission_amt' => $request->get('admission_amt'),
            'discharge_amt' => $request->get('discharge_amt'),
            'insurance' => $insurance_name,
            'billed_amt' => $request->get('billed_amt'),
            'settled_amt' => $request->get('settled_amt'),
            'hospital_share' => $request->get('hospital_share'),
            'glamyo_share' => $request->get('glamyo_share'),
            'status' => $request->get('status'),
        ]);
        $ipd->save();

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
        // room
        $roomId = $request->get('room_id');
        $room = Room::where('id', $roomId)->first();
        // hospital details
        $hospInfo = HospitalInfo::where('hospital_id', $hospId)->first();
        // payment
        $payId = $request->get('payment_id');
        $payment = Payment::where('id', $payId)->first();
        

        $userName = $user->name;
        $docName = $doc->name;
        $hospName = $hosp->name;
        $hospAdd = $hospInfo->address;
        $hospLoc = $hospInfo->location;
        $room = $room->name;
        $patientName = $request->get('patient');
        $patientPhone = $request->get('phone');
        $test = $request->get('test');
        $attendant = $request->get('attendant');
        $treatmentTime = $request->get('treatment_time');
        $arrivalTime = $request->get('arrival_time');
        $surgeryDate = $request->get('surgery_date');
        $treatmentName = $treatment->name;
        $paymentName = $payment->name;

        // sms to admins
        $apiKey = urlencode(env('TXTLOCAL_API'));
        $numbers = array(9910666749, 9650321222, $userPhone, $patientPhone);
        $numbers = implode(",", $numbers);
        $sender = urlencode("TXTLCL");
        $message = rawurlencode("
            An IPD for $patientName has been booked by $userName at $hospName.
            Regards
            Glamyo Health"
        );
        $data = array("apikey" => $apiKey, "numbers" => $numbers, "sender" => $sender, "message" => $message);
        $ch = curl_init("https://api.textlocal.in/send/");
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        
        return redirect('/admin/ipd')->with('success', 'IPD is booked successfully.');
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
        return view('admin.ipd.show', compact('ipd', 'hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ipd = ipd::findOrFail($id);
        $doctors = User::latest()->where('role_id', 2)->get();
        $hospitals = User::latest()->where('role_id', 3)->get();
        $rooms = Room::latest()->get();
        $treatments = Treatment::latest()->get();
        $payments = Payment::latest()->get();
        return view('admin.ipd.edit', compact('ipd', 'doctors', 'hospitals', 'rooms' , 'treatments', 'payments'));
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
        $aadhar_name = $request->aadhar_hide;
        $aadhar = $request->file('aadhar');
        if($aadhar != ''){
            $aadhar_name = rand() . '.' . $aadhar->getClientOriginalExtension();
            $aadhar->move(public_path('aadhar'), $aadhar_name);
        }else{
        }

        $insurance_name = $request->insurance_hide;
        $insurance = $request->file('insurance');
        if($insurance != ''){
            $insurance_name = rand() . '.' . $insurance->getClientOriginalExtension();
            $insurance->move(public_path('insurance'), $insurance_name);
        }else{
        }

        $form_data = array(
            'patient' => $request->patient,
            'phone' => $request->phone,
            'doctor_id' => $request->doctor_id,
            'hospital_id' => $request->hospital_id,
            'user_id' => $request->user_id,
            'room_id' => $request->room_id,
            'treatment_id' => $request->treatment_id,
            'surgery_date' => $request->surgery_date,
            'arrival_time' => $request->arrival_time,
            'treatment_time' => $request->treatment_time,
            'test' => $request->test,
            'attendant' => $request->attendant,
            'aadhar' => $aadhar_name,
            'payment_id' => $request->payment_id,
            'admission_amt' => $request->admission_amt,
            'discharge_amt' => $request->discharge_amt,
            'insurance' => $insurance_name,
            'billed_amt' => $request->billed_amt,
            'settled_amt' => $request->settled_amt,
            'hospital_share' => $request->hospital_share,
            'glamyo_share' => $request->glamyo_share,
            'status' => $request->status,
        );

        ipd::whereId($id)->update($form_data);
        return redirect('/admin/ipd')->with('success', 'IPD has been successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ipd = ipd::findOrFail($id);
        $ipd->delete();

        return redirect('/admin/ipd')->with('success', 'IPD is successfully deleted.');
    }

    // Active
    public function active(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'nullable',
        ]);
        ipd::whereId($id)->update($validatedData);

        return redirect('/admin/ipd')->with('success', 'IPD status is successfully updated.');
    }

    // Complete
    public function complete(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|integer',
        ]);
        ipd::whereId($id)->update($validatedData);

        return redirect('/admin/ipd')->with('success', 'IPD status is successfully updated.');
    }

    // Cancel
    public function cancel(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|integer',
        ]);
        ipd::whereId($id)->update($validatedData);

        return redirect('/admin/ipd')->with('success', 'IPD status is successfully updated.');
    }
}
