<footer>
    <section class="info-section">
        <div class="container">
            <div class="col">
                <div class="dc-comics">
                    <h4>dc comics</h4>
                    <ul>
                        <li>
                            <a href="">....</a>
                        </li>
                    </ul>
                </div>

                <div class="shop">
                    <h4>Shop</h4>
                    <ul>
                        <li>
                            <a href="">Shop DC</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col dc">
                <h4>dc</h4>
                <ul>
                    <li>
                        <a href="">...</a>
                    </li>
                </ul>
            </div>

            <div class="col sites">
                <h4>sites</h4>
                <ul>
                    <li>
                        <a href="">...</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="social-section">
        <div class="container">
            <button>
                sign-up now!
            </button>

            <div class="social-media">
                <h3>Follow us</h3>

                <ul class="social-wrapper">
                    <li v-for="(item, i) in icons" :key="i">
                        <a href="">
                            <img src="" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section> 

</footer>