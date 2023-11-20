<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    use HasFactory;

    protected $fillable=[
        'visitdate','visittype','vperson','visitreason','clinician_name','tca','patient_id'

    ];

    #model relationships
    public function users(){

        return $this->belongsTo(Patients::class,'patient_id');
    }
}
