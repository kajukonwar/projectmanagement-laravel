@extends('layouts.app');

@section('content')
	<div class="container">
		<form method="post" action="{{route('tasks.store')}}">
			{{ csrf_field() }}
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Enter task name">
			</div>

			<div class="form-group">
				<select class="form-control" name="project_id">

					@foreach ($projects as $project)

						@if ($project->id == $selected_project)
							<option value='{!! $project->id !!}' selected>{!! $project->name !!}</option>
						@else

							<option value='{!! $project->id !!}' >{!! $project->name !!}</option>
						@endif
						
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>
	</div>
@endsection