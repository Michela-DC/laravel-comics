@extends('layouts.standard')

@section('metaTitle', $comics['title'])

@section('mainContent')
    <section class="comic-info">
        <div class="jumbotron"></div>

        <div class="poster-row">
            <figure class="series-image">
                <img src="{{ $comics['thumb']}}" alt="">
            </figure>
        </div>
        
        <div class="comic-info_container">

            <div class="series-info">
                <h1 class="series-title">{{ $comics['title']}}</h1>

                <div class="availability">
                    <div class="price-col">
                        <div class="price">
                            <span class="country">U.S. Price: </span>
                            {{ $comics['price']}}
                        </div>
                        
                        <div class="if-available">Available</div>
                    </div>

                    <div class="check">
                        Check Availability
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                </div>

                <div class="series-description">
                    {{ $comics['description']}}
                </div>
            </div>

            <div class="advertisement">
                <div class="ad">Advertisement</div>

                <div class="ad-content">
                    <h2 class="ad-title">unleash heroic rewards</h2>
                    
                    <div class="apply-visa">
                        <button class="btn-apply">Apply now</button>
                        <div class="dc-visa">dc power visa</div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- Telent & Specs -------------- --}}

    <div class="comic-specs">

        <div class="talent-specs">
            <div class="talent">
                <h4 class="talent-title">Talent</h4>
    
                <div class="artists detail-container">
                    <div class="detail-title">Art by:</div>
                    <div class="names detail">
                        @foreach ($comics['artists'] as $key => $item)
                            {{ $item }}
                        @endforeach
                    </div>
                </div>
    
                <div class="writers detail-container">
                    <div class="detail-title">Written by:</div>
                    <div class="names detail">
                        @foreach ($comics['artists'] as $key => $item)
                            {{ $item }}
                        @endforeach
                    </div>
                </div>
            </div>
    
            <div class="specs">
                <div class="specs-title">Specs</div>
    
                <div class="detail-container">
                    <div class="detail-title">series: </div>
                    <div class="series detail">
                       {{ $comics['series']}}
                    </div>
                </div>
    
                <div class="detail-container">
                    <div class="detail-title">u.s. price: </div>
                    <div class="price detail">
                       {{ $comics['price']}}
                    </div>
                </div>
    
                <div class="detail-container">
                    <div class="detail-title">on sale date: </div>
                    <div class="sale-date detail">
                       {{ $comics['sale_date']}}
                    </div>
                </div>
    
            </div>
        </div>

    </div>

@endsection