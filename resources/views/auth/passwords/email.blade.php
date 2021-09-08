@extends('layouts.main')
@section('title','Website Title')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('img/logo.webp'))
@section('content')
    <section class="registr_section">
        <div class="container">
            <div class="box">
                <div class="content">
                    <p class="singuptext">Reset Password</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('password.email') }}">
                        @csrf
                        <input
                            type="text"
                            placeholder="E-Mail Address"
                            name="email"
                            value="{{ old('email') }}"
                            id="email"
                            required
                        />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <button type="submit" class="registerbtn">Send Password Reset Link</button>
                    </form>
                    <p>Not a member? <a href="{{ route('register') }}">Sign up</a>.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
