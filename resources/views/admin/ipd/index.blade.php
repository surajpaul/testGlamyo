@extends('layouts.backend.app')

@section('css')
<!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"> -->
<!-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/vuetify@1.0.4/dist/vuetify.min.css"> -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/jquery.dataTables.min.css">
@endsection

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
		    	<h2 class="page-title">IPDs  <span class="text-muted text-h5 mt-2 pl-2">{{$ipds->total()}} items</span></h2>
	    	</div>
	    	<div class="col-md-6 col-12 col-xs-12 col-sm-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.ipd.create')}}">Add New IPD</a>
	    	</div>
	    </div>
	</div>
	@if($ipds->count())
	<div class="row">
	    <div class="col-md-12 col-12" style="overflow-x:auto;">
	      <table class="table table-bordered table-hover">
	        <thead>
	          <tr>
	          	<th class="d-none">id</th>
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
	            <th>Action</th>
	          </tr>
	        </thead>
	        <tbody id="dataTables" style="padding-bottom: 200px;">
	        	@foreach($ipds as $ipd)
	        	<tr>
	        		<td class="d-none">{{$ipd->id}}</td>
	        		<td>{{$ipd->patient}}</td>
	        		<td>{{$ipd->phone}}</td>
	        		<td>{{$ipd->user->name}}</td>
	        		<td>{{$ipd->doctor->name}}</td>
	        		<td>{{$ipd->hospital->name}}</td>
	        		<td>{{$ipd->room->name}}</td>
	        		<td>{{$ipd->treatment->name}}</td>
	        		<td><?php $date = date('d-M-Y', strtotime($ipd->surgery_date)); echo $date; ?></td>
	        		<td>
	        			<?php $arrival_time = $ipd->arrival_time; echo date('h:i a', strtotime($arrival_time)); ?>
	        		</td>
	        		<td>
	        			<?php $treatment_time = $ipd->treatment_time; echo date('h:i a', strtotime($treatment_time)); ?>
	        		</td>
	        		<td>{{$ipd->test}}</td>
	        		<td>
	        			<img src="{{asset('aadhar/'.$ipd->aadhar)}}" width="50px">
	        		</td>
	        		@if($ipd->insurance == NULL)
	        		<td class="text-muted">NULL</td>
	        		@else
	        		<td>
	        			<img src="{{asset('insurance/'.$ipd->insurance)}}" width="50px">
	        		</td>
	        		@endif
	        		<td>{{$ipd->payment->name}}</td>
	        		<td>{{$ipd->on_admission}}</td>
	        		<td>{{$ipd->on_discharge}}</td>
	        		<td>{{$ipd->billed_amt}}</td>
	        		<td>{{$ipd->settled_amt}}</td>
	        		<td>{{$ipd->hospital_share}}</td>
	        		<td>{{$ipd->glamyo_share}}</td>
	        		<td>{{$ipd->doctor_share}}</td>
	        		@if($ipd->status == NULL)
	        		<td class="badge bg-info" style="margin: 10px auto;display: block;">Active</td>
	        		@elseif($ipd->status == 1)
	        		<td class="badge bg-success" style="margin: 10px auto;display: block;">Completed</td>
	        		@elseif($ipd->status == 2)
	        		<td class="badge bg-danger" style="margin: 10px auto;display: block;">Cancelled</td>
	        		@endif
	        		<td class="text-center">
	                    <div class="dropdown">
						  <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    <i class="icon" data-feather="more-vertical"></i>
						  </a>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						  	@if($ipd->status == NULL)
				            <form method="post" action="{{ route('admin.ipd.complete', $ipd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value="1"/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="check"></i> Complete IPD
				              	</button>
				            </form>
				            <form method="post" action="{{ route('admin.ipd.complete', $ipd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value="2"/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="x"></i> Cancel IPD
				              	</button>
				            </form>
				            @elseif($ipd->status == 1)
				            <form method="post" action="{{ route('admin.ipd.active', $ipd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value=""/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="check"></i> Active IPD
				              	</button>
				            </form>
				            <form method="post" action="{{ route('admin.ipd.complete', $ipd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value="2"/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="x"></i> Cancel IPD
				              	</button>
				            </form>
				            @elseif($ipd->status == 2)
				            <form method="post" action="{{ route('admin.ipd.active', $ipd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value=""/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="check"></i> Active IPD
				              	</button>
				            </form>
				            <form method="post" action="{{ route('admin.ipd.complete', $ipd->id) }}">
				                @csrf
				                @method('POST')
				                <input type="hidden" class="form-control" name="status" value="1"/>
				                <button class="dropdown-item" type="submit">
				                  	<i class="icon mr-2" data-feather="check"></i> Complete IPD
				              	</button>
				            </form>
				            @endif
				            <a class="dropdown-item" href="{{ route('admin.ipd.show', $ipd->id)}}">
						    	<i class="icon mr-2" data-feather="edit"></i> View
						    </a>
						    <a class="dropdown-item" href="{{ route('admin.ipd.edit', $ipd->id)}}">
						    	<i class="icon mr-2" data-feather="edit"></i> Edit IPD
						    </a>
					    	<form action="{{ route('admin.ipd.destroy', $ipd->id)}}" method="post">
			                  @csrf
			                  @method('DELETE')
			                  <button class="dropdown-item" type="submit">
			                  	<i class="icon mr-2" data-feather="trash-2"></i> Delete IPD
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
	      	{{$ipds->links()}}
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
$(document).ready(function() {
    $('table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } ).order([0, 'desc']).draw();
} );
</script>













<!-- ==================vuejs============================ -->

<!-- <div id="app">
  <v-app id="inspire">
    <v-card>
      <v-card-title>
        Users
        <v-spacer></v-spacer>
        <v-text-field
          append-icon="search"
          label="Search"
          single-line
          hide-details
          v-model="search"
        ></v-text-field>
      </v-card-title>
      <v-data-table
        :headers="headers"
        :items="items"
        :search="search"
      >
        <template slot="items" slot-scope="props">
          <td class="text-xs-left" v-text="props.item.patient"></td>
          <td class="text-xs-left" v-text="props.item.phone"></td>
          <td class="text-xs-left" v-text="props.item.user.name"></td>
          <td class="text-xs-left" v-text="props.item.doctor.name"></td>
          <td class="text-xs-left" v-text="props.item.hospital.name"></td>
          <td class="text-xs-left" v-text="props.item.room.name"></td>
          <td class="text-xs-left" v-text="props.item.treatment.name"></td>
        </template>
        <v-alert slot="no-results" :value="true" color="error" icon="warning" v-text="search">
          Your search for "" found no results.
        </v-alert>
      </v-data-table>
    </v-card>
  </v-app>
</div>

<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vuetify@1.0.4/dist/vuetify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
<script>
 new Vue({
  el: '#app',
   data () {
    return {
      search: '',
      headers: [
        { text: 'Patient', value: 'patient' },
        { text: 'Phone', value: 'phone' },
        { text: 'User', value: 'user' },
        { text: 'Doctor', value: 'doctor' },
        { text: 'Hospital', value: 'hospital' },
        { text: 'Room', value: 'room' },
        { text: 'Treatment', value: 'treatment' },
        // { text: 'Action', value: 'action', sortable: false }
      ],
      items: []
    };
  },
  created: function(){
      this.getData();
  },
  methods: {
      getData(){
          axios.get('http://localhost:81/test/public/api/users').then(response => {
                    this.items = response.data;
                });
      }
  },
});
</script> -->


<!-- <div id="tabledemo">
  Filter by anything: <input v-model="search">
  <hr>
  <data-table :users="filteredUsers"></data-table>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
<script>
Vue.component('data-table', {
  template: '<table></table>',
  props: ['users'],
  data() {
    return {
      headers: [
        { title: 'ID' },
        { title: 'Username', class: 'some-special-class' },
        { title: 'Real Name' },
        { title: 'Phone' },
        { title: 'Email' },
        { title: 'Website' }
      ],
      rows: [] ,
      dtHandle: null
    };
  },
  watch: {
    users(val, oldVal) {
      let vm = this;
      vm.rows = [];
      val.forEach(function (item) {
        let row = [];

        row.push(item.id);
        row.push(item.username);
        row.push(item.name);
        row.push(item.phone);
        row.push('<a href="mailto://' + item.email + '">' + item.email + '</a>');
        row.push('<a href="http://' + item.website + '" target="_blank">' + item.website + '</a>');

        vm.rows.push(row);
      });
      vm.dtHandle.clear();
      vm.dtHandle.rows.add(vm.rows);
      vm.dtHandle.draw();
    }
  },
  mounted() {
    let vm = this;
    vm.dtHandle = $(this.$el).DataTable({
      columns: vm.headers,
      data: vm.rows,
      searching: false,
      paging: false,
      info: false
    });
  }  
});

new Vue({
  el: '#tabledemo',
  data: {
    users: [],
    search: ''
  },
  computed: {
    filteredUsers: function () {
      let self = this;
      let search = self.search.toLowerCase();
      return self.users.filter(function (user) {
        return 	user.username.toLowerCase().indexOf(search) !== -1 ||
          user.name.toLowerCase().indexOf(search) !== -1 ||
          user.phone.indexOf(search) !== -1 ||
          user.email.toLowerCase().indexOf(search) !== -1 ||
          user.website.toLowerCase().indexOf(search) !== -1;
      });
    }
  },
  mounted() {
    let vm = this;
    $.ajax({
      url: 'https://jsonplaceholder.typicode.com/users',
      success(res) {
        vm.users = res;
      }
    });
  }
});
</script> -->
@endsection