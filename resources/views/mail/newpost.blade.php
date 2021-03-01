<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>{{$newPost->title}}</h1>
	<img src="{{ asset('storage/'.$newPost->image) }}" alt="" style="width: 100%">
	<p>{{ $newPost->text }}</p>
	<a style="padding: 5px 10px; background:blue; color:white; text-decoration: none" href="{{ route('admin.posts.show', $newPost->slug) }}">Visualizza nuovo post</a>

	<style>
		
		h1{
			text-align: center;
		}

		img{
			width: 100%;
		}

		a{
			display: block;
			padding: 5px 10px;
			background: blue;
			color: white;
			text-decoration: none;
			width: 30%;
			text-align: center;
		}
		
	</style>
</body>
</html>