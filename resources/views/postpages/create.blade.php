@extends('layouts/app')

@section('content')

	<form action="{{ action('PostsController@store') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
		{{ csrf_field() }}
		

		<div class="form-group">
			<label for="title">Title</label>
  			<input type="text" name="title" id="title" class="form-control" value="" placeholder="Title"><br>
		</div>

		<div class="form-group">
			<label for="body">Body</label><br/>
  			<textarea id="article-ckeditor" rows="4" cols="50" name="body" class="form-control" value=""> </textarea>
		</div>

		<div class="form-group">
			<input type="file" name="cover_image" id="fileToUpload">
		</div>

		<input type="submit" name="submit" value="Submit" class="btn btn-primary">

	</form>

@endsection