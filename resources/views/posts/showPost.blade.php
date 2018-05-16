@extends('layouts.master')
@section('content')
<h1>{{ $post->title }}</h1>
{{ $post->body }}
<hr>
<div class="class comments">
	<ul class="list-group">
		@foreach ($post->comments as $comment)
		<li class="list-group-item">
			<strong>
	
			{{$comment->created_at->diffForHumans() }} : &nbsp;
			</strong>
			{{ $comment->comment }}
		</li>
		@endforeach
	</ul>
</div>
<hr>
<div class="card">
	<div class="card-body">
		<br>
		<form method="POST" action="/posts/{{ $post->id }}/comments">
			@csrf
			<div class="form-group">
				<textarea name="comment" placeholder="your comments here"
				class="form-control"></textarea>
				<br>
				<div class="form-group">
					<button type="submit"  class="btn btn-primary">Add Comment</button>
				</div>
			</div>
		</form>
	</div>
</div>
	<div class="form-group">
		@include('layouts/errors')
	</div>

@endsection