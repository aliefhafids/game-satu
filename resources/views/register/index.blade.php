@extends('layouts.main')

@section('container')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <main class="form-registration">
                    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-floating">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control rounded-top @error('name')
                    is-invalid @enderror" id="name" placeholder="Name" required>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control rounded-top @error('username')
                    is-invalid @enderror" id="username" placeholder="Username" required>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control rounded-top @error('email')
                    is-invalid @enderror" id="email" placeholder="name@example.com" required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control rounded-top @error('password')
                    is-invalid @enderror" id="password" placeholder="Password" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>

                    </form>
                    <small class="d-block text-center mt-3">
                        Already registered? <a href="/login">Login</a>
                    </small>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection
