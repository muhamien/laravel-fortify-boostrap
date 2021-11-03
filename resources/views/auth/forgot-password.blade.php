@extends('auth.layouts.app')

@section('page')
    <form class="forms-sample" method="POST"
        action="{{ route('password.request') }}">
        @csrf
        <div class=" form-group">
            <label for="inputEmail">Email address</label>
            <input type="email" name="email" id="inputEmail"
                class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" autocomplete="email" autofocus
                placeholder="Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="mt-3">
            <button type="submit"
                class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">
                Reset Password
            </button>
        </div>
        <a class="d-block mt-3" href="{{ route('login') }}">
            Back to Login
        </a>
    </form>

@endsection