<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>All posts </title>
</head>>
<body>
<div>
    <a href="{{route('posts.index')}}"> Go to Index page </a>
</div>

<h3>{{$post->title }}</h3>
<p> {{$post->content}}</p>

<a href="{{route('posts.edit', $post->id)}}">Edit</a>
</body>
</html>
