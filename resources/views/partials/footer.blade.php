<!--====================  footer area ====================-->
<div class="footer-area-wrapper bg-gray">
    <div class="footer-area section-space--ptb_80">
        <div class="container">
            <div class="row footer-widget-wrapper">
                <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                    <div class="footer-widget__logo mb-30">
                        <img src="{{asset('assets/images/logo.png')}}" width="160" height="48" class="img-fluid" alt="">
                    </div>
                    <ul class="footer-widget__list">
                        <li>58 Howard Street #2 San Francisco, CA 941</li>
                        <li><a href="mailto:contact@aeroland.com" class="hover-style-link">sales@emmerxion.com</a></li>
                        <li><a href="tel:123344556" class="hover-style-link text-black font-weight--bold">(+68)1221 09876</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">IT Services</h6>
                    <ul class="footer-widget__list">
                        <li><a href="#" class="hover-style-link">Managed IT</a></li>
                        <li><a href="#" class="hover-style-link">IT Support</a></li>
                        <li><a href="#" class="hover-style-link">IT Consultancy</a></li>
                        <li><a href="#" class="hover-style-link">Cloud Computing</a></li>
                        <li><a href="#" class="hover-style-link">Cyber Security</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Quick links</h6>
                    <ul class="footer-widget__list">
                        <li><a href="#" class="hover-style-link">Pick up locations</a></li>
                        <li><a href="#" class="hover-style-link">Terms of Payment</a></li>
                        <li><a href="#" class="hover-style-link">Privacy Policy</a></li>
                        <li><a href="#" class="hover-style-link">Where to Find Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Support</h6>
                    <ul class="footer-widget__list">
                        <li><a href="#" class="hover-style-link">Forum Support</a></li>
                        <li><a href="#" class="hover-style-link">Help & FAQ</a></li>
                        <li><a href="#" class="hover-style-link">Contact Us</a></li>
                        <li><a href="#" class="hover-style-link">Pricing and plans</a></li>
                        <li><a href="#" class="hover-style-link">Cookies Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <div class="footer-widget__title section-space--mb_50"></div>
                    <ul class="footer-widget__list">
                        <li><a href="#" class="image_btn"><img class="img-fluid" src="{{asset('assets/images/icons/aeroland-button-google-play.webp')}}" alt=""></a></li>
                        <li><a href="#" class="image_btn"><img class="img-fluid" src="{{asset('assets/images/icons/aeroland-button-app-store.webp')}}" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area section-space--pb_30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <span class="copyright-text">&copy; {{\Carbon\Carbon::now()->format('Y')}} Emmerxion. All Rights Reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="list ht-social-networks solid-rounded-icon">

                        <li class="item">
                            <a href="https://twitter.com" target="_blank" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-twitter link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://facebook.com" target="_blank" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-facebook-f link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://instagram.com" target="_blank" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-instagram link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://linkedin.com" target="_blank" aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-linkedin link-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  End of footer area  ====================-->
<!-- End Toolbar -->
<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!--====================  End of scroll top  ====================-->

<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-end">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="">
                        <a href="{{route('home')}}"><span>Home</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('about-us')}}"><span>About Us</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('tech-services')}}"><span>Tech Services</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('digital-solutions')}}"><span>Digital Solutions</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('contact-us')}}"><span>Contact Us</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->

<!--====================  search overlay ====================-->
<div class="search-overlay" id="search-overlay">

    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ms-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-end">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="#">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
