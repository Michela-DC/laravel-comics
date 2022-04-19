<section class="menu-section">
    <div class="store-container">
        <ul class="menu">
            <li class="options" v-for="(option, i) in options" :key="i">
                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                <a href="">digital comics</a>
            </li>

            <li class="options" v-for="(option, i) in options" :key="i">
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
                <a href="">dc merchandise</a>
            </li>

            <li class="options" v-for="(option, i) in options" :key="i">
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                <a href="">subscription</a>
            </li>

            <li class="options" v-for="(option, i) in options" :key="i">
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                <a href="">comic shop locator</a>
            </li>

            <li class="options" v-for="(option, i) in options" :key="i">
                <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                <a href="">dc power visa</a>
            </li>
        </ul>
    </div>
</secn>