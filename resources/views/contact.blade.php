@extends('layouts.main')
@section('title','Website Title')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('img/logo.webp'))
@section('content')
    <section class="contact_section">
        <div class="container">
            <div class="section__title">Contact</div>
            <div class="subtitle">
            {!! $data->text !!}
            </div>
            <div class="contact_section__boxs">
                <div class="box">
                    <div class="circle"><span class="phone"></span></div>
                    <p>phone</p>
                    <div class="initial">
                        {{$data->phone}}
                    </div>
                </div>
                <div class="box">
                    <div class="circle"><span class="mail"></span></div>
                    <p>mail</p>
                    <div>
                        Just send us your questions or concerns by starting a new case and
                        we will give you the help you need.
                    </div>
                    <div class="initial">{{$data->email}}</div>
                </div>
                <div class="box">
                    <div class="circle"><span class="location"></span></div>
                    <p>location</p>
                    <div class="initial">
                        {{$data->address}} {{$data->address2}} {{$data->zip}} {{$data->city}} {{$data->state}} {{$data->country}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
