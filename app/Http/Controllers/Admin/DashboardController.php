<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\ipd;
use App\opd;
use Carbon\carbon;

class DashboardController extends Controller
{
    public function index()
    {
    	$users = User::latest()->where('role_id', 4)->get();
    	$doctors = User::latest()->where('role_id', 2)->get();
    	$hospitals = User::latest()->where('role_id', 3)->get();
    	$ipd_active = ipd::latest()->where('status', NULL)->get();
    	$ipd_complete = ipd::latest()->where('status', 1)->get();
    	$ipd_cancel = ipd::latest()->where('status', 2)->get();
    	$opd_active = opd::latest()->where('status', NULL)->get();
    	$opd_complete = opd::latest()->where('status', 1)->get();
    	$opd_cancel = opd::latest()->where('status', 2)->get();

        $ipd = ipd::latest()->get();
        $opd = opd::latest()->get();
        $nowMonth = Carbon::now()->month;
        $ipdThisMonth = ipd::whereBetween('surgery_date', ["2020-$nowMonth-1", "2020-$nowMonth-31"])->paginate(10);
        $opdThisMonth = opd::whereBetween('appointment_date', ["2020-$nowMonth-1", "2020-$nowMonth-31"])->paginate(10);
        return view('admin.dashboard', compact('users','doctors','hospitals','ipd_active','ipd_complete','ipd_cancel','opd_active','opd_complete','opd_cancel','ipd','opd','ipdThisMonth','opdThisMonth'));
    }
}
