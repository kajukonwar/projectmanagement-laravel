@extends('layouts.app')

@section('content')
<div class="container">
	<div class="alert alert-info" role="alert">
	  <h3 class="text-center">Create your project</h3>
	</div>
	{!! Form::open(['route' => 'projects.store']) !!}

		<div class="form-group">
			<label> Project name</label>

		    {!! Form::text('name', '', ['class' => 'form-control']) !!}
		</div>	  

		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"></textarea>
		</div>  

		<div class="form-group">
			<button type="submit" class="btn btn-primary mx-auto">Submit</button>
		</div>
	{!! Form::close() !!}
</div>
@endsection