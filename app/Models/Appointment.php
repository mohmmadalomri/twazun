<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;

class Appointment extends User
{

    use HasApiTokens;
    // use HasRolesAndPermissions;
    use HasFactory;
   protected $fillable=[
    'doctor_id','start_time','end_time','date','patient_id','admins_id',

   ];
   protected $hidden=['created_at','updated_at'];

    public function doctors()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
