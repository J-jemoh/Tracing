<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use App\Models\Visits;

class PatientController extends Controller
{
    //

    public function store(Request $request){

        $patient=Patients::create([
            'patient_id'=>$request->patientID,
            'firstname'=>$request->Fname,
            'lastname'=>$request->Lname,
            'phonenumber'=>$request->phonenumber,
            'email'=>$request->email,
            'id_number'=>$request->idnumber,
            'county'=>$request->county,
            'subcounty'=>$request->subcounty,
            'location'=>$request->location,
            'village'=>$request->village,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'gurd_name'=>$request->gname,
            'gurd_number'=>$request->gphone,
            'gurd_alt_phone'=>$request->galternative_phone,
            'locator_details'=>$request->locator,

        ]);
        return redirect()->route('dashboard.allpatients')->with('success','Patient created successfully');

    }
    public function storeVisit(Request $request){

        $visit=Visits::create([
            'patient_id'=>$request->pid,
            'visitdate'=>$request->visitdate,
            'visittype'=>$request->visitType,
            'vperson'=>$request->vperson,
            'visitreason'=>$request->visitreason,
            'clinician_name'=>$request->cname,
            'tca'=>$request->appointDate,

        ]);

        return redirect()->back()->with('success','Visit updated successfully');
    }
    public function viewPatient($id){

        $patient=Patients::find($id);
        return view('admin.viewPatient',compact('patient'));
    }
    public function editPatient($id){

        $patient=Patients::find($id);
        return view('admin.editPatient',compact('patient'));
    }
    public function UpdatePatient(Request $request, $id){

         $patient=Patients::find($id)->update([
            'patient_id'=>$request->patientID,
            'firstname'=>$request->Fname,
            'lastname'=>$request->Lname,
            'phonenumber'=>$request->phonenumber,
            'email'=>$request->email,
            'id_number'=>$request->idnumber,
            'county'=>$request->county,
            'subcounty'=>$request->subcounty,
            'location'=>$request->location,
            'village'=>$request->village,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'gurd_name'=>$request->gname,
            'gurd_number'=>$request->gphone,
            'gurd_alt_phone'=>$request->galternative_phone,
            'locator_details'=>$request->locator,

        ]);
        return redirect()->route('dashboard.allpatients')->with('success','Patient updated successfully');
    }
    public function trashPatient($id){

        $patient=Patients::find($id)->delete();
        return redirect()->route('dashboard.allpatients')->with('success','Patient Trashed successfully');

    }
    public function trashedPatients(){

        $patients = Patients::onlyTrashed()->get();
        return view('admin.trashed',compact('patients'));
    }
    public function RestorePatients($id){

        $patient = Patients::withTrashed()->find($id)->restore();
        return redirect()->route('dashboard.allpatients')->with('success','Patient Restored successfully');

    }
}
