<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HospitalInfo;
use App\User;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = User::latest()->where('role_id', 3)->get();
        return view('admin.hospital.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hospital.create');
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
            'role_id' => 3,
            'name' => $request->get('name'),
            'city' => $request->get('city'),
            'email'=> $request->get('email'),
            'phone'=> $request->get('phone'),
            'password' => bcrypt($request->get('password')),
        ]);
        $user->save();

        $TempId = User::where('phone', $request->get('phone'))->first();
        $hospitalTempId = $TempId->id;
        $hospitalInfo = new HospitalInfo([
            'hospital_id' => $hospitalTempId,
            'address'=> $request->get('address'),
            'location'=> $request->get('location'),
        ]);        
        $hospitalInfo->save();
        return redirect('/admin/hospital')->with('success', 'Hospital is successfully created.');
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
        $hospital = User::findOrFail($id);
        $details = HospitalInfo::where('hospital_id', $hospital->id)->first();
        return view('admin.hospital.edit', compact('hospital','details'));
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
            'address' => 'required',
            'location' => 'required',
            'password' => 'required|string|min:8',
        ]);

        $hospital = User::find($id);
        $hospital->name = $request->get('name');
        $hospital->city = $request->get('city');
        $hospital->email = $request->get('email');
        $hospital->phone = $request->get('phone');
        $hospital->password = bcrypt($request->get('password'));
        $hospital->save();


        $detailId = HospitalInfo::where('hospital_id', $hospital->id)->first()->id;
        $detail = HospitalInfo::find($detailId);
        $detail->address = $request->get('address');
        $detail->location = $request->get('location');
        $detail->save();

        return redirect('/admin/hospital')->with('success', 'Hospital is successfully updated.');
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

        $hospitalInfos = HospitalInfo::all()->where('hospital_id', $id);
        foreach ($hospitalInfos as $hospitalInfo) {
            $hospitalId = HospitalInfo::findOrFail($hospitalInfo->id);
            $hospitalId->delete();
        }
        return redirect('/admin/hospital')->with('success', 'Hospital is successfully deleted.');
    }
}
