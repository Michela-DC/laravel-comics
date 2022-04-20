@php
    $options = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop'
    ];
@endphp

<header>
    <div class="header-container">
      <figure class="logo-wrapper">
            <img class="logo" src="{{asset('images/dc-logo.png')}}" alt="">
      </figure>

      <ul class="navbar">
          @foreach ($options as $item)
            <li>
                <a href="">{{$item}}</a>
            </li>
          @endforeach
      </ul>
    </div>
</header>
