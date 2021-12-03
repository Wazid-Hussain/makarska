@extends('layouts.app')

@section('content')
<!--  content  --> 
<div class="content">
    <!--  section  --> 
    <section class="parallax-section single-par list-single-section" data-scrollax-parent="true" id="sec1">
        <div class="bg par-elem "  data-bg="{{asset('/storage/'.$listing->images[0]->path.'/'.$listing->images[0]->image_name)}}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="bubble-bg"></div>
        <div class="list-single-header absolute-header fl-wrap">
            <div class="container">
                <div class="list-single-header-item">
                    <div class="list-single-header-item-opt fl-wrap">
                        <div class="list-single-header-cat fl-wrap">
                            <a href="#">{{$category->title}}</a>
                            <span>  Now Opening <i class="fa fa-check"></i></span>
                        </div>
                    </div>
                    <h2>{{$listing->title}}</h2>
                    <span class="section-separator"></span>
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                        <span>(11 reviews)</span>
                    </div>
                    <div class="list-post-counter single-list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-single-header-contacts fl-wrap">
                                <ul>
                                    <li><i class="fa fa-phone"></i><a  href="#">{{$user->phone}}</a></li>
                                    <li><i class="fa fa-map-marker"></i><a  href="#">{{$listing->city}}, {{$listing->address}}</a></li>
                                    <li><i class="fa fa-envelope-o"></i><a  href="#">{{$user->email}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fl-wrap list-single-header-column">
                                <div class="share-holder hid-share">
                                    <div class="showshare"><span>Share </span><i class="fa fa-share"></i></div>
                                    <div class="share-container  isShare"></div>
                                </div>
                                <span class="viewed-counter"><i class="fa fa-eye"></i> Viewed -  156 </span>
                                <a class="custom-scroll-link" href="#sec5"><i class="fa fa-hand-o-right"></i>Add Review </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  section end --> 
    <div class="scroll-nav-wrapper fl-wrap">
        <div class="container">
            <nav class="scroll-nav scroll-init">
                <ul>
                    <li><a class="act-scrlink" href="#sec1">Top</a></li>
                    <li><a href="#sec3">Gallery</a></li>
                    <li><a href="#sec2">Details</a></li>
                    <li><a href="#sec4">Reviews</a></li>
                </ul>
            </nav>
            {{-- <a href="#" class="save-btn"> <i class="fa fa-heart"></i> Save </a> --}}
        </div>
    </div>
    <!--  section  --> 
    <section class="gray-section no-top-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="list-single-main-wrapper fl-wrap" id="sec2">
                        <div class="breadcrumbs gradient-bg  fl-wrap"><a href="#">Home</a><a href="#">Listings</a><span>{{$listing->title}}</span></div>

                        
                        <div class="list-single-main-item fl-wrap" id="sec3">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>Gallery - Photos</h3>
                            </div>
                            <!-- gallery-items   -->
                            <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">

                                @foreach ($listingImages as $image)
                                <!-- Image -->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <img src="{{asset('/storage/'.$image->path.'/'.$image->image_name)}}"   alt="">
                                            <a href="{{asset('/storage/'.$image->path.'/'.$image->image_name)}}" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Image end -->                                    
                                @endforeach
                            </div>
                            <!-- end gallery items -->                                 
                        </div>



                        <div class="list-single-main-item fl-wrap">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>About {{$listing->title}}</h3>
                            </div>
                            <p>{{$listing->description}}</p>
                            <span class="fw-separator"></span>
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>Amenities</h3>
                            </div>
                            <div class="listing-features fl-wrap">
                                <ul>
                                    <li><i class="fa fa-rocket"></i> Elevator in building</li>
                                    <li><i class="fa fa-wifi"></i> Free Wi Fi</li>
                                    <li><i class="fa fa-motorcycle"></i> Free Parking</li>
                                    <li><i class="fa fa-cloud"></i> Air Conditioned</li>
                                    <li><i class="fa fa-shopping-cart"></i> Online Ordering</li>
                                    <li><i class="fa fa-paw"></i> Pet Friendly</li>
                                    <li><i class="fa fa-tree"></i> Outdoor Seating</li>
                                    <li><i class="fa fa-wheelchair"></i> Wheelchair Friendly</li>
                                </ul>
                            </div>
                            <span class="fw-separator"></span>
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>Tags</h3>
                            </div>
                            <div class="list-single-tags tags-stylwrap">
                                <a href="#">Lunch</a>
                                <a href="#">Friendly service</a>
                                <a href="#">Wine</a>
                                <a href="#">Sandwich</a>
                                <a href="#">Food</a>
                                <a href="#">Cocktails</a>                                                                               
                            </div>
                        </div>


                        <div class="list-single-facts fl-wrap gradient-bg">
                            <!-- inline-facts -->
                            <div class="inline-facts-wrap">
                                <div class="inline-facts">
                                    <i class="fa fa-male"></i>
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0" data-num="154">0</div>
                                        </div>
                                    </div>
                                    <h6>New Visiters Every Week</h6>
                                </div>
                            </div>
                            <!-- inline-facts end -->

                            <!-- inline-facts  -->
                            <div class="inline-facts-wrap">
                                <div class="inline-facts">
                                    <i class="fa fa-hand-peace-o"></i>
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0" data-num="12168">0</div>
                                        </div>
                                    </div>
                                    <h6>Happy customers every year</h6>
                                </div>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts-wrap">
                                <div class="inline-facts">
                                    <i class="fa fa-trophy"></i>
                                    <div class="milestone-counter">
                                        <div class="stats animaper">
                                            <div class="num" data-content="0" data-num="72">0</div>
                                        </div>
                                    </div>
                                    <h6>Won Awards</h6>
                                </div>
                            </div>
                            <!-- inline-facts end -->                            
                        </div>
                        <!-- list-single-main-item end -->   
                        <!-- list-single-main-item -->   
                        <div class="list-single-main-item fl-wrap" id="sec4">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>Item Revies -  <span> 0 </span></h3>
                            </div>
                            <div class="reviews-comments-wrap">
                                <!-- reviews-comments-item -->  
                                <!-- <div class="reviews-comments-item">
                                    <div class="review-comments-avatar">
                                        <img src="images/avatar/1.jpg" alt=""> 
                                    </div>
                                    <div class="reviews-comments-item-text">
                                        <h4><a href="#">Jessie Manrty</a></h4>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="clearfix"></div>
                                        <p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>27 May 2018</span>
                                    </div>
                                </div> -->
                                <!--reviews-comments-item end-->                                                                 
                            </div>
                        </div>
                        <!-- list-single-main-item end -->   
                        <!-- list-single-main-item -->   
                        <div class="list-single-main-item fl-wrap" id="sec5">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>Add Revies  & Rate iteam</h3>
                            </div>
                            <!-- Add Review Box -->
                            <div id="add-review" class="add-review-box">
                                <div class="leave-rating-wrap">
                                    <span class="leave-rating-title">Your rating  for this listing : </span>
                                    <div class="leave-rating">
                                        <input type="radio" name="rating" id="rating-1" value="1"/>
                                        <label for="rating-1" class="fa fa-star-o"></label>
                                        <input type="radio" name="rating" id="rating-2" value="2"/>
                                        <label for="rating-2" class="fa fa-star-o"></label>
                                        <input type="radio" name="rating" id="rating-3" value="3"/>
                                        <label for="rating-3" class="fa fa-star-o"></label>
                                        <input type="radio" name="rating" id="rating-4" value="4"/>
                                        <label for="rating-4" class="fa fa-star-o"></label>
                                        <input type="radio" name="rating" id="rating-5" value="5"/>
                                        <label for="rating-5" class="fa fa-star-o"></label>
                                    </div>
                                </div>
                                <!-- Review Comment -->
                                <form   class="add-comment custom-form">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><i class="fa fa-user-o"></i></label>
                                                <input type="text" placeholder="Your Name *" value=""/>
                                            </div>
                                            <div class="col-md-6">
                                                <label><i class="fa fa-envelope-o"></i>  </label>
                                                <input type="text" placeholder="Email Address*" value=""/>
                                            </div>
                                        </div>
                                        <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>
                                    </fieldset>
                                    <button class="btn  big-btn  color-bg flat-btn">Submit Review <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Add Review Box / End -->
                        </div>
                        <!-- list-single-main-item end -->                            
                    </div>
                </div>
                <!--box-widget-wrap -->
                <div class="col-md-4">
                    <div class="box-widget-wrap">
                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap">
                            <div class="box-widget-item-header">
                                <h3>Book Now : </h3>
                            </div>
                            <div class="box-widget opening-hours">
                                <div class="box-widget-content"> 
                                

                                        
                                
                                    <form   class="add-comment custom-form" method="post" action="{{route('add-booking')}}">
                                        @csrf                   
                                        <fieldset>
                                            <input type="hidden" name="listing_id" value="{{$listing->id}}">
                                            <div class="row">
                                                <div class="col-md-12">      
                                                    <span>Check In / check out Date :</span>                         
                                                    <label><i class="fa fa-calendar-check-o"></i>  </label>
                                                    <input id="check-in" type="text" placeholder="check in date" class="datepicker"   data-large-mode="true" data-large-default="true" value=""/>
                                                </div>
                                                <input id="input-start-from" type="hidden" name="start_from" value=''>
                                                <input id="input-end-to" type="hidden" name="end_to" value=''>
                                                {{-- <div class="col-md-6"> 
                                                    <span>Check Out Date :</span>                                
                                                    <label><i class="fa fa-calendar-check-o"></i>  </label>
                                                    <input id="check-out" type="text" placeholder="check out date" class="datepicker"   data-large-mode="true" data-large-default="true" value=""/>
                                                </div> --}}
                                            </div>

                                            <div class="quantity fl-wrap">
                                                <span><i class="fa fa-user-plus"></i>Adults : </span>
                                                <div class="quantity-item">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="text" id="adults"   name="adults"   title="Qty" class="qty" min="1" max="3" step="1" value="1">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                            
                                            <div class="quantity fl-wrap">
                                                <span><i class="fa fa-user-plus"></i>Children : </span>
                                                <div class="quantity-item">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="text" id="children"   name="children"   title="Qty" class="qty" min="0" max="3" step="1" value="0">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="quantity fl-wrap">
                                                        <div class="quantity-item">
                                                            <span id="price" data-price="{{$listing->price}}">${{$listing->price}} x</span><span id="night-count"> </span> <span id="total-amount"></span>
                                                            <input id="input-total-amount" type="hidden" name="total_price" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <textarea cols="40" rows="3" name="additional_info" placeholder="Additional Information:"></textarea>
                                        </fieldset>
                                        <button type="submit" class="btn  big-btn  color-bg flat-btn book-btn">Book Now<i class="fa fa-angle-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->                                      								
                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap">
                            <div class="box-widget-item-header">
                                <h3>Hosted by : </h3>
                            </div>
                            <div class="box-widget list-author-widget">
                                <div class="list-author-widget-header shapes-bg-small  color-bg fl-wrap">
                                    <span class="list-author-widget-link"><a href="#">{{ $user->name}}</a></span>
                                    <img src="{{asset('/storage/images/' . $user->image)}}" alt=""> 
                                </div>
                                <div class="box-widget-content">
                                    <div class="list-author-widget-text">
                                        <div class="list-author-widget-contacts">
                                            <ul>
                                                <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">{{$user->phone}}</a></li>
                                                <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">{{$user->email}}</a></li>
                                                <li><span>{{$user->desc}}</span></li>
                                            </ul>
                                        </div>
                                        <!-- <a href="#" class="btn transparent-btn">View Profile <i class="fa fa-eye"></i></a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->
                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap">
                            <div class="box-widget-item-header">
                                <h3>More from this employer : </h3>
                            </div>
                            <div class="box-widget widget-posts">
                                <div class="box-widget-content">
                                    <ul>
                                        @foreach($userListings as $listing)
                                        
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg"  alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">{{$listing->title}}</a>
                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 2017 </span> 
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <a class="widget-posts-link" href="#">See All Listing<span><i class="fa fa-angle-right"></i></span></a>   
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->     
                    </div>
                </div>
                <!--box-widget-wrap end -->
            </div>
        </div>
    </section>
    <!--  section end --> 
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
<!--  content end  --> 



<div class="booking-modal-wrap">
                <div class="booking-modal-container">
                    <div class="booking-modal-content fl-wrap">
                        <div class="booking-modal-info">
                            <div class="booking-modal-close color-bg"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <div class="bg" data-bg="images/bg/1.jpg" style="background-image: url(&quot;images/bg/1.jpg&quot;);"></div>
                            <div class="overlay"></div>
                            <div class="booking-modal-info_content fl-wrap">
                                <h4>Luxury Hotel Spa</h4>
                                <ul>
                                    <li>Date : <span>05.05.2020</span></li>
                                    <li>Persons : <span>2</span></li>
                                    <li>Price : <span>$120</span> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bookiing-form-wrap">
                            <ul id="progressbar">
                                <li class=""><span>01.</span>Personal Info</li>
                                <li class="active"><span>02.</span>Billing Address</li>
                                <li class=""><span>03.</span>Payment Method</li>
                                <li class=""><span>04.</span>Confirm</li>
                            </ul>
                            <!--   list-single-main-item -->
                            <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                <div class="profile-edit-container">
                                    <div class="custom-form">
                                        <form>
                                            <fieldset class="fl-wrap" style="transform: scale(1); position: relative; opacity: 1;">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Your personal Information</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>First Name <i class="fa fa-user"></i></label>
                                                        <input type="text" placeholder="Your Name" value="">                                                  
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Last Name <i class="fa fa-user"></i></label>
                                                        <input type="text" placeholder="Your Last Name" value=""> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>Email Address<i class="fa fa-envelope"></i>  </label>
                                                        <input type="text" placeholder="yourmail@domain.com" value="">                                                  
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Phone<i class="fa fa-phone"></i>  </label>
                                                        <input type="text" placeholder="87945612233" value="">
                                                    </div>
                                                </div>
                                                <div class="log-massage">Existing Customer? <a href="#" class="modal-open">Click here to login</a></div>
                                                <div class="log-separator fl-wrap"><span>or</span></div>
                                                <div class="soc-log fl-wrap">
                                                    <p>For faster login or register use your social account.</p>
                                                    <a href="#" class="facebook-log"><i class="fa fa-facebook-f"></i>Connect with Facebook</a>
                                                </div>
                                                <div class="filter-tags">
                                                    <input id="check-ac" type="checkbox" name="check">
                                                    <label for="check-ac">By continuing, you agree to the<a href="#" target="_blank">Terms and Conditions</a>.</label>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <a href="#" class="next-form back-form action-button btn  big-btn  color-bg flat-btn">Payment Step 
                                                <i class="fa fa-angle-right"></i></a>
                                            </fieldset>
                                            <fieldset class="fl-wrap" style="display: none; left: 50%; opacity: 0; position: absolute; transform: scale(1);">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Billing Address</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>City <i class="fa fa-globe"></i></label>
                                                        <input type="text" placeholder="Your city" value="">                                                  
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Country </label>
                                                        <select data-placeholder="Your Country" class="chosen-select no-search-select" style="display: none;">
                                                            <option>United states</option>
                                                            <option>Asia</option>
                                                            <option>Australia</option>
                                                            <option>Europe</option>
                                                            <option>South America</option>
                                                            <option>Africa</option>
                                                        </select><div class="nice-select chosen-select no-search-select" tabindex="0"><span class="current">United states</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="United states" class="option selected">United states</li><li data-value="Asia" class="option">Asia</li><li data-value="Australia" class="option">Australia</li><li data-value="Europe" class="option">Europe</li><li data-value="South America" class="option">South America</li><li data-value="Africa" class="option">Africa</li></ul></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label>Street <i class="fa fa-road"></i> </label>
                                                        <input type="text" placeholder="Your Street" value="">                                                  
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <label>State<i class="fa fa-street-view"></i></label>
                                                        <input type="text" placeholder="Your State" value="">                                                  
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Postal code<i class="fa fa-barcode"></i> </label>
                                                        <input type="text" placeholder="123456" value="">
                                                    </div>
                                                </div>
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Addtional Notes</h3>
                                                </div>
                                                <textarea cols="40" rows="3" placeholder="Notes"></textarea>
                                                <span class="fw-separator"></span>
                                                <a href="#" class="previous-form action-button back-form   color-bg"><i class="fa fa-angle-left"></i> Back</a>
                                                <a href="#" class="next-form back-form action-button btn  big-btn  color-bg flat-btn">Payment Step 
                                                <i class="fa fa-angle-right"></i></a>
                                            </fieldset>
                                            <fieldset class="fl-wrap" style="display: none; left: 50%; opacity: 0; position: absolute; transform: scale(1);">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Payment method</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>Cardholder's Name<i class="fa fa-user"></i></label>
                                                        <input type="text" placeholder="" value="Adam Kowalsky">                                                  
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Card Number <i class="fa fa-credit-card"></i></label>
                                                        <input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" value=""> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label>Expiry Month<i class="fa fa-calendar"></i></label>
                                                        <input type="text" placeholder="MM" value="">                                                  
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>Expiry Year<i class="fa fa-calendar"></i></label>
                                                        <input type="text" placeholder="YY" value="">                                                  
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>CVV / CVC *<i class="fa fa-credit-card"></i></label>
                                                        <input type="password" placeholder="***" value=""> 
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <p style="padding-top:20px;">*3 digits number on the back of your card</p>
                                                    </div>
                                                </div>
                                                <div class="log-separator fl-wrap"><span>or</span></div>
                                                <div class="soc-log fl-wrap">
                                                    <p>Select Other Payment Method</p>
                                                    <a href="#" class="paypal-log"><i class="fa fa-paypal"></i>Pay With Paypal</a>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <a href="#" class="previous-form  back-form action-button    color-bg"><i class="fa fa-angle-left"></i> Back</a>
                                                <a href="#" class="next-form back-form action-button btn  big-btn  color-bg flat-btn">Payment Step 
                                                <i class="fa fa-angle-right"></i></a>                                             
                                            </fieldset>
                                            <fieldset class="fl-wrap" style="display: none; left: 50%; opacity: 0; position: absolute;">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Confirmation</h3>
                                                </div>
                                                <div class="success-table-container">
                                                    <div class="success-table-header fl-wrap">
                                                        <i class="fa fa-check-circle decsth"></i>
                                                        <h4>Thank you. Your reservation has been received.</h4>
                                                        <div class="clearfix"></div>
                                                        <p>Your payment has been processed successfully.</p>
                                                        <a href="invoice.html" target="_blank" class="color-bg">View Invoice</a>
                                                    </div>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <a href="#" class="previous-form action-button  back-form   color-bg"><i class="fa fa-angle-left"></i> Back</a>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--   list-single-main-item end -->
                        </div>
                    </div>
                </div>
            </div>
    



@endsection
@push('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
        $(document).ready(function(){
            //$('#check-in').daterangepicker();
            var startDate = moment().format("MM/DD/YYYY");
            var endDate = moment().add(1, 'days').format("MM/DD/YYYY");
            var adults = 1;var children =0;

            function setAdultsAndChildren(){
                adults = parseInt($('#adults').val());
                children = parseInt($('#children').val());
            }

            function setInputDates(){
                $('#input-start-from').val(startDate);
                $('#input-end-to').val(endDate);
            }
            setInputDates();
            var adults = parseInt($('#adults').val());
            var children = parseInt($('#children').val());
            var bookedDates = @json($bookedDates);
            
            $(function() {
                $('#check-in').daterangepicker({
                    opens: 'left',
                    startDate: moment().format("MM/DD/YYYY"),
                    minDate: moment().format("MM/DD/YYYY"),
                    endDate: moment().add(1, 'days').format("MM/DD/YYYY"),
                    isInvalidDate: function(arg){

                        // Prepare the date comparision
                        var thisMonth = arg._d.getMonth()+1;   // Months are 0 based
                        if (thisMonth<10){
                            thisMonth = "0"+thisMonth; // Leading 0
                        }
                        var thisDate = arg._d.getDate();
                        if (thisDate<10){
                            thisDate = "0"+thisDate; // Leading 0
                        }
                        var thisYear = arg._d.getYear()+1900;   // Years are 1900 based

                        var thisCompare = thisMonth +"/"+ thisDate +"/"+ thisYear;
                        console.log(thisCompare);

                        if($.inArray(thisCompare,bookedDates)!=-1){
                            return true;
                        }
                    }
                }, function(start, end, label) {
                    startDate = start.format("MM/DD/YYYY");
                    endDate = end.format("MM/DD/YYYY");
                    setInputDates();
                    showPriceWidget();
                });
            });

            function totalAmount(){
                personCount = adults +  children;
                price = parseInt($('#price').data('price'));
                nightsCount = parseInt(countNights());
                console.log(price,nightsCount,price * nightsCount * personCount);
                return price * nightsCount * personCount;
            }

            function countNights(){
                var start = startDate;
                var end = endDate;

                var startDay = new Date(start);
                var endDay = new Date(end);
                var millisecondsPerDay = 1000 * 60 * 60 * 24;

                var millisBetween = endDay.getTime() - startDay.getTime();
                var days = millisBetween / millisecondsPerDay;

                return Math.floor(days);
            }

            function showPriceWidget(){
                $('#night-count').text(countNights() + ' nights');
                $('#total-amount').text('$ ' + totalAmount());
                $('#input-total-amount').val(totalAmount());
            }
            showPriceWidget();

            $('.qty').on('change',function(){
                setAdultsAndChildren();
                showPriceWidget();
            });
        });
    </script>



@endpush