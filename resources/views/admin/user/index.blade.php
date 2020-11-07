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
		    	<h2 class="page-title">Users  <span class="text-muted text-h5 mt-2 pl-2">{{$users->count()}} peoples</span></h2>
	    	</div>
	    	<div class="col-md-6 col-12 col-xs-12 col-sm-12" align="right">
	    		<a class="btn btn-success text-white" href="{{route('admin.user.create')}}">Add New User</a>
	    	</div>
	    </div>
	</div>
	@if($users->count())
		<div class="row">
		  	@foreach($users as $user)
		    <div class="col-md-6 col-lg-4">
		      <div class="card">
		        <div class="card-body">
		          <div class="row row-sm align-items-center">
		            <div class="col-auto">
		              <span class="avatar avatar-md" style="background-image: url('{{asset('assets/backend/img/static/admin-avatar.png')}}')"></span>
		            </div>
		            <div class="col">
		              <h3 class="mb-0">{{$user->name}}</h3>
		              <div class="text-muted text-h5"><a href="mailto:{{$user->email}}" class="text-primary">{{$user->email}}</a></div>
		              <div class="text-muted text-h5"><a href="callto:{{$user->phone}}" class="text-primary">{{$user->phone}}</a></div>
		            </div>
		            <div class="col-auto lh-1 align-self-start">
		              <span class="badge bg-gray-lt">
		                {{$user->city}}
		              </span>
		            </div>
		          </div>
		          <div class="row align-items-center mt-4">
		            <div class="col">
		              <div>
		                <div class="d-flex mb-1 align-items-center lh-1">
		                  <div class="text-h5 font-weight-bolder m-0"><strong class="text-success">Creation Date: </strong> {{$user->created_at}}</div>
		                </div>
		              </div>
		            </div>
		            <div class="col-auto">
		              <div class="btn-list">
				        <form action="{{ route('admin.user.destroy', $user->id)}}" method="post">
				          @csrf
				          @method('DELETE')
				          <button class="btn btn-danger btn-sm text-white" type="submit">Delete User</button>
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