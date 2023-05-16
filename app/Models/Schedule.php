<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;


    protected $fillable=['start_time','end_time','date','doctor_id','admin_id','supervisor_id'];

    public function doctors()
    {
        return $this->belongsTo(
            Doctor::class,
            'doctor_id'
        );
    }
    public function supervisor()
    {
        return $this->belongsTo(
            Supervisor::class,
            'supervisor_id'
    );
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
