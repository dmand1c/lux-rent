@extends('layouts.admin')

@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2"> 
        <div class="col-sm-6">
            <h1>Vehicles</h1>
        </div>
        <div class="col-sm-6">
          @if ((Auth::user()->is_admin))
            <a href="{{ route('admin.add-vehicle') }}"><button type="button" class="btn btn-success float-right">Add vehicle</button></a>
        @endif
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of all vehicles</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Vehicle Title</th>
              <th>Registration Plates</th>
              <th>Brand</th>
              <th>Category</th>
              <th>Vehicle Status</th>
              <th>Availabity</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($vehicles as $vehicle)
              <tr>
                  <td>{{$vehicle->title}}</td>
                  <td>{{$vehicle->registration_plates}}</td>
                  <td>{{$vehicle->brand_name}}</td>
                  <td>{{ucfirst($vehicle->category)}}</td>
                  <td>Rented</td>
                  <td>Available</td>
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