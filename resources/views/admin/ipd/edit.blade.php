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
      <h3 class="card-title">Edit IPD</h3>
    </div>
    <div class="card-body">
      <form method="post" action="{{ route('admin.ipd.update', $ipd->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
      	<div class="row">
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Patient Name:</label>
		          <div >
		            <input id="patient" type="text" class="form-control @error('patient') is-invalid @enderror" name="patient" value="{{ $ipd->patient }}" required>
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
		            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $ipd->phone }}" required>
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
		            	@foreach($doctors as $doctor)
		            	<?php
				            $selected = '';
				            if($doctor->id == $ipd->doctor->id)
				            { $selected = 'selected="selected"';}
				        ?>
		            	<option value='{{ $doctor->id }}' {{$selected}} >{{ $doctor->name }}</option>
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
		            	@foreach($hospitals as $hospital)
		            	<?php
				            $selected = '';
				            if($hospital->id == $ipd->hospital->id)
				            { $selected = 'selected="selected"';}
				        ?>
		            	<option value='{{ $hospital->id }}' {{$selected}} >{{ $hospital->name }}</option>
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
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Room Category:</label>
		          <div>
		            <select class="form-select" name="room_id">
		            	@foreach($rooms as $room)
		            	<?php
				            $selected = '';
				            if($room->id == $ipd->room->id)
				            { $selected = 'selected="selected"';}
				        ?>
		            	<option value='{{ $room->id }}' {{$selected}} >{{ $room->name }}</option>
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
		            	@foreach($treatments as $treatment)
		            	<?php
				            $selected = '';
				            if($treatment->id == $ipd->treatment->id)
				            { $selected = 'selected="selected"';}
				        ?>
		            	<option value='{{ $treatment->id }}' {{$selected}} >{{ $treatment->name }}</option>
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
		            <input id="surgery_date" type="date" class="form-control @error('surgery_date') is-invalid @enderror" name="surgery_date" value="{{ $ipd->surgery_date }}" required>
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
		            <input id="arrival_time" type="time" class="form-control @error('arrival_time') is-invalid @enderror" name="arrival_time" value="{{ $ipd->arrival_time }}" required>
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
		            <input id="treatment_time" type="time" class="form-control @error('treatment_time') is-invalid @enderror" name="treatment_time" value="{{ $ipd->treatment_time }}" required>
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
		            <input id="test" type="text" class="form-control @error('test') is-invalid @enderror" name="test" value="{{$ipd->test}}">
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
		            <input id="attendant" type="text" class="form-control @error('attendant') is-invalid @enderror" name="attendant" value="{{$ipd->attendant}}">
	                @error('attendant')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Upload Aadhar card :</label>
		          <div>
		            <input id="aadhar" type="file" class="form-control @error('aadhar') is-invalid @enderror" name="aadhar" value="{{$ipd->aadhar}}">
		            <input type="text" class="d-none" name="aadhar_hide" value="{{$ipd->aadhar}}">
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
		            	@foreach($payments as $payment)
		            	<?php
				            $selected = '';
				            if($payment->id == $ipd->payment->id)
				            { $selected = 'selected="selected"';}
				        ?>
		            	<option value='{{ $payment->id }}' {{$selected}} >{{ $payment->name }}</option>
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
		            <input id="admission_amt" type="number" class="form-control @error('admission_amt') is-invalid @enderror" name="admission_amt" value="{{$ipd->admission_amt}}">
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
		            <input id="discharge_amt" type="number" class="form-control @error('discharge_amt') is-invalid @enderror" name="discharge_amt" value="{{$ipd->discharge_amt}}">
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
			            <input id="insurance" type="file" class="form-control @error('insurance') is-invalid @enderror" name="insurance" value="{{$ipd->insurance}}">
			            <input type="text" class="d-none" name="insurance_hide" value="{{$ipd->insurance}}">
		                @error('insurance')
		                    <span class="invalid-feedback" role="alert">
		                        <strong>{{ $message }}</strong>
		                    </span>
		                @enderror
			        </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Billed Amount :</label>
		          <div>
		            <input id="billed_amt" type="number" class="form-control @error('billed_amt') is-invalid @enderror" name="billed_amt" value="{{ $ipd->billed_amt }}">
	                @error('billed_amt')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Settled Amount :</label>
		          <div>
		            <input id="settled_amt" type="number" class="form-control @error('settled_amt') is-invalid @enderror" name="settled_amt" value="{{ $ipd->settled_amt }}">
	                @error('settled_amt')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Hospital Share ( % ) :</label>
		          <div>
		            <input id="hospital_share" type="number" class="form-control @error('hospital_share') is-invalid @enderror" name="hospital_share" value="{{ $ipd->hospital_share }}">
	                @error('hospital_share')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Glamyo Share ( % ) :</label>
		          <div>
		            <input id="glamyo_share" type="number" class="form-control @error('glamyo_share') is-invalid @enderror" name="glamyo_share" value="{{ $ipd->glamyo_share }}">
	                @error('glamyo_share')
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
		            <input id="user_id" type="number" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ $ipd->user_id }}">
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3 d-none">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Status :</label>
		          <div>
		            <input id="status" type="number" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ $ipd->status }}">
		          </div>
		        </div>
      		</div>
      	</div>

        <div class="form-footer">
          <button type="submit" class="btn btn-primary">Update IPD</button>
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