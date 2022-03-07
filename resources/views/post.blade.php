@extends('layout.main')

@section('container')

<h2 class="" mb-5>{{ $post->title }}</h2>
<p><a href="" class="text-decoration-none">By. {{ $post->user->name }}</a>
    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
</p>
{!! $post->body !!}


<a href="/posts">Back to Blog</a>
@endsection
