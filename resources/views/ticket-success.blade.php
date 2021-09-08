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
                    <p class="singuptext">YOU HAVE SUCCESSFULLY PURCHASED TICKET!</p>
                    <a class="nav_link" href="{{"/downloadInvoice/" . $ticket->invoice_url}}">Download Invoice</a>
                    <br>
                    <a class="nav_link" href="{{route('home')}}">RETURN TO HOME PAGE</a>
                </div>
            </div>
        </div>
    </section>
@endsection
