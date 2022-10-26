@extends('layouts.main')

@section('container')
  <article>
    <h2>{{ $post->title }}</h2>
    <p>By. <a href="/authors/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
  {!! $post->body !!}
  </article>

  <a href="/blog" class="text-decoration-none d-block mt-4">Back to Posts</a>
@endsection