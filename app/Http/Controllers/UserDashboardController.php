<?php

namespace App\Http\Controllers;
use App\Models\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
      return view('dash');
    //, compact('details'));  
    }
    public function infoindex(Request $request){
        $info = Documents::where('created_by',Auth::user()->id)->get();
      return view('info', compact('info'));  
    }
    public function create()
    {
        return view('dash');
        
    }
    public function store(Request $request)
    {
        $documents=new Documents();
        $documents->document_subject    =$request->document_subject;
        $documents->created_by          =Auth::user()->id;
        $documents->updated_by          ='0';
        $documents->remark              ='0';
        $documents->save();
        
        return redirect('/dashboard');

    }
}