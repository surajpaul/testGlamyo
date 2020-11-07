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
      <h3 class="card-title">Book IPD</h3>
    </div>
    <div class="card-body">
      <form method="post" action="{{ route('admin.ipd.store') }}" enctype="multipart/form-data">
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
      			<div class="form-group mb-3">
		          <label class="form-label">Room Category:</label>
		          <div>
		            <select class="form-select" name="room_id">
		            	<option value="0">--Select Room Type--</option>
		            	@foreach($rooms as $room)
	            		<option value="{{$room->id}}"> {{$room->name}} </option>
	            		@endforeach
		            </select>
	                @error('room_id')
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
      			<div class="form-group mb-3 ">
		          <label class="form-label">Surgery Date :</label>
		          <div>
		            <input id="surgery_date" type="date" class="form-control @error('surgery_date') is-invalid @enderror" name="surgery_date" placeholder="Enter Surgery Date" value="{{ old('surgery_date') }}" autocomplete="surgery_date" required>
	                @error('surgery_date')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Arrival Time :</label>
		          <div>
		            <input id="arrival_time" type="time" class="form-control @error('arrival_time') is-invalid @enderror" name="arrival_time" placeholder="Enter Arrival Time" value="{{ old('arrival_time') }}" autocomplete="arrival_time" required>
	                @error('arrival_time')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Treatment Time :</label>
		          <div>
		            <input id="treatment_time" type="time" class="form-control @error('treatment_time') is-invalid @enderror" name="treatment_time" placeholder="Enter Treatment Time" value="{{ old('treatment_time') }}" autocomplete="treatment_time" required>
	                @error('treatment_time')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Tests ( If Any ) :</label>
		          <div>
		            <input id="test" type="text" class="form-control @error('test') is-invalid @enderror" name="test" placeholder="Enter Test Type">
	                @error('test')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-6">
      			<div class="form-group mb-3">
		          <label class="form-label">Attendant :</label>
		          <div>
		            <input id="attendant" type="text" class="form-control @error('attendant') is-invalid @enderror" name="attendant" placeholder="Enter Attendant" value="Patient to be accompanied by one attendant, should be above 21 years of age.">
	                @error('attendant')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Upload Aadhar card :</label>
		          <div>
		            <input id="aadhar" type="file" class="form-control @error('aadhar') is-invalid @enderror" name="aadhar" placeholder="Upload your aadhar card" required>
	                @error('aadhar')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Payment Type :</label>
		          <div>
		            <select class="form-select" id="select_box" name="payment_id">
		            	<option value="0">--Select Payment Type--</option>
		            	@foreach($payments as $payment)
	            		<option value="{{$payment->id}}"> {{$payment->name}} </option>
	            		@endforeach
		            </select>
	                @error('payment_id')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3 hide 1">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Admission Collection :</label>
		          <div>
		            <input id="admission_amt" type="number" class="form-control @error('admission_amt') is-invalid @enderror" name="admission_amt" placeholder="Admission Amount">
	                @error('admission_amt')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3 hide 1">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Discharge Collection :</label>
		          <div>
		            <input id="discharge_amt" type="number" class="form-control @error('discharge_amt') is-invalid @enderror" name="discharge_amt" placeholder="Discharge Amount">
	                @error('discharge_amt')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-6 hide 2 3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Upload Insurance card :</label>
		          <div>
		            <input id="insurance" type="file" class="form-control @error('insurance') is-invalid @enderror" name="insurance" placeholder="Upload your Insurance Card">
	                @error('insurance')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      	</div>

        <div class="form-footer">
          <button type="submit" class="btn btn-primary">Book IPD</button>
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