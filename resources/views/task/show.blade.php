@extends('layouts.app')

@section('content')
	<div class="container">
		
		<div class="row">
			<div class="col-sm-7">
				<div class="panel panel-primary">
					<div class="panel-heading">
						{!! $task->name !!}
					</div>

					<div class="panel-body">
						Belongs to project:> {!! $task->project->name !!}
					</div>
				</div>

				<div>
					<a href="{{ route('posts.create', $task->id)}}" role="button" class="btn btn-primary"> Create Post </a>

					
				</div>

				<hr>
				<div class="panel panel-default">
					<h3>Comments</h3>
					<form action="{{action('TaskController@createComment', $task->id)}}" method="post">
						{{csrf_field()}}
						<div class="form-group">
							<textarea name="body"></textarea>
						</div>

						<button class="btn btn-primary" type="submit">Save</button>
					</form>
				</div>
				<hr>

				<div class="panel panel-default">
					<div class="panel-body">
						@foreach ($task->comments as $comment)

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

			<div class="col-sm-5">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Posts
					</div>
					<div class="panel-body">
						<ul class="list-group">
							@foreach ($task->posts as $post)
							<li class="list-group-item"><a href="{{route('posts.show', [$post->id])}}">{!! $post->description !!}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>


	</div>
@endsection