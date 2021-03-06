<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medicine_name',
        'expdate_buffer',
        'expdate_stock',
        'type_of_medicine_id',
        'type_of_medicine_description',
        'buffer',
        'dispense',
        'qty',
        'created_by',
        'updated_by',    
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

}
