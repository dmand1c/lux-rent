@if ((Auth::user()->role == 'admin'))
    @extends('layouts.admin')

    @section('content')
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2"> 
            <div class="col-sm-6">
                <h1>Manage Users</h1>
            </div>
        </div>
        <div class="card card-success">
            <div class="card-header">
            <h3 class="card-title">Edit User</h3>
            </div>
            <div class="card-body">
            <form method="POST" action="{{ route('admin.update-user', $user['id']) }}">
                @csrf
                <div class="form-group">
                <label>First Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" class="form-control" name="first_name" value={{ $user->first_name }}>
                </div>
                </div>

                <div class="form-group">
                <label>Last Name</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text" class="form-control" name="last_name" value={{ $user->last_name }}>
                </div>
                </div>

                <div class="form-group">
                    <label>Email</label>  
                    <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="email" class="form-control" name="email" value={{ $user->email }}>
                    </div>
                </div>

                <div class="form-group">
                    <label>Password</label>  
                    <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                <label>Role</label>
                <select class="form-control select2" style="width: 100%;" name="role">
                    <option selected="selected" value="user">User</option>
                    <option value="admin">Admin</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success float-left">Submit</button>
                    <input type="hidden" method="PUT">
                </div>
            </form>
            </div>
        </div>      
    </div><!-- /.container-fluid -->
    </section>
    @endsection
@else
    
@endif