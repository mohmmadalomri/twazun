<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
class Admin extends Authenticatable implements LaratrustUser
{
    use HasApiTokens;
    use HasRolesAndPermissions;
    use HasFactory;


    protected $fillable=['full_name', 'email',
    'password','is_reception', 'is_analyzer' ,'phone_number'];
    protected $hidden=['created_at','updated_at','remember_token'];





    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
    public function appointment()
    {
        return $this->hasMany(Patient::class);
    }
    public function report()
    {
        return $this->hasMany(Report::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function medicalCenters()
    {
        return $this->belongsToMany(MedicalCenter::class, 'admins_medical_centers');
    }
}
