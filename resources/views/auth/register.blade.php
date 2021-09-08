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
                    <div class="circle"><span class="user"></span></div>
                    <p class="singuptext">sing up now</p>
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                        @enderror
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
                            placeholder="Username"
                            name="name"
                            value="{{ old('name') }}"
                            id="psw-repeat"
                            required
                        />

                        <input
                            type="text"
                            placeholder="Email"
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

                        <input
                            type="password"
                            placeholder="Repeat Password"
                            name="password_confirmation"
                            id="psw-repeat"
                            required
                        />
                        <input
                            type="text"
                            placeholder="Activision ID"
                            name="psw-repeat"
                            id="psw-repeat"
                            required
                        />
                        <p class="terms">
                            By creating an account you agree to our
                            <a href="#">Terms & Privacy</a>.
                        </p>
                        <button type="submit" class="registerbtn">sing up</button>
                    </form>
                    <p class="or">-or-</p>
                    <div class="bymedia">
                        <figure>
                            <a href="{{route('facebook')}}">
                                <img src="{{asset('img/fb_login.png')}}" alt="Proceed with Facebook" />
                            </a>
                        </figure>
                        <figure>
                            <a href="{{route('google')}}">
                                <img src="{{asset('img/google_login.png')}}" alt="Proceed with Google" />
                            </a>
                        </figure>
                        <figure>
                            <a href="{{route('discord')}}">
                                <img src="{{asset('img/discord_login.png')}}" alt="Proceed with Discord " />
                            </a>
                        </figure>
                    </div>
                    <p>
                        Already have an account? <a href="{{route('login')}}">Sign in</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
