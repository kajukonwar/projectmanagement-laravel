@extends('layouts.app')

@section('content')
<div class="container">
	@foreach($projects as $project)

	<div class="panel panel-primary">
	  <div class="panel-heading">{!! $project->name !!}</div>
	  <div class="panel-body">
	    {!! $project->description !!}
	  </div>
	  <div class="panel-footer">
	  	<a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary" role="button"> View details</a>
	  </div>
	</div>
	@endforeach
</div>
@endsection