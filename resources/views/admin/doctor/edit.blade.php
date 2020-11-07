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
      <h3 class="card-title">Edit Doctor - <span class="text-info">{{ $doctor->name }}</span></h3>
    </div>
    <div class="card-body">
      <form method="post" action="{{ route('admin.doctor.update', $doctor->id) }}">
      	@method('PATCH')
        @csrf
      	<div class="row">
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Doctor Name :</label>
		          <div >
		            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{ $doctor->name }}" required>
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
		            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ $doctor->email }}">
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
		            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Mobile Number" value="{{ $doctor->phone }}">
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
		            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Enter City" value="{{ $doctor->city }}">
	                @error('city')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>

      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Doctor Consultation Fees :</label>
		          <div >
		            <input id="fee" type="text" class="form-control @error('fee') is-invalid @enderror" name="fee" placeholder="Enter fee" value="{{$fee->fee}}">
	                @error('fee')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-9">
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
          <button type="submit" class="btn btn-primary">Update Doctor</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection