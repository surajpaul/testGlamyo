@extends('layouts.backend.app')

@section('content')
<style>
	strong{
		font-weight: bold;
	}
</style>
<div class="container-xl">
	<div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit Hospital - <span class="text-info">{{ $hospital->name }}</span></h3>
    </div>
    <div class="card-body">
      <form method="post" action="{{ route('admin.hospital.update', $hospital->id) }}">
      	@method('PATCH')
        @csrf
      	<div class="row">
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">hospital Name :</label>
		          <div >
		            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{ $hospital->name }}" required>
		                @error('name')
		                    <span class="invalid-feedback" role="alert">
		                        <strong>{{ $message }}</strong>
		                    </span>
		                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Email address :</label>
		          <div >
		            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ $hospital->email }}">
		                @error('email')
		                    <span class="invalid-feedback" role="alert">
		                        <strong>{{ $message }}</strong>
		                    </span>
		                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Phone number :</label>
		          <div >
		            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Mobile Number" value="{{ $hospital->phone }}">
	                @error('phone')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">City :</label>
		          <div >
		            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Enter City" value="{{ $hospital->city }}">
	                @error('city')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Address :</label>
		          <div >
		            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter Address" value="{{ $details->address }}">
	                @error('address')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Location :</label>
		          <div >
		            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Enter Location" value="{{ $details->location }}">
	                @error('location')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>

      		<div class="col-md-12">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Password :</label>
		          <div>
		            <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
		            @error('password')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		            <small class="form-hint">
		              Your password must be 8-20 characters long, contain letters and numbers, and must not contain
		              spaces, special characters, or emoji.
		            </small>
		          </div>
		        </div>
      		</div>
      	</div>

        <div class="form-footer">
          <button type="submit" class="btn btn-primary">Update hospital</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection