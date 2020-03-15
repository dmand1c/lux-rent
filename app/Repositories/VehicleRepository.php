<?php

namespace App\Repositories;

use App\Repositories\VehicleRepositoryInterface;
use Illuminate\Support\Facades\DB;

class VehicleRepository implements VehicleRepositoryInterface
{
    // Get all vehicles
    public function getAllVehicles() {
        
        $selectQuery = 'vehicles.vehicle_id, vehicles.title, vehicles.category, vehicles.registration_plates, brands.brand_name, vehicle_types.description';

        return DB::table('vehicles')
        ->selectRaw($selectQuery)
        ->join('brands', 'brands.brand_id', '=', 'vehicles.brand_id', 'inner')
        ->join('vehicle_types', 'vehicle_types.vtype_id', '=', 'vehicles.vtype_id', 'inner')
        ->groupBy('vehicles.vehicle_id', 'vehicles.title', 'vehicles.category', 'brands.brand_name', 'vehicle_types.description', 'vehicles.registration_plates')
        ->get();
    }

    // Get vehicle by id
    public function getVehicleById($id) {
        
        $selectQuery = 'vehicles.*, brands.brand_name, vehicle_types.description';

        return DB::table('vehicles')
        ->selectRaw($selectQuery)
        ->join('brands', 'brands.brand_id', '=', 'vehicles.brand_id', 'inner')
        ->join('vehicle_types', 'vehicle_types.vtype_id', '=', 'vehicles.vtype_id', 'inner')
        ->groupBy('vehicle_id', 'brand_id', 'vtype_id', 'inv_id', 'title', 'chassis_nr', 'category', 'transmission', 'fuel', 'power', 'mileage',
        'nr_doors', 'nr_seats', 'production_year', 'driving_licence', 'loading_space', 'registration_plates', 'registration_expiration_date', 'brands.brand_name', 'vehicle_types.description')
        ->get();
    }
}
