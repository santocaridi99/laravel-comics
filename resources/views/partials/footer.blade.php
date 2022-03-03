{{-- qui andrà il footer uguale per tutte le pagine del sito --}}
<footer>
    <div class="container-footer-start position-relative">
        <!-- nav bar con i vari div con titoli e liste con nomi specifici -->
        <div class="footer-nav d-flex">
            <div class="comics-shop">
                <h3>DC COMICS</h3>
                <ul>
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>
                <h3>SHOP</h3>
                <ul>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>
            <div class="dc">
                <h3>DC</h3>
                <ul>
                    <li>Terms Of Use</li>
                    <li>Privacy policy (New)</li>
                    <li>ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscriptions</li>
                    <li>Talent Workshops</li>
                    <li>CPSC Certificates</li>
                    <li>Rating</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="site">
                <h3>SITE</h3>
                <ul>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kids</li>
                    <li>DC universe</li>
                    <li>DC Power Visa</li>
                </ul>
            </div>
             <!-- logo di background -->
            <div class="bg-logo">
              <img src="{{asset('img/dc-logo-bg.png')}}" class="position-absolute" alt="logo">
            </div>
        </div>
    </div>
    <div class="container-footer-end d-flex justify-content-between align-items-center p-5">
        <!-- bottone e un div con dentro le foto dei socials -->
        <button class="button sign-up">SIGN-UP NOW!</button>
        <div class="socials d-flex align-items-center">
            <h3>FOLLOW US</h3>
            <img src="{{asset('img/footer-facebook.png')}}" alt="facebook">
            <img src="{{asset('img/footer-twitter.png')}}" alt="twitter">
            <img src="{{asset('img/footer-youtube.png')}}" alt="yt">
            <img src="{{asset('img/footer-pinterest.png')}}" alt="pinterest">                
            <img src="{{asset('img/footer-periscope.png')}}" alt="periscope logo">
        </div>
    </div>
</template>
</footer>