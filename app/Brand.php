<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Vehicle;

class Brand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_id', 'brand_name',
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

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }

    // Get all brands
    public function scopegetAllBrands() {
        
        $selectQuery = 'brands.*, count(vehicles.brand_id) as vehicle_count';

        return DB::table('brands')
            ->selectRaw($selectQuery)
            ->join('vehicles', 'vehicles.brand_id', '=', 'brands.brand_id', 'inner')
            ->groupBy('brands.brand_id', 'brands.brand_name')
            ->get();
    }

}
