<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
class Supervisor extends Authenticatable implements LaratrustUser
{
    use HasApiTokens;
    use HasRolesAndPermissions;
    use HasFactory;
    protected $fillable=['full_name', 'email',
    'password', 'is_reception', 'is_analyzer' ,'is_supervisor'];
    protected $hidden=['created_at','updated_at'];
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
    public function patient()
    {
        return $this->hasMany(Patient::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
