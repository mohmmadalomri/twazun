<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
class Lab extends Authenticatable
{use HasApiTokens;
    use HasRolesAndPermissions;
    use HasFactory;
    protected $fillable=['name','phone_number','password','name','image','address','email','website'];

}
