@extends('dashboard.layouts.main')

@section('container')
<div class="content">
    <div class="container">
    <h2 class="mb-5">Welcome, <br>{{ auth()->user()->name }}</h2>
    </div>
</div>
@endsection
