@extends('layouts.main')

@section('container')
<h1 class="mb-5">Item Category</h1>

<div class="container">
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4 mb-3">
            <a href="/posts?category={{ $category->slug }}">
            <div class="card bg-dark text-white">
                <img class="card-img" src="https://images.unsplash.com/photo-1629757301517-c647b4b2edce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&&h=500&w=500&q=80"
                 alt="{{ $category->name }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-3 " style="background-color: rgba(0,0,0,0.5)">{{ $category->name }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
