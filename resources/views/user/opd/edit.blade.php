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
      <h3 class="card-title">Edit opd</h3>
    </div>
    <div class="card-body">
      <form method="post" action="{{ route('user.opd.update', $opd->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
      	<div class="row">
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Patient Name:</label>
		          <div >
		            <input id="patient" type="text" class="form-control @error('patient') is-invalid @enderror" name="patient" value="{{ $opd->patient }}" required>
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
		            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $opd->phone }}" required>
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
				            if($doctor->id == $opd->doctor->id)
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
				            if($hospital->id == $opd->hospital->id)
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
      			<div class="form-group mb-3 ">
		          <label class="form-label">Treatment :</label>
		          <div>
		            <select class="form-select" name="treatment_id">
		            	@foreach($treatments as $treatment)
		            	<?php
				            $selected = '';
				            if($treatment->id == $opd->treatment->id)
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
		          <label class="form-label">Appointment Date :</label>
		          <div>
		            <input id="appointment_date" type="date" class="form-control @error('appointment_date') is-invalid @enderror" name="appointment_date" value="{{ $opd->appointment_date }}" required>
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
		            <input id="appointment_time" type="time" class="form-control @error('appointment_time') is-invalid @enderror" name="appointment_time" value="{{ $opd->appointment_time }}" required>
	                @error('appointment_time')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3">
      			<div class="form-group mb-3">
		          <label class="form-label">Fee :</label>
		          <div>
		            <input id="fee" type="text" class="form-control @error('fee') is-invalid @enderror" name="fee" value="{{$opd->fee}}">
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
		          <label class="form-label">Billed Amount :</label>
		          <div>
		            <input id="billed_amt" type="number" class="form-control @error('billed_amt') is-invalid @enderror" name="billed_amt" value="{{ $opd->billed_amt }}">
	                @error('billed_amt')
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
		            <input id="hospital_share" type="number" class="form-control @error('hospital_share') is-invalid @enderror" name="hospital_share" value="{{ $opd->hospital_share }}">
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
		            <input id="glamyo_share" type="number" class="form-control @error('glamyo_share') is-invalid @enderror" name="glamyo_share" value="{{ $opd->glamyo_share }}">
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
		            <input id="user_id" type="number" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ $opd->user_id }}">
		          </div>
		        </div>
      		</div>
      		<div class="col-md-3 d-none">
      			<div class="form-group mb-3 ">
		          <label class="form-label">Status :</label>
		          <div>
		            <input id="status" type="number" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ $opd->status }}">
		          </div>
		        </div>
      		</div>
      	</div>

        <div class="form-footer">
          <button type="submit" class="btn btn-primary">Update opd</button>
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