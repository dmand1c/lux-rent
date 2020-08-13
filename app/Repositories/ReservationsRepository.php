<?php

namespace App\Repositories;

use App\Repositories\ReservationsRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ReservationsRepository implements ReservationsRepositoryInterface
{
    // Get all reservations for index page
    public function getAllReservations() {
        
        $selectQuery = 'reservations.reservation_id, reservations.reservation_status, reservations.created_at, reservations.from_date, reservations.to_date, customers.salutation,
        customers.first_name, customers.last_name, vehicles.title, vehicles.registration_plates';

        return DB::table('reservations')
        ->selectRaw($selectQuery)
        ->join('inventory', 'inventory.inv_id', '=', 'reservations.inv_id', 'inner')
        ->join('vehicles', 'vehicles.inv_id', '=', 'inventory.inv_id', 'inner')
        ->join('customers', 'customers.customer_id', '=', 'reservations.customer_id', 'inner')
        ->groupBy('reservations.reservation_id', 'reservations.reservation_status', 'reservations.created_at', 'reservations.from_date', 'reservations.to_date', 'customers.salutation',
        'customers.first_name', 'customers.last_name', 'vehicles.title', 'vehicles.registration_plates')
        ->get();
    }
}
