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
                                    <li><i class="fa fa-phone"></i><a  href="#">+7(111)123456789</a></li>
                                    <li><i class="fa fa-map-marker"></i><a  href="#">USA 27TH Brooklyn NY</a></li>
                                    <li><i class="fa fa-envelope-o"></i><a  href="#">yourmail@domain.com</a></li>
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
                                <h3>Item Revies -  <span> 3 </span></h3>
                            </div>
                            <div class="reviews-comments-wrap">
                                <!-- reviews-comments-item -->  
                                <div class="reviews-comments-item">
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
                                </div>
                                <!--reviews-comments-item end-->  
                                <!-- reviews-comments-item -->  
                                <div class="reviews-comments-item">
                                    <div class="review-comments-avatar">
                                        <img src="images/avatar/1.jpg" alt=""> 
                                    </div>
                                    <div class="reviews-comments-item-text">
                                        <h4><a href="#">Mark Rose</a></h4>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                        <div class="clearfix"></div>
                                        <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>12 April 2018</span>
                                    </div>
                                </div>
                                <!--reviews-comments-item end--> 
                                <!-- reviews-comments-item -->  
                                <div class="reviews-comments-item">
                                    <div class="review-comments-avatar">
                                        <img src="images/avatar/1.jpg" alt=""> 
                                    </div>
                                    <div class="reviews-comments-item-text">
                                        <h4><a href="#">Adam Koncy</a></h4>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="clearfix"></div>
                                        <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>03 December 2017</span>
                                    </div>
                                </div>
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
                                    <form   class="add-comment custom-form">
                                        <fieldset>
                                            
                                            <div class="row">
                                                <div class="col-md-12">      
                                                    <span>Check In / check out Date :</span>                         
                                                    <label><i class="fa fa-calendar-check-o"></i>  </label>
                                                    <input id="check-in" type="text" placeholder="check in date" class="datepicker"   data-large-mode="true" data-large-default="true" value=""/>
                                                </div>
                                                
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
                                                    <input type="text" id="adults"   name="quantity"   title="Qty" class="qty" min="1" max="3" step="1" value="1">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>
                                            
                                            <div class="quantity fl-wrap">
                                                <span><i class="fa fa-user-plus"></i>Children : </span>
                                                <div class="quantity-item">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="text" id="children"   name="quantity"   title="Qty" class="qty" min="0" max="3" step="1" value="0">
                                                    <input type="button" value="+" class="plus">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="quantity fl-wrap">
                                                        <div class="quantity-item">
                                                            <span id="price" data-price="{{$listing->price}}">₹{{$listing->price}} x</span><span id="night-count"> </span> <span id="total-amount"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <textarea cols="40" rows="3" placeholder="Additional Information:"></textarea>
                                        </fieldset>
                                        <button class="btn  big-btn  color-bg flat-btn book-btn">Book Now<i class="fa fa-angle-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->                                      
                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap">
                            <div class="box-widget-item-header">
                                <h3>Location / Contacts : </h3>
                            </div>
                            <div class="box-widget">
                                <div class="map-container">
                                    <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Out Location"></div>
                                </div>
                                <div class="box-widget-content">
                                    <div class="list-author-widget-contacts list-item-widget-contacts">
                                        <ul>
                                            <li><span><i class="fa fa-map-marker"></i> Adress :</span> <a href="#">USA 27TH Brooklyn NY</a></li>
                                            <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                            <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a></li>
                                            <li><span><i class="fa fa-globe"></i> Website :</span> <a href="#">themeforest.net</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-widget-social">
                                        <ul>
                                            <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank" ><i class="fa fa-vk"></i></a></li>
                                            <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
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
                                    <span class="list-author-widget-link"><a href="author-single.html">Alisa Noory</a></span>
                                    <img src="images/avatar/1.jpg" alt=""> 
                                </div>
                                <div class="box-widget-content">
                                    <div class="list-author-widget-text">
                                        <div class="list-author-widget-contacts">
                                            <ul>
                                                <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                                <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a></li>
                                                <li><span><i class="fa fa-globe"></i> Website :</span> <a href="#">themeforest.net</a></li>
                                            </ul>
                                        </div>
                                        <a href="author-single.html" class="btn transparent-btn">View Profile <i class="fa fa-eye"></i></a>
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
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg"  alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Cafe "Lollipop"</a>
                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 21 Mar 2017 </span> 
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg"  alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title=""> Apartment in the Center</a>
                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span> 
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="images/all/1.jpg"  alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Event in City Mol</a>
                                                <span class="widget-posts-date"><i class="fa fa-calendar-check-o"></i> 7 Mar 2017 </span>
                                            </div>
                                        </li>
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

            var adults = parseInt($('#adults').val());
            var children = parseInt($('#children').val());
            $(function() {
                $('#check-in').daterangepicker({
                    opens: 'left',
                    startDate: moment().format("MM/DD/YYYY"),
                    minDate: moment().format("MM/DD/YYYY"),
                    endDate: moment().add(1, 'days').format("MM/DD/YYYY")
                }, function(start, end, label) {
                    startDate = start.format("MM/DD/YYYY");
                    endDate = end.format("MM/DD/YYYY");
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
                $('#total-amount').text('₹ ' + totalAmount());
            }
            showPriceWidget();

            $('.qty').on('change',function(){
                setAdultsAndChildren();
                showPriceWidget();
            });
        });
    </script>
@endpush