<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Report extends Model
{
    use HasFactory;
    use HasApiTokens;
    protected $fillable=[


        'Admission_Date',
        'doctor_name',
        'patient_name',
        'admin_id',
        'Admission_Diagnosis',
        'Admitting_Staff',
        'Physician',
        'Specialty',
        'Reason_for_THHC',
        'Information_from',
        'Temp',
        'Oral',
        'Ear',
        'Axillary',
        'Rectal',
        'Regular',
        'irregular',
        'Blood_Pressure',
        'Pulse_Rate',
        'Standing',
        'Sitting',
        'Lying',
        'R_Arm',
        'R_Wrist',
        'R_Leg',
        'R_arm1',
        'R_wrist1',
        'R_leg1',
        'Respiration',
        'Oxygen_Saturation',
        'Height',
        'Weight',
        'Actual',
        'Estimated',
        'ORIENTATION',
        'Pain',
        'ALLERGIES',
        'Medication',
        'reaction_medication',
        'Food',
        'reaction_type_food',
        'reaction_type_medication',
        'reaction_food',
        'signed',
        'THHC_Working_Hours',
        'THHC_Discharge_plan',
        'THHC_disciplines',
        'Service_Charges',
        'Emergency_Telephone_Numbers',
        'Visit_Frequency',
        'signedby',
        'Emergency_Plan',
        'signature',

    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
