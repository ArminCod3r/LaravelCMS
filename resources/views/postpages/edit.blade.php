@extends('layouts/app')

@section('content')

	<a href="{{ url()->previous() }}" class="btn btn-default"> < Go Back</a>
	<br/>
	<br/>

	<form action="{{route('posts.update', $post->id ) }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
		{{ csrf_field() }}
		

		<div class="form-group">
			<label for="title">Title</label>
  			<input type="text" name="title" id="title" class="form-control" value="{{$post->title}}" placeholder="Title"><br>
		</div>

		<div class="form-group">
			<label for="body">Body</label><br/>
  			<textarea id="article-ckeditor" rows="4" cols="50" name="body" class="form-control" value=""> {{ $post->body}} </textarea>
		</div>

		<div class="form-group">
			<input type="file" name="cover_image" id="fileToUpload">
		</div>

		<input type="hidden" name="_method" value="PATCH">

		<input type="submit" name="submit" value="Submit" class="btn btn-primary">

	</form>

@endsection