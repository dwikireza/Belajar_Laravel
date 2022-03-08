@extends('layout.main')

@section('container')

<h2 class="" mb-5>{{ $post->title }}</h2>
<p><a href="/authors/{{ $post->author->username  }}" class="text-decoration-none">By. {{ $post->author->name }}</a>
    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
</p>
{!! $post->body !!}


<a href="/posts">Back to Blog</a>
@endsection
