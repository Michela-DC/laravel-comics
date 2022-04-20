@php

    $options = [ 
        [
            'image' => 'images/buy-comics-digital-comics.png',
            'text' => 'digital comics', 
        ],
        [
            'image' => 'images/buy-comics-merchandise.png',
            'text' => 'dc merchandise',
        ],
        [
            'image' => 'images/buy-comics-shop-locator.png',
            'text' => 'subscription',
        ],
        [
            'image' => 'images/buy-comics-subscriptions.png',
            'text' => 'comic shop locator',
        ],
        [
            'image' => 'images/buy-dc-power-visa.svg',
            'text' => 'dc power visa',
        ]
    ];

@endphp

<section class="menu-section">
    <div class="store-container">
        <ul class="menu">

            @foreach ($options as $item)    
                <li class="options">
                    <img src="{{asset($item['image'])}}" alt="">
                    <a href="">{{$item['text']}}</a>
                </li>
            @endforeach

        </ul>
    </div>
</section>