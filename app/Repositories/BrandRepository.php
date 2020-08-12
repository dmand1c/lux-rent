<?php

namespace App\Repositories;

use App\Repositories\BrandRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Brand;

class BrandRepository implements BrandRepositoryInterface
{
    // Get all brands
    public function getAllBrands() {
        
        $selectQuery = 'brands.*, count(vehicles.brand_id) as vehicle_count';

        return DB::table('brands')
            ->selectRaw($selectQuery)
            ->orderBy('brands.brand_name', 'ASC')
            ->join('vehicles', 'vehicles.brand_id', '=', 'brands.brand_id', 'left outer')
            ->groupBy('brands.brand_id', 'brands.brand_name', 'brands.created_at', 'brands.updated_at')
            ->get();
    }
}
