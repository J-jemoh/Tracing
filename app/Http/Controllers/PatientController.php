<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;

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
}
