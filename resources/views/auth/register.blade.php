@extends('auth.layouts.app')

@section('page')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <img class="mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Sign Up</h1> 

        <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Name</label>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
        </div>

        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
        </div>

        <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
        </div>

        <div class="form-floating">
            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" id="password-confirm" placeholder="Confirm your Password">
            <label for="password-confirm">Confirm Password</label>
            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
        </div> 

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        <a class="d-block mt-3" href="{{ route('login') }}">
            {{ __('Sign in') }}
        </a>
        {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
    </form>
@endsection