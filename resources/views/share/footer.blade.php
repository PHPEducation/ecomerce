<footer>
    <div class="footer-inner">
        <div class="news-letter">
            <div class="container">
                <div class="heading text-center">
                    <h2>{{__('JustSubscribeNow')}}</h2>
                    <span>{{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. Sed feugiat, tellus vel tristique posuere.')}}</span>
                </div>
                {!! Form::open() !!}
                    Form::text('email', 'Enter your email address')
                    Form::button('__('Sendme')!')
                {!! Form::close() !!}
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <h4>{{__('About')}}</h4>
                    <div class="contacts-info">
                        <p>{{__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.')}}. </p>
                        <address>
                            <i class="fa fa-location-arrow"></i> <span>Company, 12/34 - West 21st Street,<br>
                            New York, USA</span>
                        </address>
                        <div class="phone-footer"><i class="fa fa-phone"></i> +1 123 456 98765</div>
                        <div class="email-footer"><i class="fa fa-envelope"></i> <a href="mailto:support@example.com">support@example.com</a> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-6 col-xs-12">
                    <h4>{{__('Helpful Links')}}</h4>
                    <ul class="links">
                        <li><a href="#">{{__('Products')}}</a></li>
                        <li><a href="#">{{__('FindStore')}}</a></li>
                        <li><a href="#">{{__('Features')}}</a></li>
                        <li><a href="#">{{__('Privacy Policy')}}</a></li>
                        <li><a href="blog.html">{{__('Blog')}}</a></li>
                        <li><a href="sitemap.html">{{__('Site Map')}}</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-6 col-xs-12">
                    <h4>{{__('Shop')}}</h4>
                    <ul class="links">
                        <li><a href="about-us.html">{{__('About Us')}}</a></li>
                        <li><a href="faq.html">{{__('FAQs')}}</a></li>
                        <li><a href="#">{{__('Shipping Methods')}}</a></li>
                        <li><a href="contact.html">{{__('Contact')}}</a></li>
                        <li><a href="#">{{__('Support')}}</a></li>
                        <li><a href="#">{{__('Retailer')}}</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-lg-3 col-md-4 col-sm-6">
                    <div class="social">
                        <h4>{{__('Follow us')}}</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                    <div class="payment-accept">
                        <h4>{{__('Secure Payment')}}</h4>
                        <div class="payment-icon"><img src="images/paypal.png" alt="paypal"> <img src="images/visa.png" alt="visa"> <img src="images/american-exp.png" alt="american express"> <img src="images/mastercard.png" alt="mastercard"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 coppyright text-center">{{__('© 2018 Fabulous, All rights reserved.')}}</div>
            </div>
        </div>
    </div>
</footer>
