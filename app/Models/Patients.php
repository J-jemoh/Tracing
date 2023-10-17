<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable=[
        'patient_id','firstname','lastname','phonenumber','email','id_number','county','subcounty','location','village','dob','gender','gurd_name','gurd_number','gurd_alt_phone','locator_details'
    ];
    
}
