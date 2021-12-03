@extends('layouts.app')

@section('content')
    <div class="content">
                    <!--  section  end--> 
                    <!--  section  --> 
                    <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title center-align">
                                <h2><span>{{__('home.Home Apartments')}}</span></h2>
                                <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">{{__('banner.Listing')}}</a><span>{{$category->title}}</span></div>
                                <span class="section-separator"></span>
                            </div>
                        </div>
                        
                    </section>
                    <!--  section  end--> 
                    <!--  section  --> 
                    <section class="gray-bg no-pading no-top-padding" id="sec1">
                        <div class="col-list-wrap fh-col-list-wrap  left-list">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="listsearch-header fl-wrap">
                                            <h3>{{__('cat-archive.Results For')}} : <span>{{$category->title}}</span></h3>
                                            <div class="listing-view-layout">
                                                <ul>
                                                    <li><a class="grid active" href="#"><i class="fa fa-th-large"></i></a></li>
                                                    <li><a class="list" href="#"><i class="fa fa-list-ul"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- list-main-wrap-->
                                        <div class="list-main-wrap fl-wrap card-listing">

                                            @foreach($listings as $key=>$listing)

                                            <!-- listing-item -->
                                            <div class="listing-item">
                                                <article class="geodir-category-listing fl-wrap">
                                                        <a href="{{route('single-listing',$listing->id)}}">
                                                    <div class="geodir-category-img">
                                                            <img src="{{asset('/storage/'.$listing->images[0]->path.'/'.$listing->images[0]->image_name)}}" alt="">
                                                        
                                                        <div class="overlay"></div>
                                                    </div>
                                                    </a>
                                                    <div class="geodir-category-content fl-wrap">
                                                        <a class="listing-geodir-category" >{{$category->title}}</a>
                                                        {{-- <div class="listing-avatar"><a href="author-single.html"><img src="images/avatar/1.jpg" alt=""></a>
                                                            <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                                        </div> --}}
                                                        <h3><a href="{{route('single-listing',$listing->id)}}">{{$listing->title}}</a></h3>
                                                        <p>{{ substr($listing->description, 0,  100) }}<a href="{{route('single-listing',$listing->id)}}">...</a></p>
                                                        <div class="geodir-category-options fl-wrap">
                                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                                <span>(7 reviews)</span>
                                                            </div>
                                                            <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$listing->street}}, {{$listing->city}}, {{$listing->address}}</a></div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- listing-item end-->  

                                            @endforeach

                                            <!-- pagination-->
                                            {{-- <div class="pagination">
                                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                                <a href="#" class="blog-page transition">1</a>
                                                <a href="#" class="blog-page current-page transition">2</a>
                                                <a href="#" class="blog-page transition">3</a>
                                                <a href="#" class="blog-page transition">4</a>
                                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                            </div> --}}
                                        </div>
                                        <!-- list-main-wrap end-->                           
                                    </div>
                                    <div class="col-md-4">
                                        <div class="fl-wrap">
                                            <!-- listsearch-input-wrap  -->  
                                            <div class="listsearch-input-wrap fl-wrap">
                                                <div class="listsearch-input-item">
                                                    <i class="mbri-key single-i"></i>
                                                    <input type="text" placeholder="Keywords?" value=""/>
                                                </div>
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="Location" class="chosen-select" >
                                                        <option>All Locations</option>
                                                        <option>Bronx</option>
                                                        <option>Brooklyn</option>
                                                        <option>Manhattan</option>
                                                        <option>Queens</option>
                                                        <option>Staten Island</option>
                                                    </select>
                                                </div>
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="All Categories" class="chosen-select" >
                                                        <option>All Categories</option>
                                                        <option>Shops</option>
                                                        <option>Hotels</option>
                                                        <option>Restaurants</option>
                                                        <option>Fitness</option>
                                                        <option>Events</option>
                                                    </select>
                                                </div>
												<div class="listsearch-input-text" id="autocomplete-container">
													<label><i class="mbri-map-pin"></i> Enter Addres </label>
													<input type="text" placeholder="Destination , Area , Street" id="autocomplete-input" class="qodef-archive-places-search" value=""/>
													<a  href="#"  class="loc-act qodef-archive-current-location"><i class="fa fa-dot-circle-o"></i></a>
												</div>
                                                <div class="distance-input fl-wrap">
                                                    <div class="distance-title"> Radius around selected destination <span></span> km</div>
                                                    <div class="distance-radius-wrap fl-wrap">
                                                        <input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination">
                                                    </div>
                                                </div>
                                                <!-- Checkboxes -->
                                                <div class=" fl-wrap filter-tags">
                                                    <h4>Filter by Tags</h4>
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-a" type="checkbox" name="check" checked>
                                                        <label for="check-a">Elevator in building</label>
                                                    </div>
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-b" type="checkbox" name="check">
                                                        <label for="check-b">Friendly workspace</label>
                                                    </div>
                                                    <div class="filter-tags-wrap">	
                                                        <input id="check-c" type="checkbox" name="check">
                                                        <label for="check-c">Instant Book</label>
                                                    </div>
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-d" type="checkbox" name="check">
                                                        <label for="check-d">Wireless Internet</label>
                                                    </div>
                                                </div>
                                                <!-- hidden-listing-filter end -->
                                                <button class="button fs-map-btn">Update</button>
                                            </div>
                                            <!-- listsearch-input-wrap end -->
                                        </div>
                                    </div>
                                </div>
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
@endsection