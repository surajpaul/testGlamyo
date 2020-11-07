@extends('layouts.backend.app')

@section('content')
<style>
	strong{
		font-weight: bold;
	}
</style>
<div class="container-xl">
	<div class="page-header">
	    <div class="row">
	    	<div class="col-md-6 col-12 col-xs-12 col-sm-12" align="left">
		    	<h2 class="page-title">Doctors  <span class="text-muted text-h5 mt-2 pl-2">{{$doctors->count()}} peoples</span></h2>
	    	</div>
	    	<div class="col-md-6 col-12 col-xs-12 col-sm-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.doctor.create')}}">Add New Doctor</a>
	    	</div>
	    </div>
	</div>
	@if($doctors->count())
		<div class="row">
		  	@foreach($doctors as $doctor)
		    <div class="col-md-6 col-lg-4">
		      <div class="card">
		        <div class="card-body">
		          <div class="row row-sm align-items-center">
		            <div class="col-auto">
		              <span class="avatar avatar-md" style="background-image: url('{{asset('assets/backend/img/static/admin-avatar.png')}}')"></span>
		            </div>
		            <div class="col">
		              <h3 class="mb-0">{{$doctor->name}}</h3>
		              <div class="text-muted text-h5"><a href="mailto:{{$doctor->email}}" class="text-primary">{{$doctor->email}}</a></div>
		              <div class="text-muted text-h5"><a href="callto:{{$doctor->phone}}" class="text-primary">{{$doctor->phone}}</a></div>
		            </div>
		            <div class="col-auto lh-1 align-self-start">
		              <span class="badge bg-gray-lt">
		                {{$doctor->city}}
		              </span>
		            </div>
		          </div>
		          <div class="row align-items-center mt-4">
		            <div class="col">
		              <div>
		                <div class="d-flex mb-1 align-items-center lh-1">
		                  <div class="text-h5 font-weight-bolder m-0"><strong class="text-success">Creation Date: </strong> {{$doctor->created_at}}</div>
		                </div>
		              </div>
		            </div>
		            <div class="col-auto">
		              <div class="btn-list">
		              	<a href="{{ route('admin.doctor.edit',$doctor->id)}}" class="edit">
		              		<button class="btn btn-info btn-sm text-white" type="submit">Edit</button>
		              	</a>
		              </div>
		            </div>
		            <div class="col-auto">
		              <div class="btn-list">
				        <form action="{{ route('admin.doctor.destroy', $doctor->id)}}" method="post">
				          @csrf
				          @method('DELETE')
				          <button class="btn btn-danger btn-sm text-white" type="submit">Delete</button>
				        </form>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		    @endforeach
		</div>
	@else
	@endif
</div>

@endsection