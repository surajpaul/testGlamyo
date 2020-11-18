@extends('layouts.backend.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
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



<!-- try -->
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>patient</th>
            <th>phone</th>
            <th>Action</th>
        </tr>
    </thead>
    </table>
<!-- try end -->
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
// $(document).ready(function() {
//     $('#example').DataTable( {
//         "ajax": 'http://localhost:81/test/public/api/users'
//     } );
// } );


$(document).ready(function(){
    fillTable();
})
//fetch api (AJAX) to fill table
fillTable = () => {
    fetch('http://localhost:81/test/public/api/users')
    .then(response => response.json())
    .then(data => {
        let html = '';
        for (i = 0; i < data.length; i++){
            html += '<tr>'+
                        '<td class="tdPatient pv3 w-35 pr3 bb b--black-20">'+ data[i].patient + '</td>'+
                        '<td class="tdPhone pv3 w-35 pr3 bb b--black-20">'+ data[i].phone + '</td>'+
                        '<td class="pv3 w-30 pr3 bb b--black-20">'+
                          '<div class="btn-group" role="group" aria-label="Basic example">'+
                            '<a class="editButton f6 grow no-underline ba bw1 ph3 pv2 mb2 dib black pointer"  data-toggle="modal">EDIT</a>'+
                            '<a class="deleteButton f6 grow no-underline ba bw1 ph3 pv2 mb2 dib black pointer"  data-toggle="modal">DELETE</a>'+
                          '</div>'+
                        '</td>'+
                    '</tr>'
        }
        $('#example').html(html);
})
    .catch(err => console.log("ERROR!: ", err))
}
</script>
@endsection