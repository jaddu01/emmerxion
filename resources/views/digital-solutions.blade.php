@extends('layouts.app')
@section('content')
    <div class="site-wrapper-reveal">
        <!--===========  Projects wrapper Start =============-->
        <div class="projects-wrapper section-space--pb_70 section-space--pt_100 projects-masonary-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading">Our projects<span class="text-color-primary"> make us proud</span></h3>
                        </div>

                        <div class="messonry-button text-center  section-space--mb_60">
                            <button data-filter="*" class="is-checked"><span class="filter-text">All</span><span class="filter-counter">6</span></button>
                            <button data-filter=".cat--1"><span class="filter-text">Cloud Services</span> <span class="filter-counter">1</span></button>
                            <button data-filter=".cat--2"><span class="filter-text">Cyber Security</span> <span class="filter-counter">3</span></button>
                            <button data-filter=".cat--3"><span class="filter-text">IT consultancy</span> <span class="filter-counter">1</span></button>
                            <button data-filter=".cat--4"><span class="filter-text">IT Security</span> <span class="filter-counter">1</span></button>
                        </div>
                    </div>
                </div>

                <div class="projects-case-wrap">
                    <div class="row mesonry-list">

                        <!--<div class="resizer"></div>-->
                        <div class="col-lg-4 col-md-6 cat--2">
                            <!-- Projects Wrap Start -->
                            <a href="#" class="projects-wrap style-2">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid" src="{{asset('assets/images/projects/case-study-01-480x298.webp')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="post-categories">Customised Business Solution</div>
                                        <h6 class="heading">Emmerxion-Smart Vision</h6>
                                    </div>
                                </div>
                            </a>
                            <!-- Projects Wrap End -->
                        </div>

                        <div class="col-lg-4 col-md-6 cat--2 ">
                            <!-- Projects Wrap Start -->
                            <a href="#" class="projects-wrap style-2">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid" src="{{asset('assets/images/projects/case-study-02-480x298.webp')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="post-categories">Business ERP Solution</div>
                                        <h6 class="heading">Arden-Internal Networking</h6>
                                    </div>
                                </div>
                            </a>
                            <!-- Projects Wrap End -->
                        </div>

                        <div class="col-lg-4 col-md-6 cat--2">
                            <!-- Projects Wrap Start -->
                            <a href="#" class="projects-wrap style-2">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid" src="{{asset('assets/images/projects/case-study-03-480x298.webp')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="post-categories">E-commerce Solution</div>
                                        <h6 class="heading">A Freeserve case study</h6>
                                    </div>
                                </div>
                            </a>
                            <!-- Projects Wrap End -->
                        </div>

                        <div class="col-lg-4 col-md-6 cat--1">
                            <!-- Projects Wrap Start -->
                            <a href="#" class="projects-wrap style-2">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid" src="{{asset('assets/images/projects/case-study-04-480x298.webp')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="post-categories">Digitization Solution</div>
                                        <h6 class="heading">Aqua – Research and Energy</h6>
                                    </div>
                                </div>
                            </a>
                            <!-- Projects Wrap End -->
                        </div>

                        <div class="col-lg-4 col-md-6 cat--3">
                            <!-- Projects Wrap Start -->
                            <a href="#" class="projects-wrap style-2">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid" src="{{asset('assets/images/projects/case-study-05-480x298.webp')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="post-categories">Mobile Marketplace Solution</div>
                                        <h6 class="heading">A Sixbase typical case study</h6>
                                    </div>
                                </div>
                            </a>
                            <!-- Projects Wrap End -->
                        </div>

                        <div class="col-lg-4 col-md-6 cat--4">
                            <!-- Projects Wrap Start -->
                            <a href="#" class="projects-wrap style-2">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img class="img-fluid" src="{{asset('assets/images/projects/case-study-06-480x298.webp')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="post-categories">Learning Management Solution</div>
                                        <h6 class="heading">Healsoul – Technology & Health</h6>
                                    </div>
                                </div>
                            </a>
                            <!-- Projects Wrap End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  Projects wrapper End =============-->

        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                            <h3 class="heading text-white">We run all kinds of IT services that vow your <span class="text-color-secondary"> success</span></h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--one text-center">
                            <a href="#" class="btn btn--white btn-one"><span class="btn-icon me-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                            <a href="#" class="btn btn--secondary  btn-two"><span class="btn-icon me-2"><i class="far fa-info-circle"></i></span> Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->

    </div>
@endsection
