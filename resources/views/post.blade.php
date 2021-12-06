@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p> By. <a href="/posts?author={{ $post->author->username }}"> {{ $post->author->name}}</a> in <a
                    href="/posts?category={{ $post->category->slug }}">
                    {{ $post->category->name }}</a></p>

            @if($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            
            @else
            <img src="https://images.unsplash.com/photo-1637951200738-c793bb4dcd9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&&h=400&w=1200&q=80"
                alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-3 fs-5">
            {{ $post->body }}
            </article>
            <a href="/posts" class="d-block mt-4">Back to Posts</a>

        </div>
    </div>
</div>




@endsection
