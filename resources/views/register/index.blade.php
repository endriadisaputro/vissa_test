@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5 mt-5">
        <main class="form-signin">
            <form action="/register" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Register</h1>

                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" id="name" placeholder="name" value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('email') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="text-center d-block mt-3">Already Registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection