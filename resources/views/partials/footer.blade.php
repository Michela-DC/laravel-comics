@php
    $dc_comics = [
        'Charactres',
        'Comics',
        'Movies',
        'TV',
        'Games',
        'Videos',
        'News'
    ];

    $shop = [
        'Shop DC',
        'Shop DC Collectibles'
    ];

    $dc = [
        'Terms Of Use',
        'Provicy Ppolicy (New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact Us'
    ];
        
    $sites = [
        'DC',
        'MAD Magazine',
        'DC Kids',
        'DC Universe',
        'DC Power Visa',
    ];

    $icons = [
        'images/footer-facebook.png',
        'images/footer-twitter.png',
        'images/footer-youtube.png',
        'images/footer-pinterest.png',
        'images/footer-periscope.png',
    ];

@endphp

<footer>
    <section class="info-section">
        <div class="container">
            <div class="col">
                <div class="dc-comics">
                    <h4>dc comics</h4>
                    <ul>
                        @foreach ($dc_comics as $item)
                            <li>
                                <a href="">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="shop">
                    <h4>Shop</h4>
                    <ul>
                        @foreach ($shop as $item)
                            <li>
                                <a href="">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col dc">
                <h4>dc</h4>
                <ul>
                    @foreach ($dc as $item)
                        <li>
                            <a href="">{{ $item }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col sites">
                <h4>sites</h4>
                <ul>
                    @foreach ($sites as $item)
                        <li>
                            <a href="">{{ $item }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section class="social-section">
        <div class="social-container">
            <button>
                sign-up now!
            </button>

            <div class="social-media">
                <h3>Follow us</h3>

                <ul class="social-wrapper">
                    @foreach ($icons as $item)
                        <li>
                            <img src="{{asset($item)}}" alt="">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section> 

</footer>