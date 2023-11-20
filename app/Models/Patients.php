<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Patients extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'patient_id','firstname','lastname','phonenumber','email','id_number','county','subcounty','location','village','dob','gender','gurd_name','gurd_number','gurd_alt_phone','locator_details','pic1','pic2','pic3'
    ];
     protected $dates = ['deleted_at'];
    #relationship models
    public function visits(){

        return $this->hasMany(Visits::class,'id','patient_id');
    }
   
}
