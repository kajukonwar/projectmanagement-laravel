@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row">
		<div class="col-sm-7">
			<div class="alert alert-info" role="alert">Individual project details</div>

			<div class="panel panel-primary">
			  <div class="panel-heading">{!! $name !!}</div>
			  <div class="panel-body">
			    {!! $description !!}
			  </div>

			  <div class="panel-footer">
			  	<a href="{{ route('tasks.create', $id)}}" role="button" class="btn btn-primary"> Create task</a>


			  </div>
			</div>

			<hr>

			<h3>Coments</h3>

			<div style="border:solid">
				<div class="panel panel-default">
					<div class="panel-body">
						<form method="post" action="{{action('ProjectController@createComment', ['id' => $id])}}">
							{{ csrf_field()}}
							<div class="form-group">
								<textarea class="form-control" name="body"></textarea> 
							</div>

							<div class="form-group">
								<button class="btn btn-primary" type="submit">Comment</button>
							</div>
						</form>
					</div>
				</div>

				<hr>
				<div class="panel">
					<div class="panel-body">

						@foreach ($comments as $comment)
						<div class="media">
						  <div class="media-left">
						   
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading">
						    	{{$comment->user->name}}
						    </h4>
						    <p>{{$comment->body}}</p>
						  </div>
						</div>

						@endforeach
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-5">

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 class="text-center"> Tasks</h4>
				</div>

				<div class="panel-body">
					<ul class="list-group">
					

					@foreach($tasks as $task)
						<li class="list-group-item"><a href="{{route('tasks.show', ['id' => $task->id])}}"> {{ $task->name}}</a></li>
					@endforeach


					</ul>
				</div>
			</div>

		</div>
	</div>
	

</div>
@endsection