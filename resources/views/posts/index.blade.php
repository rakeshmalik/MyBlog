@extends ('layouts/master')
@section('content')

@foreach($posts as $post)
@include('posts.allPost')
@endforeach

<nav>
	<ul class="pager">
		<li><a href="#">Previous</a></li>
		<li><a href="#">Next</a></li>
	</ul>
</nav>



@endsection