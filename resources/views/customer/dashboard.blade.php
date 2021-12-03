@extends('layouts.app')
@section('content')
    
    <!--content -->  
    <div class="content">
        <!--section --> 
        <section id="sec1">
            <!-- container -->
            <div class="container">
                <!-- profile-edit-wrap -->
                <div class="profile-edit-wrap">
                    <div class="profile-edit-page-header">
                        <h2>Dashboard</h2>
                        <div class="breadcrumbs"><a href="#">Home</a><span>Dasboard</span></div>
                    </div>
                    <div class="row">
                        @include('customer.sidebar')
                        <div class="col-md-9">
                            <!-- profile-edit-container--> 
                            <div class="profile-edit-container">
                                <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                    <h4>Hello , <span>{{Auth::guard('customer')->user()->name}}</span></h4>
                                </div>
                                <!--<div class="notification success fl-wrap">-->
                                <!--    <p>Your listing <a href="#">Fitness Center Brooklyn</a> has been approved!</p>-->
                                <!--    <a class="notification-close" href="#"><i class="fa fa-times"></i></a>-->
                                <!--</div>                                            -->
                                        <!-- statistic-container--> 
                                <div class="statistic-container fl-wrap">
                                <!-- statistic-item-wrap--> 
                                    <div class="statistic-item-wrap"> 
                                    <div class="statistic-item gradient-bg fl-wrap">
                                        <i class="fa fa-map-marker"></i>
                                        <div class="statistic-item-numder">21</div>
                                        <h5>Active Listings</h5>
                                    </div>
                                    </div>
                                <!-- statistic-item-wrap end-->                                            
                                <!-- statistic-item-wrap--> 
                                    <div class="statistic-item-wrap"> 
                                    <div class="statistic-item gradient-bg fl-wrap">
                                        <i class="fa fa fa-eye"></i>
                                        <div class="statistic-item-numder">1054</div>
                                        <h5>Listing Views</h5>
                                    </div>
                                    </div>
                                <!-- statistic-item-wrap end-->                                             
                                <!-- statistic-item-wrap--> 
                                    <div class="statistic-item-wrap"> 
                                    <div class="statistic-item gradient-bg fl-wrap">
                                        <i class="fa fa-comments-o"></i>
                                        <div class="statistic-item-numder">675</div>
                                        <h5>Total Reviews</h5>
                                    </div>
                                    </div>
                                <!-- statistic-item-wrap end-->                                            
                                <!-- statistic-item-wrap--> 
                                    <div class="statistic-item-wrap"> 
                                    <div class="statistic-item gradient-bg fl-wrap">
                                        <i class="fa fa-heart-o"></i>
                                        <div class="statistic-item-numder">154</div>
                                        <h5>Times Bookmarked</h5>
                                    </div>
                                    </div>
                                <!-- statistic-item-wrap end-->  
                                </div>
                                <!-- statistic-container end--> 
                            </div>
                            <!-- profile-edit-container end-->  
                                                                    
                        </div>
                    </div>
                </div>
                <!--profile-edit-wrap end -->
            </div>
            <!--container end -->
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
                            <h3>Do You Have Questions ?</h3>
                            <p>Lorem ipsum dolor sit amet, harum dolor nec in, usu molestiae at no.</p>
                        </div>
                        <div class="col-md-4"><a href="contacts.html" class="join-wrap-btn">Get In Touch <i class="fa fa-envelope-o"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->
    </div>

@endsection