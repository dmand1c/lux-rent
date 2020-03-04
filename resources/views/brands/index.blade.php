@extends('layouts.admin')

@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2"> 
        <div class="col-sm-6">
            <h1>Brands</h1>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('admin.add-car-brand') }}"><button type="button" class="btn btn-success float-right">Add car brand</button></a>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of available car brands</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Brand name</th>
              <th>Country</th>
              <th>Nr. of cars</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($brands as $brand)
              <tr>
                <td>{{$brand->brand_name}}</td>
                <td>Germany</td>
                <td>{{$brand->vehicle_count}}</td>
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