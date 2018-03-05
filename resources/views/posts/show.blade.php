@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="pane panel-primary">
			<div class="panel-body">
				{!! $post->description !!}
			</div>
		</div>
		<hr>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form action="{{action('PostController@createComment', $post->id)}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<textarea name="body" class="form-control">
						</textarea>
					</div>

					<button type="submit" class="btn btn-primary">Comment</button>
				</form>
			</div>
		</div>

		<hr>
		<div class="panel panel-primary">
			<div class="panel-body">
				@foreach ($post->comments as $comment)
					<ul class="list-group">
						<li class="list-group-item">
							{{$comment->user->name}}
						</li>

						<li class="list-group-item">
							{{$comment->body}}
						</li>
					</ul>
				@endforeach
			</div>
		</div>
	</div>
@endsection