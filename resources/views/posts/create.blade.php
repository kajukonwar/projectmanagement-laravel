@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="alert alert-info" role="alert">Create a new post</div>
		<div class="alert alert-info" role="alert">
			@if (Session::has('status'))
				{!! session('status')!!}
			@endif
		</div>
		<form method="post" action="{{route('posts.store')}}">
			{{ csrf_field() }}
			<input type="hidden" name="task_id" id="task_id" value="{!! $task_id !!}">
			<div class="form-group">
				<textarea name="description"></textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit"> Save</button>
			</div>
		</form>
	</div>
@endsection