<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_id', 'brand_id', 'vtype_id', 'inventory_id', 'title', 'chassis_nr', 'transmission', 'fuel', 'power', 'mileage',
        'nr_doors', 'nr_seats', 'production_year', 'driving_licence_requirement', 'loading_space', 'registration_plates', 'registration_expriration_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
       
    ];
}
