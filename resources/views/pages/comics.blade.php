@extends('layouts.standard')

@section('metaTitle','DC Comics')

@section('mainContent')

<section class="comics-section">
    <div class="jumbotron"></div>

        <div class="current-series">
            <div class="series-container">
                <div class="section-title">
                    <h2>current series</h2>
                </div>

                <div class="comics-container">

                    @foreach($comics as $key => $item)
                        <div class="card-wrapper">
                            {{-- come parametri di route, oltre al nome, gli passo un secondo parametro in cui specifico che ad id, ovvero il parametro passato a route::get in web.php, assegno il valore di $key che è l'indice della posizione dentro all'array comics --}}
                            {{-- link documentazione https://laravel.com/docs/7.x/urls#urls-for-named-routes --}}
                            <figure class="series-image">
                                <a class="comic-link" href="{{ route ('comic.show', ['id' => $key]) }}">
                                    <img src="{{ $item['thumb'] }}" alt="">
                                </a>
                            </figure>

                            <div class="series-info">
                                <div class="series-name">
                                    <a class="comic-link" href="{{ route ('comic.show', ['id' => $key]) }}">
                                        {{$item['series']}}
                                    </a>
                                </div>
                                <div class="type">
                                    {{$item['type']}}
                                </div>
                                <div class="price">
                                    {{$item['price']}}
                                </div>
                            </div>
                            
                        </div>
                    @endforeach

                </div>
                
                <button class="load-more">load more</button>
            </div>
        </div>
</section>

@include('partials.store')

@endsection