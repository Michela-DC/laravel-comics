<header>
    <div class="header-container">
      <figure class="logo-wrapper">
            <img class="logo" src="{{asset('images/dc-logo.png')}}" alt="">
      </figure>

      <ul class="navbar">
            <li>
                <a href="">characters</a>
            </li>
            
            <li>
                <a class="{{ Request::route()->getName() == 'comics' || 'comics.show' ? 'active' : '' }}" href="{{ route('comics') }}">comics</a>
            </li>

            <li>
                <a href="">movies</a>
            </li>

            <li>
                <a href="">tv</a>
            </li>

            <li>
                <a href="">games</a>
            </li>

            <li>
                <a href="">collectibles</a>
            </li>

            <li>
                <a href="">videos</a>
            </li>

            <li>
                <a href="">fans</a>
            </li>

            <li>
                <a href="">news</a>
            </li>
      </ul>
    </div>
</header>
