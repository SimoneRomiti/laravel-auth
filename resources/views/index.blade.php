@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="clearfix my-3">
			<h1 class="float-left">Tutti i post</h1>
			<a class="btn btn-primary float-right" href="{{ route('admin.posts.index') }}">VISUALIZZA SOLO I MIEI POST</a>
		</div>

		<div class="d-flex">
			@foreach ($posts as $post)
				<div class="card card-index">
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
	</div>
		
@endsection