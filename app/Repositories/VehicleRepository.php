<?php

namespace App\Repositories;

use App\Repositories\VehicleRepositoryInterface;
use Illuminate\Support\Facades\DB;

class VehicleRepository implements VehicleRepositoryInterface
{
    // Get all vehicles
    public function getAllVehicles() {
        
        $selectQuery = 'vehicles.title, vehicles.category, vehicles.registration_plates, brands.brand_name, vehicle_types.description';

        return DB::table('vehicles')
        ->selectRaw($selectQuery)
        ->join('brands', 'brands.brand_id', '=', 'vehicles.brand_id', 'inner')
        ->join('vehicle_types', 'vehicle_types.vtype_id', '=', 'vehicles.vtype_id', 'inner')
        ->groupBy('vehicles.title', 'vehicles.category', 'brands.brand_name', 'vehicle_types.description', 'vehicles.registration_plates')
        ->get();
    }
}
