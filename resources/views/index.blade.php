@extends('layouts.main')
@section('title','Website Title')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('img/logo.webp'))
@section('content')
    <section class="tournaments_section"> <!-- Tournaments Section START -->
        <div class="container">
            <p class="section__title">our tournaments</p>
@foreach($data as $tournament)
    @if($tournament->upcoming!=1)
            <div class="tournaments_section__games">
                <div class="game">
                    <div class="background_image callofduty" style="background: url({{asset('storage/tournaments/'.$tournament->image)}}) no-repeat center center;">
                        <img class="background_image__logo" src="{{asset('storage/tournaments/'.$tournament->logo)}}" alt="{{$tournament->title}}">
                        <div class="tournament-name">{{$tournament->title}}</div>
                        <div class="background_image__info">
                            <div class="announcement">
                                <div class="box type">
                                    <p class="name">type:</p>
                                    <p class="label">{{$tournament->type}}</p>
                                </div>
                                <div class="box prize">
                                    <h2 class="name">prize:</h2>
                                    <p class="label green">{{$tournament->prize}}$</p>
                                </div>
                                <div class="box date">
                                    <p class="name">date:</p>
                                    <p class="label">{{$tournament->tournament_start_date}} AT <span style="color: #c1b11c ; text-transform: uppercase;">{{$tournament->tournament_start_time}}<span></p>
                                </div>
                            </div>
                            <a href="{{route('tournament',$tournament->id)}}"> <button>sign up</button></a>
                        </div>
                    </div>
                </div>
            </div>
                @else
                    <div class="tournaments_section__games">
                        <div class="game">
                            <div class="background_image upcoming1" style="background: url({{asset('storage/tournaments/'.$tournament->image)}}) no-repeat center center;">
                                <img class="background_image__logo" src="{{asset('storage/tournaments/'.$tournament->logo)}}" alt="{{$tournament->title}}">
                                <div class="background_image__info background_image__info--style">
                                    <p class="upcoming">{{$tournament->upcoming_text}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
        @endif
            @endforeach
            <!-- <div class="tournaments_section__games">
                <div class="game">
                    <div class="background_image callofduty" style="background: url(/img/callofduty.webp) no-repeat center center;">
                        <img class="background_image__logo" src="img/logo_callofduty.svg" alt="logo callofduty">
                        <div class="tournament-name">Tournament Name</div>
                        <div class="background_image__info">
                            <div class="announcement">
                                <div class="box type">
                                    <p class="name">type:</p>
                                    <p class="label">online</p>
                                </div>
                                <div class="box prize">
                                    <h2 class="name">prize:</h2>
                                    <p class="label green">5000$</p>
                                </div>
                                <div class="box date">
                                    <p class="name">date:</p>
                                    <p class="label">31/12/20 AT 2 <span style="color: #c1b11c ; text-transform: uppercase;">pm<span></p>
                                </div>
                            </div>

                            <a href="#"> <button>sign up</button></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tournaments_section__games">
                <div class="game">
                    <div class="background_image apex" style="background: url(/img/apex.webp) no-repeat center center;">
                        <img class="background_image__logo background_image__logo--size" src="img/logo_apex.svg" alt="logo callofduty">
                        <div class="tournament-name">Tournament Name</div>
                        <div class="background_image__info">
                            <div class="announcement">
                                <div class="box type">
                                    <p class="name">type:</p>
                                    <p class="label">online</p>
                                </div>
                                <div class="box prize">
                                    <h2 class="name">prize:</h2>
                                    <p class="label green">5000$</p>
                                </div>
                                <div class="box date">
                                    <p class="name">date:</p>
                                    <p class="label">31/12/20 AT 2 <span style="color: #c1b11c ; text-transform: uppercase;">pm<span></p>
                                </div>
                            </div>

                            <a href="#"> <button>sign up</button></a>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="tournaments_section__games">
                <div class="game">
                    <div class="background_image upcoming1" style="background: url(/img/fortnite.webp) no-repeat center center;">
                        <img class="background_image__logo" src="img/logo_fortnite.svg" alt="logo callofduty">
                        <div class="background_image__info background_image__info--style">
                            <p class="upcoming">upcoming</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tournaments_section__games">
                <div class="game">
                    <div class="background_image upcoming2" style="background: url(/img/league_legends.webp) no-repeat center center;">
                        <img class="background_image__logo" src="img/logo_leaguelegends.svg" alt="logo callofduty">
                        <div class="background_image__info background_image__info--style">
                            <p class="upcoming">upcoming</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Tournaments Section END -->
@endsection
