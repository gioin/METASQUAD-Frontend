@extends('layouts.main')
@section('title','Website Title')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('front/img/logo.webp'))
@section('content')
    <section class="registr_section registr_section--edit">
        <div class="container">
            <div class="box">
                <div class="content">
                    <p class="singuptext">Edit profile</p>
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
                    <form action="{{route('profile_update')}}" method="post">
                        @csrf
                        @method('PUT')
<input type="text" value="{{auth()->user()->name}}" placeholder="New Username" name="name" id="name" required />
<input type="text" value="{{auth()->user()->email}}" placeholder="New Email" name="email" id="email" disabled />
<input type="text" value="{{auth()->user()->activision_id}}" placeholder="New Activision ID" name="activision_id" id="activision_id" required />
<input type="password" placeholder="Enter Current Password" name="password" id="psw" required />
                        <button type="submit" class="registerbtn">save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endsection
