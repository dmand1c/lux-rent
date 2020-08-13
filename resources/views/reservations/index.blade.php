@extends('layouts.admin')

@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2"> 
        <div class="col-sm-6">
            <h1>Manage Reservations</h1>
        </div>
       {{--  <div class="col-sm-6">
          @if ((Auth::user()->is_admin))
            <a href="{{ route('admin.add-vehicle') }}"><button type="button" class="btn btn-success float-right">Add vehicle</button></a>
        @endif
        </div> --}}
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of all reservations</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Reservation ID</th>
              <th>Reservation Created On</th>
              <th>Reservation Status</th>
              <th>Reserved From</th>
              <th>Reserved To</th>
              <th>Customer Name</th>
              <th>Car Model</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($reservations as $reservation)
              <tr>
                  <td>{{ $reservation->reservation_id }}</td>
                  <td>{{ $reservation->created_at }}</td>
                  <td>{{ $reservation->reservation_status }}</td>
                  <td>{{ $reservation->from_date }}</td>
                  <td>{{ $reservation->to_date }}</td>
                  <td>{{ $reservation->salutation }} {{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                  <td>{{ $reservation->title }}</td>
                  <td>
                    <a href="{{ route('admin.add-vehicle') }}"><button type="button" class="btn btn-primary btn-sm">Detailed View</button></a>
                    <a href=""><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                  </td>
              </tr>
             @endforeach
            </tbody>
            <tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->      
    </div>
  </section> 
@endsection