@extends('layouts.app')

@section('content')
<div class="content">
                    <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="{{asset('/images/bg-static.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay" style="background-color:#0000"></div>
                        <div class="bubble-bg"></div>
                        <div class="container">
                            <div class="section-title center-align">
                                <h2><span>{{__('contact.Our Contacts')}}</span></h2>
                                <div class="breadcrumbs fl-wrap"><a href="#">{{__('contact.Home')}}</a> <span>{{__('contact.Contact')}}</span></div>
                                <span class="section-separator"></span>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <!--<div class="container"><a href="#sec1" class="custom-scroll-link">Let's Start</a></div>-->
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
                                            <h3>{{__('contact.Contact')}}<span> {{__('contact.Details')}}</span></h3>
                                        </div>
                                        <div class="list-single-main-media fl-wrap">
                                            <img src="images/all/1.jpg" class="respimg" alt="">
                                        </div>
                                        <p>Ihr Reisevermittler für die Makarska Riviera. 
Ob traumhafte Ferienhäuser mit Swimmingpool oder hochwertig eingerichtete Apartments, 
wir haben die perfekte Unterkunft für Ihren Urlaub an der Makarska Riviera.</p>
                                        <div class="list-author-widget-contacts">
                                            <ul>
                                                <li><span><i class="fa fa-map-marker"></i> {{__('contact.Adress')}} :</span> <a href="#">Saarlandstr. 113, 55411 Bingen am Rhein, Deutschland
</a></li>
                                                <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                                <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-widget-social">
                                            <ul>
                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="list-single-main-wrapper fl-wrap">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>{{__('contact.Get In Touch')}}</h3>
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
                                                <button class="btn  big-btn  color-bg flat-btn" id="submit">{{__('contact.Send')}}<i class="fa fa-angle-right"></i></button>
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
                                        <h3>{{__('contact.Join our online community')}}</h3>
                                        <p>{{__('contact.Grow your marketing and be happy with your online business')}}</p>
                                    </div>
                                    <div class="col-md-4"><a href="#" class="join-wrap-btn modal-open">{{__('contact.Sign Up')}} <i class="fa fa-sign-in"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                </div>
                @endsection