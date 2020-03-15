@extends('layouts.admin')

@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2"> 
        <div class="col-sm-6">
            <h1>View Vehicle</h1>
        </div>
      </div>
      <div class="card">
        <div class="card-header border-transparent">
          <h3 class="card-title">Vehicle</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-widget="remove">
              <i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <tbody>
                <tr>
                    <td>Title</td>
                    <td>{{ $vehicle->title }}</td>
                </tr>
                <tr>
                    <td>Brand</td>
                    <td>{{ $vehicle->brand_name }}</td>
                </tr>
                <tr>
                    <td>Chassis Nr</td>
                    <td>{{ $vehicle->chassis_nr }}</td>
                </tr>
                <tr>
                    <td>Registration</td>
                    <td>{{ $vehicle->registration_plates }}</td>
                </tr>
                <tr>
                    <td>Registration expiration date</td>
                    <td>{{ $vehicle->registration_expiration_date }}</td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>{{ ucfirst($vehicle->category) }}</td>
                </tr>
                <tr>
                    <td>Vehicle Type</td>
                    <td>{{ $vehicle->description }}</td>
                </tr>
                <tr>
                    <td>Transmission</td>
                    <td>{{ ucfirst($vehicle->transmission) }}</td>
                </tr>
                <tr>
                    <td>Fuel</td>
                    <td>{{ ucfirst($vehicle->fuel) }}</td>
                </tr>
                <tr>
                    <td>Power</td>
                    <td>{{ $vehicle->power }}</td>
                </tr>
                <tr>
                    <td>Mileage</td>
                    <td>{{ $vehicle->mileage }}</td>
                </tr>
                <tr>
                    <td>Doors</td>
                    <td>{{ $vehicle->nr_doors }}</td>
                </tr>
                <tr>
                    <td>Seats</td>
                    <td>{{ $vehicle->nr_seats }}</td>
                </tr>
                <tr>
                    <td>Production year</td>
                    <td>{{ $vehicle->production_year }}</td>
                </tr>
                <tr>
                    <td>Driving licence req.</td>
                    <td>{{ $vehicle->driving_licence }}</td>
                </tr>
                <tr>
                    <td>Loading Space</td>
                    <td>{{ $vehicle->loading_space }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->      
    </div>
  </section> 
@endsection