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
      <form method="post" action="{{ route('doctor.opd.update', $opd->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
      	<div class="row">
      		<div class="col-md-12">
      			<div class="form-group mb-3">
		          <label class="form-label">Upload Prescription :</label>
		          <div>
		            <input id="prescription" type="file" class="form-control @error('prescription') is-invalid @enderror" name="prescription" value="{{$opd->prescription}}">
		            <input type="text" name="prescription_hide_user" class="d-none" value="{{$opd->prescription}}">
	                @error('prescription')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
		          </div>
		        </div>
      		</div>
      	</div>

        <div class="form-footer">
          <button type="submit" class="btn btn-primary">Update Prescription</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection