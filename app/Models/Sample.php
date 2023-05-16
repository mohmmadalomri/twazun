<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;
    protected $fillable=[
        'lab_id',
         'medical_center_id' ,
         'sending_doctor_name',
         'patient_name',
         'patient_file_number',
         'patient_nationality',
         'res_doctor_name',
         'res_patient_name',
         'res_patient_file_number',
         'res_patient_nationality',





];
    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }

    public function medicalCenter()
    {
        return $this->belongsTo(MedicalCenter::class);
    }
}
