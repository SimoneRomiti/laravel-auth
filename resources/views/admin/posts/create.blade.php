@extends('layouts.app');

@section('content')
	<div class="container">
		<h2>Crea un nuovo post</h2>
		<form action="{{ route('admin.posts.store') }}" method="post">
			@csrf
			@method('POST')
			<div class="form-group">
				<label for="title">TITOLO</label>
				<input type="text" class="form-control" id="title" name="title">
			</div>
			<div class="form-group">
				<label for="text">TESTO</label>
				<textarea class="form-control" name="text" id="text" cols="30" rows="10"></textarea>
			</div>
			<div class="form-group">
				<label for="image">IMMAGINE</label>
				<textarea class="form-control" name="image" id="image" cols="30" rows="10"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">CREA</button>
		</form>
	</div>
@endsection