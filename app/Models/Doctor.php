<?php

namespace App\Models;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
class Doctor extends Authenticatable implements LaratrustUser
{
    use HasApiTokens;
    use HasRolesAndPermissions;
     use HasFactory;
    protected $fillable=['full_name','email','password','n_number','job_description','job_ID','date_of_birth','years_of_experience','phone_number','address','nationality','Doctor_rate','image'];
    protected $hidden=['created_at','updated_at'];

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
    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'doctor_patient');
    }
    public function report()
    {
        return $this->hasMany(Report::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
