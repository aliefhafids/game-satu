@extends('layouts.main')

@section('container')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                </div>
                @endif

                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                    <form action="/login" method="post">
                        @csrf
                        <div class="form-floating">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control @error ('email')
                    is-invalid @enderror" id="email" placeholder="Email address" autofocus required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                    </form>
                    <small class="d-block text-center mt-3">
                        Not registered? <a href="/register">Register Now!</a>
                    </small>
                </main>
            </div>
        </div>
    </div>
</div>  
        @endsection
