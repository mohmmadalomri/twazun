<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;

class MedicalCenter extends Authenticatable implements LaratrustUser
{
    use HasFactory;
    use HasApiTokens;
    use HasRolesAndPermissions;

    protected $fillable = ['name', 'email', 'password', 'phone_number', 'address', 'website'];

    public function admins()
    {
        return $this->belongsToMany(Admin::class, 'admins_medical_centers');
    }

}
