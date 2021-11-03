@extends('auth.layouts.app')

@section('page')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <img class="mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
        </div>

        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            Remember me
        </label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        @if (Route::has('password.request'))
            <a class="d-block mt-3" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
        @if (Route::has('register'))
            <a class="d-block mt-3" href="{{ route('register') }}">
                {{ __('Sign up') }}
            </a>
        @endif
        
        {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
    </form>
@endsection