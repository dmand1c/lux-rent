@extends('layouts.admin')

@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2"> 
        <div class="col-sm-6">
            <h1>Manage Users</h1>
        </div>
        <div class="col-sm-6">
          @if ((Auth::user()->role == 'admin'))
            <a href="{{ route('admin.create-users') }}"><button type="button" class="btn btn-success float-right">Create New User</button></a>
        @endif
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of Users</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Created at</th>
                <th>Actions</th>
              <th>Role</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
              <tr>
                  <td>{{$user->first_name}} {{$user->last_name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->created_at}}</td>
                  <td>
                    <a href=""><button type="button" class="btn btn-success btn-sm">View Profile</button></a>  
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ route('admin.edit-user', $user['id']) }}"><button type="button" class="btn btn-info btn-sm">Update</button></a>                    
                        <button type="submit" form="delete-form" class="btn btn-danger btn-sm">Delete</button>
                        <form method="post" action="{{ route('admin.delete-user', $user['id']) }}" id="delete-form">
                        @method('DELETE')
                        @csrf
                        </form>                  
                    @endif
                  </td>                  
                  <td>{{ucfirst($user->role)}}</td>
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