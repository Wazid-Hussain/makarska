@extends('layouts.app')

@section('content')


                <!--  content  --> 
                <div class="content">
                    <!--  section  --> 
                    <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="{{asset('/images/bg-static.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay" style="background-color:#0000"></div>
                        <div class="container">
                            <div class="section-title center-align"><br>
                                <h2><span style="color:#fff;">{{__('nav.Accommodation')}}</span></h2>

                                <span class="section-separator"></span>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <br>
                        </div>
                    </section>
                    <!--  section  end--> 
                    <!--  section  --> 
                    <section class="gray-bg no-pading no-top-padding" id="sec1">
                        <div class="col-list-wrap  center-col-list-wrap left-list">
                            <div class="container">
                                <!-- list-main-wrap-->
                                <div class="list-main-wrap fl-wrap card-listing">
                                    
                                    @foreach($listings as $key => $listing)
                                    
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="{{asset('/storage/'.$listing->images[0]->path.'/'.$listing->images[0]->image_name)}}" alt="">
                                                <div class="overlay"></div>
                                                <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <!--<a class="listing-geodir-category" href="listing.html">Restourants</a>-->
                                                <h3><a href="{{route('single-listing',$listing->id)}}">{{$listing->title}}</a></h3>
                                                <p>{{ substr($listing->description, 0,  100) }} <a href="{{route('single-listing',$listing->id)}}"> ...</a></p>
                                                <div class="geodir-category-options fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                        <span>(7 reviews)</span>
                                                    </div>
                                                    <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$listing->city}}, {{$listing->street}}, {{$listing->address}}</a></div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <!-- listing-item end-->  
                                    @endforeach
                                                
                                    <!-- pagination-->

                                </div>
                                <!-- list-main-wrap end-->                           
                            </div>
                        </div>
                    </section>
                    <!--  section  end--> 
                    <div class="limit-box fl-wrap"></div>
                    <!--  section  --> 
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
                    <!--  section  end--> 
                </div>
                <!--  content  end--> 


@endsection