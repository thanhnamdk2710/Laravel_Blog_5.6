<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <a class="logo" href="{{ route('home') }}">NamDev Blog</a>
                    <p class="copyright">Blog @ 2018. All rights reserved.</p>
                    <p class="copyright">
                        Designed by <a href="https://github.com/thanhnamdk2710" target="_blank">NamDev</a>
                    </p>
                    <ul class="icons">
                        <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <h4 class="title"><b>CATAGORIES</b></h4>
                    <ul>
                        <li><a href="#">BEAUTY</a></li>
                        <li><a href="#">HEALTH</a></li>
                        <li><a href="#">MUSIC</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">SPORT</a></li>
                        <li><a href="#">DESIGN</a></li>
                        <li><a href="#">TRAVEL</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-section">
                    <h4 class="title"><b>SUBSCRIBE</b></h4>
                    <div class="input-area">
                        {{ Form::open() }}
                        {{ Form::text('email-input', '', ['class' => 'email-input', 'placeholder' => 'Enter your email']) }}
                        {{ Form::button('<i class="icon ion-ios-email-outline"></i>', ['class' => 'submit-btn']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
