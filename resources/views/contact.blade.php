@extends('layouts.app')

@section('content')
<div class="content">
                    <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="bubble-bg"></div>
                        <div class="container">
                            <div class="section-title center-align">
                                <h2><span>Our Contacts</span></h2>
                                <div class="breadcrumbs fl-wrap"><a href="#">Home</a> <span>Contacts</span></div>
                                <span class="section-separator"></span>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec1" class="custom-scroll-link">Let's Start</a></div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!--section -->  
                    <section id="sec1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="list-single-main-item fl-wrap">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Contact <span>Details </span></h3>
                                        </div>
                                        <div class="list-single-main-media fl-wrap">
                                            <img src="images/all/1.jpg" class="respimg" alt="">
                                        </div>
                                        <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        <div class="list-author-widget-contacts">
                                            <ul>
                                                <li><span><i class="fa fa-map-marker"></i> Adress :</span> <a href="#">USA 27TH Brooklyn NY</a></li>
                                                <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                                <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a></li>
                                                <li><span><i class="fa fa-globe"></i> Website :</span> <a href="#">themeforest.net</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-widget-social">
                                            <ul>
                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-vk"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="list-single-main-wrapper fl-wrap">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Our Location</h3>
                                        </div>
                                        <div class="map-container">
                                            <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                                        </div>
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>Get In Touch</h3>
                                        </div>
                                        <div id="contact-form">
                                            <div id="message"></div>
                                            <form  class="custom-form" action="php/contact.php" name="contactform" id="contactform">
                                                <fieldset>
                                                    <label><i class="fa fa-user-o"></i></label>
                                                    <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                                    <div class="clearfix"></div>
                                                    <label><i class="fa fa-envelope-o"></i>  </label>
                                                    <input type="text"  name="email" id="email" placeholder="Email Address*" value=""/>
													<div class="clearfix"></div>
													<label><i class="fa fa-phone"></i>  </label>
                                                    <input type="text"  name="phone" id="phone" placeholder="Phone *" value=""/>
                                                    <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>
                                                    <div class="verify-wrap">
                                                        <span class="verify-text"> How many gnomes were in the story about the "Snow-white" ?</span>
                                                        <input name="verify" type="text" id="verify" onClick="this.select()" value="0" >
                                                    </div>
                                                </fieldset>
                                                <button class="btn  big-btn  color-bg flat-btn" id="submit">Send<i class="fa fa-angle-right"></i></button>
                                            </form>
                                        </div>
                                        <!-- contact form  end--> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                    <div class="limit-box fl-wrap"></div>
                    <!--section -->  
                    <section class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg="images/bg/circle.png"></div>
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
                    <!-- section end -->
                </div>
                @endsection