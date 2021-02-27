@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>Dettaglio {{ $post->title }}</h2>
		<div class="card" style="width: 18rem;">
			<img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="...">
			<div class="card-body">
				<h3 class="card-title">{{ $post->title }}</h3>
				<p class="card-text">{{ $post->text }}</p>
				<p class="card-text">- <strong>{{ $post->user->name }}</strong></p>
				<a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Indietro</a>
			</div>
		</div>
	</div>

@endsection