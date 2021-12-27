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
                <img src="https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&&h=400&w=1200&q=80"
                    alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <h2 class="mt-3">{{ $post->title }}</h2>

                <p class="mt-2">Rp. {{ $post->price }}</p>

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/order" class="text-decoration-none btn btn-danger">Order</a>
            </div>
        </div>

        <!-- --------------------------------- baru -------------------------------------- -->
        <h3> Promo </h3>
        <div class="card bg-dark text-dark">
            <img src="/images/promo1.jpg" class="card-img" alt="{{ $post->category->name }}">
        </div>
    </div>
</div>

@endsection
