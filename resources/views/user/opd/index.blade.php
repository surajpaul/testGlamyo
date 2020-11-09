@extends('layouts.backend.app')

@section('content')
<style>
	strong{
		font-weight: bold;
	}
	table.dataTable thead .sorting:after{
		display: none;
	}
	table.dataTable thead .sorting_asc:after{
		display: none;
	}
	.badge{
		border-radius: 28px;
		text-transform: capitalize;
		padding: 2px 10px !important;
	}
	#DataTables_Table_0_paginate{
		float: right;
	}
	.pagination #DataTables_Table_0_previous{
		border: 1px solid #1175b3;
	    border-radius: 5px;
	    padding: 0px 10px;
	    background: #1175b3; 
	}
	.pagination #DataTables_Table_0_previous a{
	    color: #fff !important;
	}
	.pagination #DataTables_Table_0_next{
		border: 1px solid #1175b3;
	    border-radius: 5px;
	    padding: 0px 10px;
	    background: #1175b3; 
	}
	.pagination #DataTables_Table_0_next a{
	    color: #fff !important;
	}
	.pagination .active{
		border: 1px solid #1175b3;
	    border-radius: 5px;
	    padding: 0px 10px;
	    background: #1175b3;
	    margin: 0px 6px;
	}
	.pagination .active a{
		color: #fff !important;
	}
	#DataTables_Table_0_length .text-muted .input-sm{
		margin: 0px 6px;
	}
	#DataTables_Table_0_filter .text-muted .form-control-sm{
		margin: 0px 0px 0px 10px;
	}
	#DataTables_Table_0{
		margin-bottom: 6%;
		margin-top: 2%;
	}
	.dropdown-item.active, .dropdown-item:active{
		outline: none;
	}
	:focus {
	    outline: none !important;
	}
</style>
<div class="container-fluid px-4 pt-4 card">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12 col-xs-12 col-sm-12" align="left">
		    	<h2 class="page-title">opds  <span class="text-muted text-h5 mt-2 pl-2">{{$opds->total()}} items</span></h2>
	    	</div>
	    	<div class="col-md-6 col-12 col-xs-12 col-sm-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('user.opd.create')}}">Add New opd</a>
	    	</div>
	    </div>
	</div>
	@if($opds->count())
	<div class="row">
	    <div class="col-md-12 col-12" style="overflow-x:auto;">
	      <table class="table table-bordered table-hover">
	        <thead>
	          <tr>
	          	<th class="d-none">created_at</th>
	            <th>Patient</th>
	            <th>Phone</th>
	            <th>Doctor</th>
	            <th>Hospital</th>
	            <th>Fee</th>
	            <th>treatment</th>
	            <th>appointment_date</th>
	            <th>appointment_time</th>
	            <th>status</th>
	            <th>Action</th>
	          </tr>
	        </thead>
	        <tbody style="padding-bottom: 200px;">
	        	@foreach($opds as $opd)
	        	<tr>
	        		<td class="d-none">{{$opd->created_at}}</td>
	        		<td>{{$opd->patient}}</td>
	        		<td>{{$opd->phone}}</td>
	        		<td>{{$opd->doctor->name}}</td>
	        		<td>{{$opd->hospital->name}}</td>
	        		<td>{{$opd->fee}}</td>
	        		<td>{{$opd->treatment->name}}</td>
	        		<td><?php $date = date('d-M-Y', strtotime($opd->appointment_date)); echo $date; ?></td>
	        		<td>
	        			<?php $appointment_time = $opd->appointment_time; echo date('h:i a', strtotime($appointment_time)); ?>
	        		</td>
	        		@if($opd->status == NULL)
	        		<td class="badge bg-info" style="margin: 10px auto;display: block;">Active</td>
	        		@elseif($opd->status == 1)
	        		<td class="badge bg-success" style="margin: 10px auto;display: block;">Completed</td>
	        		@elseif($opd->status == 2)
	        		<td class="badge bg-danger" style="margin: 10px auto;display: block;">Cancelled</td>
	        		@endif
	        		<td class="text-center">
	                    <div class="dropdown">
						  <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <i class="icon" data-feather="more-vertical"></i>
						  </a>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						  	@if($opd->status == NULL)
				            <form method="post" action="{{ route('user.opd.complete', $opd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value="1"/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="check"></i> Complete OPD
				              	</button>
				            </form>
				            <form method="post" action="{{ route('user.opd.complete', $opd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value="2"/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="x"></i> Cancel OPD
				              	</button>
				            </form>
				            @elseif($opd->status == 1)
				            <form method="post" action="{{ route('user.opd.active', $opd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value=""/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="check"></i> Active OPD
				              	</button>
				            </form>
				            <form method="post" action="{{ route('user.opd.complete', $opd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value="2"/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="x"></i> Cancel OPD
				              	</button>
				            </form>
				            @elseif($opd->status == 2)
				            <form method="post" action="{{ route('user.opd.active', $opd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value=""/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="check"></i> Active OPD
				              	</button>
				            </form>
				            <form method="post" action="{{ route('user.opd.complete', $opd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value="1"/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="check"></i> Complete OPD
				              	</button>
				            </form>
				            @endif
				            <a class="dropdown-item" href="{{ route('user.opd.show', $opd->id)}}">
						    	<i class="icon mr-2" data-feather="edit"></i> View
						    </a>
						    <a class="dropdown-item" href="{{ route('user.opd.edit', $opd->id)}}">
						    	<i class="icon mr-2" data-feather="edit"></i> Edit OPD
						    </a>
					    	<form action="{{ route('user.opd.destroy', $opd->id)}}" method="post">
			                  @csrf
			                  @method('DELETE')
			                  <button class="dropdown-item" type="submit">
			                  	<i class="icon mr-2" data-feather="trash-2"></i> Delete OPD
			              	  </button>
			                </form>
						  </div>
						</div>
	                </td>
	        	</tr>
	        	@endforeach
	        </tbody>
	      </table>
	      <div class="row" style="float: right;" align="right">
	      	{{$opds->links()}}
	      </div>
	    </div>
  	</div>
	@else
	@endif
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script src="https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js"></script>
<script type="text/javascript">
	$('table').DataTable();
	$('table').DataTable().order([0, 'desc']).draw();
</script>

@endsection