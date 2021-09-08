@extends('layouts.main')
@section('title','Website Title')
@section('description')Website Description @stop
@section('fb_title','Website Title')
@section('fb_description')Website Description @stop
@section('fb_image',asset('img/logo.webp'))
@section('content')
<section class="results_section">
    <div class="container">
        <div class="section__title">{{$game_name->title}} results</div>
        <div class="list">
            <input
                type="text"
                id="myInput"
                onkeyup="myFunction()"
                placeholder="Search for team names.."
                title="Type in a name"
            />
            <div class="overflow">
                <table id="myTable">
                    <tr class="header ignore-search">
                        <th style="min-width: 200px">placement</th>
                        <th style="min-width: 350px">team name</th>
                        <th style="min-width: 250px">team activation id</th>
                        <th style="min-width: 150px">total kills</th>
                        <th style="min-width: 150px">total score</th>
                    </tr>
                    @foreach($data as $results)
                    <tr>
                        <td>{{$results->placement}}</td>
                        <td>{{$results->team_name}}</td>
                        <td>#{{$results->team_activation_id}}</td>
                        <td>{{$results->total_kills}}</td>
                        <td>{{$results->total_score}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div id="not-found-row" class="ignore-search" style="display: none">
                <p>no results found</p>
            </div>
        </div>
    </div>
</section>
@endsection
