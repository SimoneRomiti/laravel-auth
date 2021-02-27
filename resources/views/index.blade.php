@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Tutti i post</h1>

		<div class="d-flex">
			@foreach ($posts as $post)
				<div class="card" style="width: calc(100% / 4 - 30px); margin: 15px;">
					<img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="...">
					<div class="card-body" style="display: flex; flex-direction:column; justify-content: space-between">
						<h2>{{ $post->title }}</h2>
						<p>{{ substr($post->text, 0, 200). '...' }}</p>
						<p>- <strong>{{ $post->user->name }}</strong></p>
						<a href="{{ route('admin.posts.show', $post->slug) }}" class="btn btn-primary">Dettaglio</a>
					</div>
				</div>
			@endforeach
		</div>
			<a class="btn btn-primary" href="{{ route('admin.posts.index') }}">SOLO I MIEI POST</a>
	</div>
		
@endsection