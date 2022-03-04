@extends('layout.main')

@section('container')
<H1>INI HALAMAN HOME</H1>
<article class="mb-5">

    @foreach ($posts as $post)
    <h2>
        <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
    </h2>
    <p>{{ $post["body"] }}</p>

    @endforeach
</article>
@endsection
