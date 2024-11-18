@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6">
        <div class="card border-0 shadow-lg rounded-4">
            <!-- Header với gradient -->
            <div class="card-header text-center bg-primary text-white rounded-top">
                <h3 class="mb-0">{{ __('Login') }}</h3>
            </div>
            <!-- Nội dung -->
            <div class="card-body p-5 bg-light">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Input -->
                    <div class="form-group mb-4">
                        <label for="email" class="form-label text-dark fw-bold">{{ __('Email Address') }}</label>
                        <input id="email" type="email" 
                               class="form-control @error('email') is-invalid @enderror" 
                               name="email" value="{{ old('email') }}" 
                               required autocomplete="email" autofocus>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Password Input -->
                    <div class="form-group mb-4">
                        <label for="password" class="form-label text-dark fw-bold">{{ __('Password') }}</label>
                        <input id="password" type="password" 
                               class="form-control @error('password') is-invalid @enderror" 
                               name="password" required autocomplete="current-password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <!-- Remember Me -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text-dark" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg text-white fw-bold">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <!-- Forgot Password -->
                    @if (Route::has('password.request'))
                    <div class="text-center mt-4">
                        <a class="text-decoration-none text-primary fw-bold" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
