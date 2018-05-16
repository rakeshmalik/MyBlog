@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
	<h1>Publish Post</h1>
	<hr>

<form method="post" action="/posts">
	 @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="form-text" class="form-control" id="title" name="title" >
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="body" cols="30" 
    rows="10" class="form-control"></textarea>
  </div>
  
  <div class="form-group">
  	<button type="submit"  class="btn btn-primary">Publish</button>
  </div>
	
	<div class="form-group">
		@include('layouts/errors')
	</div>


</form>
</div>
@endsection