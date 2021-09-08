@extends('layouts.main')
@section('title','Website Title')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('img/logo.webp'))
@section('content')
<section class="game_section">
    <div class="container">
        <p class="section__title">games</p>
        @foreach($data as $game)
            <div class="gamebox {{ $loop->first ?  '' : 'gamebox--padding' }}">
                @if($loop->iteration % 2 == 0)
                    <figure class="figure_order">
                @else
                            <figure>
                @endif
                <img
                    class="callofduty_image"
                    src="{{asset('storage/games/'.$game->image)}}"
                    alt="{{$game->title}}"
                />
                    </figure>
            <div class="game_text {{ $loop->first ?  '' : 'game_text--flex' }}">
                <h1>{{$game->title}}</h1>
                <p>
                    {!! $game->text !!}
                </p>
            </div>
        </div>
        @endforeach

{{--        <div class="gamebox gamebox--padding">--}}
{{--            <figure class="figure_order">--}}
{{--                <img--}}
{{--                    class="callofduty_image"--}}
{{--                    src="/img/apex_game.webp"--}}
{{--                    alt="Call Of Duty"--}}
{{--                />--}}
{{--            </figure>--}}
{{--            <div class="game_text game_text--flex">--}}
{{--                <h1>apex</h1>--}}
{{--                <p>--}}
{{--                    Text about game’s history related to META SQUAD GAMING and future--}}
{{--                    plans goes here. Call of Duty is a first-person shooter video game--}}
{{--                    franchise published by Activision. Starting out in 2003, it first--}}
{{--                    focused on games set in World War II. Over time, the series has--}}
{{--                    seen games set in the midst of the Cold War, futuristic worlds,--}}
{{--                    and outer space. The games were first developed by Infinity Ward,--}}
{{--                    then also by Treyarch and Sledgehammer Games. Several spin-off and--}}
{{--                    handheld games were made by other developers. The most recent--}}
{{--                    title, Call of Duty: Black Ops Cold War, was released on November--}}
{{--                    13, 2020.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="gamebox gamebox--padding">--}}
{{--            <figure>--}}
{{--                <img--}}
{{--                    class="callofduty_image"--}}
{{--                    src="/img/fortnite_game.webp"--}}
{{--                    alt="Call Of Duty"--}}
{{--                />--}}
{{--            </figure>--}}
{{--            <div class="game_text">--}}
{{--                <h1>fortnite</h1>--}}
{{--                <p>--}}
{{--                    Text about game’s history related to META SQUAD GAMING and future--}}
{{--                    plans goes here. Call of Duty is a first-person shooter video game--}}
{{--                    franchise published by Activision. Starting out in 2003, it first--}}
{{--                    focused on games set in World War II. Over time, the series has--}}
{{--                    seen games set in the midst of the Cold War, futuristic worlds,--}}
{{--                    and outer space. The games were first developed by Infinity Ward,--}}
{{--                    then also by Treyarch and Sledgehammer Games. Several spin-off and--}}
{{--                    handheld games were made by other developers. The most recent--}}
{{--                    title, Call of Duty: Black Ops Cold War, was released on November--}}
{{--                    13, 2020.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="gamebox gamebox--padding">--}}
{{--            <figure class="figure_order">--}}
{{--                <img--}}
{{--                    class="callofduty_image"--}}
{{--                    src="/img/legends_game.webp"--}}
{{--                    alt="Call Of Duty"--}}
{{--                />--}}
{{--            </figure>--}}
{{--            <div class="game_text game_text--flex">--}}
{{--                <h1>legue of legends</h1>--}}
{{--                <p>--}}
{{--                    Text about game’s history related to META SQUAD GAMING and future--}}
{{--                    plans goes here. Call of Duty is a first-person shooter video game--}}
{{--                    franchise published by Activision. Starting out in 2003, it first--}}
{{--                    focused on games set in World War II. Over time, the series has--}}
{{--                    seen games set in the midst of the Cold War, futuristic worlds,--}}
{{--                    and outer space. The games were first developed by Infinity Ward,--}}
{{--                    then also by Treyarch and Sledgehammer Games. Several spin-off and--}}
{{--                    handheld games were made by other developers. The most recent--}}
{{--                    title, Call of Duty: Black Ops Cold War, was released on November--}}
{{--                    13, 2020.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>
@endsection
