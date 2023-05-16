<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
class Patient extends Authenticatable implements LaratrustUser
{
    use HasFactory;
    use HasApiTokens;
    use HasRolesAndPermissions;


    protected $fillable=['full_name','date_of_birth','n_number','phone_number',
        'file_no','email','address','password','address','height','weight',
        'blood_type','disease_name','description_disease','gender','patient_rate','supervisor_id',
    'admin_id','photo'];


    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_patient');
    }
    public function report()
    {
        return $this->hasMany(Report::class);
    }

}
