@extends('layouts.backend.app')

@section('content')
    <div class="container-xl card">
    	<div class="row">
    		<div class="col-md-12 col-12 pt-3" align="center">
    			<strong style="font-size: 20px;">IPD SCHEDULE</strong>
    		</div>
    		<div class="px-5">
    			<div class="row">
    				<div class="col-md-3">
    					<strong>Patient Name -</strong>
    				</div>
    				<div class="col-md-9">
    					{{$ipd->patient}}
    				</div>
                    <div class="col-md-3">
                        <strong>User Name -</strong>
                    </div>
                    <div class="col-md-9">
                        {{$ipd->user->name}}
                    </div>
    				<div class="col-md-3">
    					<strong>Treatment -</strong>
    				</div>
    				<div class="col-md-9">
    					{{$ipd->treatment->name}}
    				</div>
                    <div class="col-md-3">
                        <strong>Doctor Name -</strong>
                    </div>
                    <div class="col-md-9">
                        {{$ipd->doctor->name}}
                    </div>
                    <div class="col-md-3">
                        <strong>Hospital Name -</strong>
                    </div>
                    <div class="col-md-9">
                        {{$ipd->hospital->name}}
                    </div>
    				<div class="col-md-3">
    					<strong>Hospital Room Category -</strong>
    				</div>
    				<div class="col-md-9">
    					{{$ipd->room->name}}
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
    					<strong>Surgery Date -</strong>
    				</div>
    				<div class="col-md-9">
                        <?php $date = date('d-M-Y', strtotime($ipd->surgery_date)); echo $date; ?>
                    </div>
    				<div class="col-md-3">
    					<strong>Arrival Time at the center -</strong>
    				</div>
    				<div class="col-md-9">
                        <?php $arrival_time = $ipd->arrival_time; echo date('h:i a', strtotime($arrival_time)); ?>
                    </div>
    				<div class="col-md-3">
    					<strong>Treatment Time -</strong>
    				</div>
    				<div class="col-md-9">
                        <?php $treatment_time = $ipd->treatment_time; echo date('h:i a', strtotime($treatment_time)); ?>
                    </div>
    				<div class="col-md-3">
    					<strong>Test -</strong>
    				</div>
    				<div class="col-md-9">
    					{{$ipd->test}}
    				</div>
    				<div class="col-md-3">
    					<strong>Attendant -</strong>
    				</div>
    				<div class="col-md-9">
    					{{$ipd->attendant}}
    				</div>
    				<div class="col-md-3">
    					<strong>Payment Type -</strong>
    				</div>
    				<div class="col-md-9">
    					{{$ipd->payment->name}}
    				</div>
    				<div class="col-md-3">
    					<strong>Aadhar Card -</strong>
    				</div>
    				<div class="col-md-9">
    					<img src="{{asset('aadhar/'.$ipd->aadhar)}}" width="80px">
    				</div>
                    @if($ipd->insurance != NULL)
                    <div class="col-md-3 pt-2">
                        <strong>Insurance Card -</strong>
                    </div>
                    <div class="col-md-9 pt-2">
                        <img src="{{asset('insurance/'.$ipd->insurance)}}" width="80px">
                    </div>
                    @else
                    @endif

    				<div class="col-md-3 my-4">    					
    				</div>
    				<div class="col-md-9 my-4">
    					<a class="tooltip1">
                          <button onclick="myFunction()" onmouseout="outFunc()" class="btn btn-primary">
                            <span class="tooltiptext" id="myTooltip">Copy</span>
                          </button>
                        </a>
    					<a href="{{route('doctor.ipd.index')}}" class="btn btn-success">Back</a>
    				</div>

    			</div>
    		</div>
    	</div>
    </div>
<div style="position: absolute;left: -100%;">
    <textarea type="text" id="myInput">
*IPD Schedule :*


*Patient Name :* {{$ipd->patient}}

*Glamyo Buddy :* {{$ipd->user->name}}

*Doctor Name :* {{$ipd->doctor->name}}

*Treatment :* {{$ipd->treatment->name}}

*Hospital Name :* {{$ipd->hospital->name}}

*Hospital Room Category :* {{$ipd->room->name}}

*Address :* {{$hospital->address}}

*Location :* {{$hospital->location}}

*Surgery Date :* <?php $date = date('d-M-Y', strtotime($ipd->surgery_date)); echo $date; ?>


*Arrival Time :* <?php $arrival_time = $ipd->arrival_time; echo date('h:i a', strtotime($arrival_time)); ?>


*Treatment Time :* <?php $treatment_time = $ipd->treatment_time; echo date('h:i a', strtotime($treatment_time)); ?>


*Test :* {{$ipd->test}}

*Attendant :* {{$ipd->attendant}}

*Payment Type :* {{$ipd->payment->name}}


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