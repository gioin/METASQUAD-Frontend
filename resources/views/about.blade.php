@extends('layouts.main')
@section('title','Website Title')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('front/img/logo.webp'))
@section('content')
<section class="aboutus_section">
    <div class="container">
        <div class="section__title">about us</div>
        <div class="aboutus_section__text">
            <p>
                {!! $data->text !!}
            </p>
        </div>
    </div>
</section>
    @endsection
