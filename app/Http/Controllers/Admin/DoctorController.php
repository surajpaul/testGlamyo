<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DoctorInfo;
use App\User;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = User::latest()->where('role_id', 2)->get();
        return view('admin.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.create');
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
            'name' => 'required|string|min:2|max:255',
            'city' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:10|max:11|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = new User([
            'role_id' => 2,
            'name' => $request->get('name'),
            'city' => $request->get('city'),
            'email'=> $request->get('email'),
            'phone'=> $request->get('phone'),
            'password' => bcrypt($request->get('password')),
        ]);
        $user->save();

        $TempId = User::where('phone', $request->get('phone'))->first();
        $doctorTempId = $TempId->id;
        $doctorInfo = new DoctorInfo([
            'doctor_id' => $doctorTempId,
            'fee' => $request->get('fee'),
        ]);        
        $doctorInfo->save();
        return redirect('/admin/doctor')->with('success', 'Doctor is successfully created.');
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
        $doctor = User::findOrFail($id);
        $fee = DoctorInfo::where('doctor_id', $doctor->id)->first();
        return view('admin.doctor.edit', compact('doctor','fee'));
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

        return redirect('/admin/doctor')->with('success', 'Doctor is successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctorId = User::where('id', $id)->first()->id;
        $doctors = User::findOrFail($doctorId);
        $doctors->delete();

        $doctorInfos = DoctorInfo::all()->where('doctor_id', $id);
        foreach ($doctorInfos as $doctorInfo) {
            $doctorId = DoctorInfo::findOrFail($doctorInfo->id);
            $doctorId->delete();
        }
        return redirect('/admin/doctor')->with('success', 'Doctor is successfully deleted.');
    }
}
