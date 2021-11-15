@extends('layouts.app')

@section('content')
    <div class="content">
      <!-- wrapper -->
      <div id="wrapper">
        <div class="content makarska-listing">
          <!-- Map -->
          <div class="map-container column-map right-pos-map">
            <div id="map-main"></div>
          </div>
          <!-- Map end -->
          <!--col-list-wrap -->
          <div class="col-list-wrap left-list">
            <div class="listsearch-options fl-wrap" id="lisfw">
              <div class="container">
                <div class="listsearch-header fl-wrap">
                  <h3>Results For : <span>{{$category->title}}</span></h3>
                  <div class="listing-view-layout">
                    <ul>
                      <li>
                        <a class="grid active" href="#"
                          ><i class="fa fa-th-large"></i
                        ></a>
                      </li>
                      <li>
                        <a class="list" href="#"
                          ><i class="fa fa-list-ul"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- listsearch-input-wrap  -->
                <div class="listsearch-input-wrap fl-wrap">
                  <div class="listsearch-input-item">
                    <i class="mbri-key single-i"></i>
                    <input type="text" placeholder="Keywords?" value="" />
                  </div>
                  <div class="listsearch-input-item">
                    <select data-placeholder="Location" class="chosen-select">
                      <option>Location</option>
                      <option>Bronx</option>
                      <option>Brooklyn</option>
                      <option>Manhattan</option>
                      <option>Queens</option>
                      <option>Staten Island</option>
                    </select>
                  </div>
                  <div class="listsearch-input-item">
                    <select
                      data-placeholder="All Categories"
                      class="chosen-select"
                    >
                      <option>All Categories</option>
                      @foreach($categories as $key=>$category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div
                    class="listsearch-input-text"
                    id="autocomplete-container"
                  >
                    <label><i class="mbri-map-pin"></i> Enter Address </label>
                    <input
                      type="text"
                      placeholder="Destination , Area"
                      class="qodef-archive-places-search"
                      value=""
                    />
                    <a href="#" class="loc-act qodef-archive-current-location"
                      ><i class="fa fa-dot-circle-o"></i
                    ></a>
                  </div>
                  <!-- hidden-listing-filter -->
                  <div class="hidden-listing-filter fl-wrap">
                    <div class="distance-input fl-wrap">
                      <div class="distance-title">
                        Radius around selected destination <span></span> km
                      </div>
                      <div class="distance-radius-wrap fl-wrap">
                        <input
                          class="distance-radius rangeslider--horizontal"
                          type="range"
                          min="1"
                          max="100"
                          step="1"
                          value="1"
                          data-title="Radius around selected destination"
                        />
                      </div>
                    </div>
                    <!-- Checkboxes -->
                    <div class="fl-wrap filter-tags">
                      <h4>Filter by Tags</h4>
                      <input id="check-aa" type="checkbox" name="check" />
                      <label for="check-aa">Elevator in building</label>
                      <input id="check-b" type="checkbox" name="check" />
                      <label for="check-b">Friendly workspace</label>
                      <input id="check-c" type="checkbox" name="check" />
                      <label for="check-c">Instant Book</label>
                      <input id="check-d" type="checkbox" name="check" />
                      <label for="check-d">Wireless Internet</label>
                    </div>
                  </div>
                  <!-- hidden-listing-filter end -->
                  <button class="button fs-map-btn">Update</button>
                  <div class="more-filter-option">
                    More Filters <span></span>
                  </div>
                </div>
                <!-- listsearch-input-wrap end -->
              </div>
            </div>
            <!-- list-main-wrap-->
            <div class="list-main-wrap fl-wrap card-listing">
              <div class="container">
                <!-- listing-item -->
                @foreach($listings as $key=>$listing)
                <div class="listing-item">
                  <article class="geodir-category-listing fl-wrap">
                    <div class="geodir-category-img">
                    
                      <img src="{{assets($listing->images[0]->path.'/'.$listing->images[0]->image_name)}}" alt="" />
                      <div class="overlay"></div>
                    </div>
                    <div class="geodir-category-content fl-wrap">
                      <p>Enitre rental unit</p>
                      <h3>
                        <a href="#">MAKARKSA</a>
                      </h3>
                      <p>
                        3 guests · 1 bedroom · 1 bed · 1 bath · Wifi · Kitchen ·
                        Air conditioning · Washer
                      </p>
                      <div class="geodir-category-options fl-wrap">
                        <div
                          class="listing-rating card-popup-rainingvis"
                          data-starrating2="1"
                        >
                          <span>4,93 (205 reviews)</span>
                        </div>
                        <div class="geodir-category-location">
                          <span>{{$listing->price}} / night</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                @endforeach
                
                <!-- listing-item end-->
              </div>
              <a class="load-more-button" href="#"
                >Load more <i class="fa fa-circle-o-notch"></i>
              </a>
            </div>
            <!-- list-main-wrap end-->
          </div>
          <!--col-list-wrap -->
          <div class="limit-box fl-wrap"></div>
          <!--section -->
          <section class="gradient-bg">
            <div class="container">
              <div class="join-wrap fl-wrap">
                <div class="row">
                  <div class="col-md-8">
                    <h3>Join our online community.</h3>
                    <p>Explore holiday homes and apartments.</p>
                  </div>
                  <div class="col-md-4">
                    <a href="#" class="join-wrap-btn">Sign in Now</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--section end -->
        </div>
        <!--content end -->
      </div>
      <!-- wrapper end -->
    @endsection
