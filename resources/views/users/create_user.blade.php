@extends('layouts.admin')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2"> 
        <div class="col-sm-6">
            <h1>Manage Users</h1>
        </div>
        {{-- <div class="col-sm-6">
            <a href='{{ url('/posts/create') }}' class="btn btn-success btn-sm float-right">Create New</a>
        </div> --}}
    </div>
      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Add New User</h3>
        </div>
        <div class="card-body">
        <form method="POST" action="{{ route('admin.register-user') }}">
            @csrf
            <div class="form-group">
              <label>First Name</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name">
                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
            </div>

            <div class="form-group">
              <label>Last Name</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name">
                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
            </div>

            <div class="form-group">
                <label>Email</label>  
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Password</label>  
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
            </div>
          </form>
        </div>
      </div>

      {{-- <div class="card-body">
        <form method="POST" action="{{ route('register-user') }}">
            @csrf

            <div class="form-group row">
                <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                    @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div> --}}
      
  </div><!-- /.container-fluid -->
</section>
@endsection

