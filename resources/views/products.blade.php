@extends('layout.app')

@section('page-title', 'Prodotti')


@section('content')
    <section id="jumbotron">
        <div class="jumbo-text">
            CURRENT SERIES
        </div>
    </section>

    <section id="main-content" class="container">
        {{-- @foreach ($comics as $comic)
            <div class="comic">
                <div class="img-wrapper">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>

                <h4>{{$comic['series']}}</h4>
            </div>
        @endforeach --}}


        <div class="load-more-btn">
            <a>LOAD MORE</a>
        </div>
    </section>
@endsection