@extends('layouts.main')
@section('title','Profile')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('img/logo.webp'))
@section('content')
    <section class="user_section">
        <div class="container">
            <div class="leftside">
                <div class="circle"><span class="user"></span></div>
                <p class="nickname">{{auth()->user()->name}}</p>
                <p class="fullname">Player</p>
                <a class="editbutton" href="{{route('profile_edit')}}"><p>edit profile</p></a>
                <a class="editbutton" href="{{route('change_password')}}"><p>change password</p></a>
            </div>

            <div class="rightside">
                <p class="title">information</p>
                <div class="content">
                    <div class="info">
                        <p class="info__title">email</p>
                        <p class="subtext">{{auth()->user()->email}}</p>
                    </div>
                    <div class="info">
                        <p class="info__title">activision id</p>
                        <p class="subtext">#{{auth()->user()->activision_id}}</p>
                    </div>
                </div>
                <div class="content">
                    <div class="info info--date">
                        <p class="info__title">registration date</p>
                        <p class="subtext">{{auth()->user()->created_at->format('Y-m-d')}}</p>
                    </div>
                    <div class="info">
                        <p class="info__title">status</p>
                        <p class="subtext">active</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
