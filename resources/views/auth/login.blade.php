@extends('layouts.main')
@section('title','Website Title')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('img/logo.webp'))
@section('content')
    <section class="registr_section">
        <div class="container container--position">
            <div class="box">
                <div class="content">
                    <p class="singuptext">log in now</p>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                        @enderror
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                        @enderror
                        <input
                            type="text"
                            placeholder="Email or Username"
                            name="email"
                            value="{{ old('email') }}"
                            id="email"
                            required
                        />

                        <input
                            type="password"
                            placeholder="Password"
                            name="password"
                            id="psw"
                            required
                        />

                        <p class="terms">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </p>
                        <button type="submit" class="registerbtn">log in</button>
                    </form>
                    <p class="or">-or-</p>
                    <div class="bymedia">
                        <figure>
                            <a href="{{route('facebook')}}">
                                <img src="{{asset('img/fb_login.png')}}" alt="Facebook Login" />
                            </a>
                        </figure>
                        <figure>
                            <a href="{{route('google')}}">
                                <img src="{{asset('img/google_login.png')}}" alt="Facebook Login" />
                            </a>
                        </figure>
                        <figure>
                            <a href="{{route('discord')}}">
                                <img src="{{asset('img/discord_login.png')}}" alt="Facebook Login" />
                            </a>
                        </figure>
                    </div>
                    <p>Not a member? <a href="{{ route('register') }}">Sign up</a>.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
