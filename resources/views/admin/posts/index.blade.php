@extends('layouts.app')

@section('content')

	<div class="container">
		@if (session('message'))
			<div class="alert alert-success">
					{{ session('message') }}
			</div>
		@endif
		<h1>Tutti i miei post</h1>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Titolo</th>
					<th>Testo</th>
					<th>Autore</th>
					<th colspan="1"></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $post)
					<tr>
						<td>{{ $post->id }}</td>
						<td>{{ $post->title }}</td>
						<td>{{ $post->text }}</td>
						<td>{{ $post->user->name }}</td>
						<td><a class="btn btn-primary" href="{{ route('admin.posts.show', $post->slug) }}">Dettaglio</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Crea un nuovo post</a>
		<a class="btn btn-secondary" href="{{ route('index') }}">TUTTI I POST</a>
	</div>
		
@endsection