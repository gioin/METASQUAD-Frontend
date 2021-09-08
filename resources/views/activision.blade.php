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
                    <p class="singuptext">activision id</p>
                    <form action="{{route('update_activision', $data)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <label for="activision_id"></label><input
                            type="text"
                            placeholder="Enter activision ID"
                            name="activision_id"
                            id="activision_id"
                            required
                        />
                        <button type="submit" class="registerbtn">enter</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
