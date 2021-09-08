@extends('layouts.main')
@section('title',$data->title)
@section('description')Website Description @stop
@section('fb_title',$data->title)
@section('fb_description')Website Description @stop
@section('fb_image',asset('storage/tournaments/'.$data->image))
@section('content')
    <section class="eventinfo_section">
        <div class="container">
            <p class="section__title">{{$data->title}}</p>
            <div class="eventinfo__text">
                <h3>
                    {!! $data->text !!}
                </h3>
                <div class="eventinfo_announcement">
                    <div class="box type">
                        <p class="name">type:</p>
                        <p class="label">{{$data->type}}</p>
                    </div>
                    <div class="box prize">
                        <h2 class="name">prize:</h2>
                        <p class="label green">{{$data->prize}}$</p>
                    </div>
                    <div class="box date">
                        <p class="name">start date:</p>
                        <p class="label">{{$data->tournament_start_date}} - <span
                                style="color: #c1b11c ; text-transform: uppercase;">{{$data->tournament_start_time}}<span>
                        </p>
                    </div>
                    <div class="box date border">
                        <p class="name">end date:</p>
                        <p class="label">{{$data->tournament_end_date}} - <span
                                style="color: #c1b11c ; text-transform: uppercase;">{{$data->tournament_end_time}}</p>
                    </div>
                    <div class="box date border">
                        <p class="name">divisions:</p>
                        <p class="label">{{$data->division}}</p>
                    </div>
                </div>
                <div class="background_image">
                    <img class="eventinfo__logo" src="{{asset('storage/tournaments/'.$data->logo)}}"
                         alt="{{$data->title}}">
                </div>
            </div>
            <div class="buyticket">
                <div class="paidbox">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <br>
                    <form action="{{route('paypal.proceed', $data->id)}}">
                        @csrf
                        <div class="fixedprice">
                            <p>price:</p>
                            <p id="price" data-price="{{$data->price}}">{{$data->price}}</p>
                        </div>
                        <div class="quantity">
                            <button class="btn minus-btn disabled" type="button">-</button>
                            <label for="quantity"></label><input type="text" id="quantity" value="0" name="quantity">
                            <button class="btn plus-btn" type="button">+</button>
                        </div>

     <div class="accordion">
<div>
    <input
        type="checkbox"
        name="example_accordion"
        id="section"
        class="accordion__input"
    />
    <label for="section" class="accordion__label"><p>I have a voucher <span style="color: #00bf4d; font-weight: 600; font-size: 1rem"> +</span></p></label>
    <div class="accordion__content">
        <label for="voucher"></label>
        <input type="text" id="voucher" name="voucher" placeholder="Enter code">
        <input type="hidden" id="couponAmount" name="couponAmount">
        <input type="hidden" id="couponId" name="couponId">
        <input type="hidden" id="code" name="code">
        <br>
            <a onclick="applyVoucher()" style="cursor: pointer; color: blue">Apply coupon</a>
    </div>
</div>
</div>
                        <div class="total">
                            <p>total:</p>
                            <p id="totalprice">0$</p>
                        </div>
                        @auth
                            <button type="submit">checkout</button>
                        @else
                            <a href="{{route('login')}}">
                                <button>checkout</button>
                            </a>
                        @endauth
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
