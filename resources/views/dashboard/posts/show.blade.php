@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all My
                Posts</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline   ">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span
                        data-feather="x-circle"></span> Delete</button>
            </form>

            @if($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
            
            @else
            <img src="https://images.unsplash.com/photo-1637951200738-c793bb4dcd9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&&h=400&w=1200&q=80"
                alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif


            <article class="my-3 fs-5">
                {{ $post->body }}
            </article>


        </div>
    </div>
</div>

@endsection
