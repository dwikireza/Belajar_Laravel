
@extends('layout.main')

@section('container')

    <h2 class=""mb-5>{{ $post->title }}</h2>
    {!! $post->body !!}


    <a href="/posts">Back to Blog</a>
@endsection
