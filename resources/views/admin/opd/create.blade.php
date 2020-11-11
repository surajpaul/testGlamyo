@extends('layouts.backend.app')

@section('content')
<style>
	strong{
		font-weight: bold;
	}
	.hide{
		display: none;
	}
</style>
<div class="container-xl">
	<div class="card">
    <div class="card-header">
      <h3 class="card-title">Book OPD</h3>
    </div>
    <div class="card-body">
      <form method="post" action="{{ route('admin.opd.store') }}" enctype="multipart/form-data">
        @csrf
      	<div class="row">
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Patient Name:</label>
		          <div >
		            <input id="patient" type="text" class="form-control @error('patient') is-invalid @enderror" name="patient" placeholder="Enter Patient Name" value="{{ old('patient') }}" required>
		                @error('patient')
		                    <span class="invalid-feedback" role="alert">
		                        <strong>{{ $message }}</strong>
		                    </span>
		                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Patient number :</label>
		          <div>
		            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Mobile Number" value="{{ old('phone') }}" autocomplete="phone" required>
	                @error('phone')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Select Doctor :</label>
		          <div>
		            <select class="form-select" name="doctor_id">
		            	<option class="form-control" value="0">--Select Doctor--</option>
		            	@foreach($doctors as $doctor)
	            		<option value="{{$doctor->id}}">{{$doctor->name}}</option>
		            	@endforeach
		            </select>
	                @error('doctor_id')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Select Hospital :</label>
		          <div>
		            <select class="form-select" name="hospital_id">
		            	<option class="form-control" value="0">--Select Hospital--</option>
		            	@foreach($hospitals as $hospital)
	            		<option value="{{$hospital->id}}">{{$hospital->name}}</option>
		            	@endforeach
		            </select>
	                @error('hospital_id')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3 d-none">
      			<div class="form-group mb-3 ">
		          <label class="form-label">User Id :</label>
		          <div>
		            <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{Auth::id()}}">
	                @error('user_id')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Treatment :</label>
		          <div>
		            <select class="form-select" name="treatment_id">
		            	<option value="0">--Select Treatment Type--</option>
		            	@foreach($treatments as $treatment)
	            		<option value="{{$treatment->id}}"> {{$treatment->name}} </option>
	            		@endforeach
		            </select>
	                @error('treatment_id')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Consultation Fee :</label>
		          <div>
		            <input id="fee" type="tel" class="form-control @error('fee') is-invalid @enderror" name="fee" placeholder="Enter Consultation Fee" value="{{ old('fee') }}" autocomplete="fee" required>
	                @error('fee')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Appointment Date :</label>
		          <div>
		            <input id="appointment_date" type="date" class="form-control @error('appointment_date') is-invalid @enderror" name="appointment_date" placeholder="Enter Surgery Date" value="{{ old('appointment_date') }}" autocomplete="appointment_date" required>
	                @error('appointment_date')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Appointment Time :</label>
		          <div>
		            <input id="appointment_time" type="time" class="form-control @error('appointment_time') is-invalid @enderror" name="appointment_time" placeholder="Enter Arrival Time" value="{{ old('appointment_time') }}" autocomplete="appointment_time" required>
	                @error('appointment_time')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-12">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Upload Prescription :</label>
		          <div>
		            <input id="prescription" type="file" class="form-control @error('prescription') is-invalid @enderror" name="prescription" placeholder="Upload Prescription">
	                @error('prescription')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      	</div>

        <div class="form-footer">
          <button type="submit" class="btn btn-primary">Book OPD</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$('#select_box').change(function () {
	var select=$(this).find(':selected').val();        
	$(".hide").hide();
	$('.' + select).show();
}).change();
</script>

@endsection