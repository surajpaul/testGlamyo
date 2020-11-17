@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container-fluid px-4 pt-4 card">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12 col-xs-12 col-sm-12" align="left">
		    	<h2 class="page-title">IPDs  <span class="text-muted text-h5 mt-2 pl-2">{{$ipds->total()}} items</span></h2>
	    	</div>
	    	<div class="col-md-6 col-12 col-xs-12 col-sm-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.ipd.create')}}">Add New IPD</a>
	    	</div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12 col-12" style="overflow-x:auto;">
			<table id="ipd" class="display">
		        <tr>
		        	<th class="">id</th>
		            <th>Patient</th>
		            <th>Phone</th>
		            <th>user</th>
		            <th>Doctor</th>
		            <th>Hospital</th>
		            <th>Room</th>
		            <th>treatment</th>
		            <th>surgery_date</th>
		            <th>arrival time</th>
		            <th>treatment time</th>
		            <th>test</th>
		            <th>aadhar</th>
		            <th>insurance</th>
		            <th>payment type</th>
		            <th>On admission</th>
		            <th>on discharge</th>
		            <th>billed amt</th>
		            <th>settled amt</th>
		            <th>hospital share</th>
		            <th>glamyo share</th>
		            <th>doctor share</th>
		            <th>status</th>
		        </tr>
			</table>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
   var table = $('#ipd').DataTable({ 
        select: false,
        "columnDefs": [{
            className: "Name", 
            "targets":[0],
            "visible": false,
            "searchable":false
        }]
    });
  $('#ipd').on( 'click', 'tr', function () {
    alert(table.row( this ).data()[0]);
} );
});
</script>
@endsection