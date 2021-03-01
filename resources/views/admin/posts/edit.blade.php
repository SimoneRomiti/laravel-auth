@extends('layouts.app');

@section('content')
	<div class="container">
		<h2>Crea un nuovo post</h2>

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form action="{{ route('admin.posts.update', $post->slug) }}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="title">TITOLO</label>
				<input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
			</div>
			<div class="form-group">
				<label for="text">TESTO</label>
				<textarea class="form-control" name="text" id="text" cols="30" rows="10">{{ $post->text }}</textarea>
			</div>
			<div class="form-group">
				<label for="image">IMMAGINE</label>
				<input type="file" accept="image/*" class="form-control" name="image" id="image" value="{{ $post->image }}">
			</div>
			<button type="submit" class="btn btn-primary my-3">CREA</button>
		</form>
	</div>
@endsection