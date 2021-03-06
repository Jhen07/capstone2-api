<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'doc_name',
        'contact_no',
        'schedules',
        'specialization',
        'archived',
        'created_by',
        'updated_by',
    ];



    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'doctor_contact' => 'array',
        'schedules' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
