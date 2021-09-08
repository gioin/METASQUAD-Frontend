@extends('layouts.main')
@section('title','Website Title')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('img/logo.webp'))
@section('content')
<section class="rules_section">
    <div class="container">
        <p class="section__title">rules & FAQ</p>
        <div class="accordion">

            @foreach($data as $rule)
            <div>
                <input
                    type="checkbox"
                    name="example_accordion"
                    id="section{{$loop->iteration}}"
                    class="accordion__input"
                />
                <label for="section{{$loop->iteration}}" class="accordion__label">{{$rule->title}}</label>
                <div class="accordion__content">
                    <p>
                        {!! $rule->text !!}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
