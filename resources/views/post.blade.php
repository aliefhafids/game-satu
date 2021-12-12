@extends('layouts.main')

@section('container')
<div class="content">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                @if($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                        class="img-fluid">
                </div>

                @else
                <img src="https://images.unsplash.com/photo-1637951200738-c793bb4dcd9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&&h=400&w=1200&q=80"
                    alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <h2 class="mt-3">{{ $post->title }}</h2>

                <p class="mt-2">Rp. {{ $post->price }}</p>
                <article class="my-3 fs-5">
                    {{ $post->body }}
                </article>

                <a href="/order" class="text-decoration-none btn btn-danger">Order</a>
            </div>
        </div>

        <!-- --------------------------------- baru -------------------------------------- -->
        <h3>Promo</h3>
        <div class="card-group">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1637951200738-c793bb4dcd9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&&h=300&w=500&q=80"
                    class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h5 class="card-title">Promo</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1637951200738-c793bb4dcd9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&&h=300&w=500&q=80"
                    class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1637951200738-c793bb4dcd9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&&h=300&w=500&q=80"
                    class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
