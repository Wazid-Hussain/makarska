@extends('layouts.app')

@section('content')


                <!--  content  --> 
                <div class="content">
                    <!--section --> 
                    <section class="parallax-section" data-scrollax-parent="true" id="sec1">
                        <div class="bg par-elem " data-bg="{{asset('/images/projects-bg.jpg')}}" data-scrollax="properties: { translateY: '30%' }" ></div>
                        <div class="overlay" style="background-color:#000;"></div>
                        <div class="container">
                            <div class="section-title center-align">
                                <h2><span>How It Works / FAQ</span></h2>
                                <div class="breadcrumbs fl-wrap"><a href="#">Home</a><span>How It Works</span></div>
                                <span class="section-separator"></span>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec2" class="custom-scroll-link">Let's Start</a></div>
                        </div>
                    </section>
                    <!-- section end -->

                    <!--section -->  
                    <section id="sec2">
                        <div class="container">
                            <div class="section-title">
                                <h2> Steps to  improve your business</h2>
                                <div class="section-subtitle">popular questions</div>
                                <span class="section-separator"></span>
                                <p>Explore some of the best tips from around the city from our partners and friends.</p>
                            </div>
                            <div class="time-line-wrap fl-wrap">
                                <!--  time-line-container  --> 
                                <div class="time-line-container">
                                    <div class="step-item">Step 1</div>
                                    <div class="time-line-box tl-text tl-left">
                                        <span class="process-count">01 . </span>
                                        <div class="time-line-icon">
                                            <i class="fa fa-map-o"></i>
                                        </div>
                                        <h3>Find Interesting Place</h3>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
                                    </div>
                                    <div class="time-line-box tl-media tl-right">
                                        <img src="images/all/1.jpg" alt="">
                                    </div>
                                </div>
                                <!--  time-line-container --> 
                                <!--  time-line-container  --> 
                                <div class="time-line-container lf-im">
                                    <div class="step-item">Step 2</div>
                                    <div class="time-line-box tl-text tl-right">
                                        <span class="process-count">02 . </span>
                                        <div class="time-line-icon">
                                            <i class="fa fa-envelope-open-o"></i>
                                        </div>
                                        <h3>Contact a Few Owners</h3>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
                                    </div>
                                    <div class="time-line-box tl-media tl-left">
                                        <img src="images/all/1.jpg" alt="">
                                    </div>
                                </div>
                                <!--  time-line-container -->                             
                                <!--  time-line-container  --> 
                                <div class="time-line-container">
                                    <div class="step-item">Step 3</div>
                                    <div class="time-line-box tl-text tl-left">
                                        <span class="process-count">03 . </span>
                                        <div class="time-line-icon">
                                            <i class="fa fa-hand-peace-o"></i>
                                        </div>
                                        <h3>Make a Listing</h3>
                                        <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
                                    </div>
                                    <div class="time-line-box tl-media tl-right">
                                        <img src="images/all/1.jpg" alt="">
                                    </div>
                                </div>
                                <!--  time-line-container -->                             
                                <div class="timeline-end"><i class="fa fa-check"></i></div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                    

                    <!--section -->  
                    <section class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg="images/bg/circle.png" style="background-image: url(&quot;images/bg/circle.png&quot;);"></div>
                        </div>
                        <div class="container">
                            <div class="join-wrap fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Join our online community</h3>
                                        <p>Grow your marketing and be happy with your online business</p>
                                    </div>
                                    <div class="col-md-4"><a href="#" class="join-wrap-btn modal-open">Sign Up <i class="fa fa-sign-in"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="limit-box"></div>
                </div>
                <!--  content  end--> 


@endsection