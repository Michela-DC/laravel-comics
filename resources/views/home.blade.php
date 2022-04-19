<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Laravel DC Comics</title>
</head>
<body>

    @include('partials.header')

    <main>

        <section class="comics-section">
            <div class="jumbotron"></div>

            <div class="current-series">
                <div class="container">
                    <div class="section-title">
                        <h2>current series</h2>
                    </div>

                    <div class="comics-container">

                        @foreach($comics as $item)
                            <div class="card-wrapper">
                                <figure class="series-image">
                                    <img src="{{ $item['thumb'] }}" alt="">
                                </figure>

                                <div class="series-info">
                                    <div class="series-name">
                                        {{$item['series']}}
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

    </main>

</body>
</html>