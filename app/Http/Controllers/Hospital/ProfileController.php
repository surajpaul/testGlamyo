<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\HospitalInfo;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospital = Auth::user();
        $info = HospitalInfo::where('hospital_id', $hospital->id)->first();
        return view('hospital.profile.index', compact('hospital', 'info'));
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

        $infoId = hospitalInfo::where('hospital_id', $hospital->id)->first()->id;
        $info = hospitalInfo::find($infoId);
        $info->address = $request->get('address');
        $info->location = $request->get('location');
        $info->save();

        return redirect('/hospital/profile')->with('success', 'hospital is successfully updated.');
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
