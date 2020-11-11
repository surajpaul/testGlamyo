@extends('layouts.backend.app')

@section('content')
    <div class="container-xl card">
    	<div class="row">
    		<div class="col-md-12 col-12 pt-3" align="center">
    			<strong style="font-size: 20px;">OPD SCHEDULE</strong>
    		</div>
    		<div class="px-5">
    			<div class="row">
    				<div class="col-md-3">
    					<strong>Patient Name -</strong>
    				</div>
    				<div class="col-md-9">
    					{{$opd->patient}}
    				</div>
                    <div class="col-md-3">
                        <strong>User Name -</strong>
                    </div>
                    <div class="col-md-9">
                        {{$opd->user->name}}
                    </div>
                    <div class="col-md-3">
                        <strong>Doctor Name -</strong>
                    </div>
                    <div class="col-md-9">
                        {{$opd->doctor->name}}
                    </div>
                    <div class="col-md-3">
                        <strong>Hospital Name -</strong>
                    </div>
                    <div class="col-md-9">
                        {{$opd->hospital->name}}
                    </div>
    				<div class="col-md-3">
    					<strong>Treatment -</strong>
    				</div>
    				<div class="col-md-9">
    					{{$opd->treatment->name}}
    				</div>
    				<div class="col-md-3">
    					<strong>Address -</strong>
    				</div>
    				<div class="col-md-9">
    					{{$hospital->address}}
    				</div>
    				<div class="col-md-3">
    					<strong>Location -</strong>
    				</div>
    				<div class="col-md-9">
    					<a href="{{$hospital->location}}">{{$hospital->location}}</a>
    				</div>
    				<div class="col-md-3">
    					<strong>Appointment Date -</strong>
    				</div>
    				<div class="col-md-9">
                        <?php $date = date('d-M-Y', strtotime($opd->appointment_date)); echo $date; ?>
                    </div>
    				<div class="col-md-3">
    					<strong>Appointment Time at the center -</strong>
    				</div>
    				<div class="col-md-9">
                        <?php $appointment_time = $opd->appointment_time; echo date('h:i a', strtotime($appointment_time)); ?>
                    </div>
    				<div class="col-md-3">
    					<strong>Fee -</strong>
    				</div>
    				<div class="col-md-9">
    					{{$opd->fee}}
    				</div>
    				<div class="col-md-3 my-4">    					
    				</div>
    				<div class="col-md-9 my-4">
    					<a class="tooltip1">
                          <button onclick="myFunction()" onmouseout="outFunc()" class="btn btn-primary">
                            <span class="tooltiptext" id="myTooltip">Copy</span>
                          </button>
                        </a>
    					<a href="{{route('hospital.opd.index')}}" class="btn btn-success">Back</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
<div style="position: absolute;left: -100%;">
    <textarea type="text" id="myInput">
*OPD Schedule :*


*Patient Name :* {{$opd->patient}}

*Glamyo Buddy :* {{$opd->user->name}}

*Doctor Name :* {{$opd->doctor->name}}

*Treatment :* {{$opd->treatment->name}}

*Hospital Name :* {{$opd->hospital->name}}

*Address :* {{$hospital->address}}

*Location :* {{$hospital->location}}

*Appointment Date :* <?php $date = date('d-M-Y', strtotime($opd->appointment_date)); echo $date; ?>


*Appointment Time :* <?php $appointment_time = $opd->appointment_time; echo date('h:i a', strtotime($appointment_time)); ?>


*Fee :* {{$opd->fee}}


Regards
Glamyo Health
    </textarea>
</div>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 999999);
  document.execCommand("copy");
  var tooltip1 = document.getElementById("myTooltip");
  tooltip1.innerHTML = "Copied ";
}
</script>
@endsection