<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Attendance;
use App\AttendanceSetting;
use RealRashid\SweetAlert\Facades\Alert;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
      return view('admindash');
    //, compact('details'));  
    }

    
}