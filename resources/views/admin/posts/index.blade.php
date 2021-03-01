@extends('layouts.app')

@section('content')

	<div class="container">
		@if (session('message'))
			<div class="alert alert-success">
					{{ session('message') }}
			</div>
		@endif
		<div class="clearfix my-3">
			<h1 class="float-left">Tutti i miei post</h1>
			<a class="btn btn-primary float-right" href="{{ route('index') }}">VISUALIZZA TUTTI I POST</a>
		</div>
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Titolo</th>
					<th>Testo</th>
					<th>Autore</th>
					<th colspan="1"></th>
					<th colspan="1"></th>
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
						<td><a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->slug) }}">Modifica</a></td>
						<td>
							<form action="{{ route('admin.posts.destroy', $post->id) }}" method="post" onsubmit="return confirm('Sei sicuro di voler eliminare il post?')">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger">Elimina</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Crea un nuovo post</a>
	</div>
		
@endsection