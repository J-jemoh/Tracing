<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patients;
use App\Models\Visits;
class DashboardController extends Controller
{
    //

    public function index(){
        $latest_users=User::orderBy('created_at','desc')->get();

        return view('admin.dashboard',compact('latest_users'));
    }
    public function patients(){
        $patients=Patients::get();
        return view('admin.patients',compact('patients'));
    }
    public function allpatients(){
        $patients=Patients::get();
        return view('admin.allpatients',compact('patients'));
    }
    public function tobetraced(){
        return view('admin.ptraced');
    }
    public function traced(){
        return view('admin.traced');
    }
    public function schedulevisit(){
        $patients=Patients::get();
        return view('admin.schedulevisit',compact('patients'));

    }
    public function captureVisit($id){
        $patient=Patients::find($id);
        $visits= Visits::where('patient_id',$id)->get();
        return view('admin.visitform',compact('patient','visits'));
    }
    public function allVisits(){
        $visits= Visits::get();
        return view('admin.allvisits',compact('visits'));

    }
}
