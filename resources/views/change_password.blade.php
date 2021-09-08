@extends('layouts.main')
@section('title','Change Password')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('front/img/logo.webp'))
@section('content')
    <section class="registr_section registr_section--edit">
        <div class="container">
            <div class="box">
                <div class="content">
                    <p class="singuptext">change password</p>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('update_password')}}" method="post">
                        @csrf
                        @method('PUT')
<input type="password" placeholder="Old Password" name="current_password" id="psw" required />
<input type="password" placeholder="New Password" name="new_password" id="psw" required />
<input type="password" placeholder="Repeat New Password" name="new_password_confirmation" id="psw" required  />
                        <button type="submit" class="registerbtn">change</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
