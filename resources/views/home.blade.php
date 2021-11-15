@extends('layouts.app')

@section('content')
    <div class="content">
        <!--section -->
        <section class="scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
          <div
            class="bg"
            data-bg="images/pexels-monstera-1920.jpg"
            data-scrollax="properties: { translateY: '200px' }"
          ></div>
          <div class="overlay"></div>
          <div class="hero-section-wrap fl-wrap">
            <div class="container">
              <div class="main-search-input-wrap">
                <div class="main-search-input fl-wrap">
                  <div class="main-search-input-item">
                    <label for="homes">Type</label>
                    <input
                      type="text"
                      name="homes"
                      id="homes"
                      placeholder="homes"
                    />
                  </div>
                  <div
                    class="main-search-input-item check-in"
                    id="autocomplete-container"
                  >
                    <label for="check-in">Check-in</label>
                    <input
                      type="date"
                      name="check-in"
                      id="check-in"
                      placeholder="Date?"
                    />
                  </div>
                  <div
                    class="main-search-input-item check-out"
                    id="autocomplete-container"
                  >
                    <label for="check-out">Check-out</label>
                    <input
                      type="date"
                      name="check-out"
                      id="check-out"
                      placeholder="Date?"
                    />
                  </div>
                  <div class="main-search-input-item guests">
                    <label for="guests">guests</label>
                    <input
                      type="date"
                      name="guests"
                      id="guests"
                      placeholder="Date?"
                    />
                  </div>
                  <button class="main-search-button">
                    <img src="images/search.png" alt="search" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="bubble-bg"></div>
          <div class="intro-item">
            <h3>Not sure where to go? Perfect.</h3>
          </div>
          <div class="header-sec-link">
            <div class="container">
              <a href="#sec2" class="custom-scroll-link">I’m flexible</a>
            </div>
          </div>
        </section>
        <!-- section end -->
        
      <!--  wrapper  -->
      <div id="wrapper">
        <!-- Content-->
        <div class="content">
          <!--section -->
          <section id="sec2">
            <div class="container">
              <div class="section-title">
                <h2><span>Featured</span> Categories</h2>
                <p>Explore holiday homes and apartments.</p>
              </div>
              <!-- portfolio start -->
              <div class="gallery-items fl-wrap mr-bot spad">
                @foreach($categories as $key => $category)
                  <div class="{{$key==0 ? 'gallery-items-left' : 'gallery-items-right'}}">
                    <!-- gallery-item-->
                    <div class="gallery-item {{$key==0 ? 'gallery-item-first' : ''}}">
                      <div class="grid-item-holder">
                        <div class="listing-item-grid">
                          <div
                            class="bg"
                            data-bg="images/pexels-nataliya-vaitkevich-1000.jpg"
                          ></div>
                          <div class="listing-counter">{{$category->title}}</div>
                          <div class="listing-item-cat">
                            <h3><a href="{{route('category-listing',$category->title)}}">{{$category->title}}</a></h3>
                            <p>{{$category->title}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- gallery-item end-->
                  </div>
                @endforeach
              </div>
              <!-- portfolio end -->
              <a
                href="listing.html"
                class="btn big-btn circle-btn color-bg flat-btn"
                >View All
              </a>
            </div>
          </section>
          <!-- section end -->
          <!--section -->
          <section class="gray-section">
            <div class="container">
              <div class="section-title">
                <h2>Popular <span>listings</span></h2>
                <p>Our top choices for this period.</p>
              </div>
            </div>
            <!-- carousel -->
            <div class="list-carousel fl-wrap card-listing">
              <!--listing-carousel-->
              <div class="listing-carousel fl-wrap">
                <!--slick-slide-item-->
                <div class="slick-slide-item">
                  <!-- listing-item -->
                  <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                      <div class="geodir-category-img">
                        <img src="images/pexels-monstera-912.jpg" alt="" />
                        <div class="overlay"></div>
                      </div>
                      <div class="geodir-category-content fl-wrap">
                        <a class="listing-geodir-category" href="listing.html"
                          >Holiday Home</a
                        >
                        <h3>
                          <a href="listing-single.html">Home - Classic</a>
                        </h3>
                        <p>Lorem ipsum gravida bibh vel veilt.</p>
                        <div class="geodir-category-options fl-wrap">
                          <div
                            class="listing-rating card-popup-rainingvis"
                            data-starrating2="5"
                          >
                            <span>(5 reviews)</span>
                          </div>
                          <div class="geodir-category-location">
                            <a href="#"
                              ><i
                                class="fa fa-map-marker"
                                aria-hidden="true"
                              ></i>
                              Makarska, 17707</a
                            >
                            <a href="#"
                              ><i class="fa fa-heart"></i><span>153</span></a
                            >
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  <!-- listing-item end-->
                </div>
                <!--slick-slide-item end-->
                <!--slick-slide-item-->
                <div class="slick-slide-item">
                  <!-- listing-item -->
                  <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                      <div class="geodir-category-img">
                        <img
                          src="images/pexels-nataliya-vaitkevich-957.jpg"
                          alt=""
                        />
                        <div class="overlay"></div>
                      </div>
                      <div class="geodir-category-content fl-wrap">
                        <a class="listing-geodir-category" href="listing.html"
                          >Holiday Home</a
                        >
                        <h3>
                          <a href="listing-single.html">Home - Classic</a>
                        </h3>
                        <p>Lorem ipsum gravida bibh vel veilt.</p>
                        <div class="geodir-category-options fl-wrap">
                          <div
                            class="listing-rating card-popup-rainingvis"
                            data-starrating2="5"
                          >
                            <span>(5 reviews)</span>
                          </div>
                          <div class="geodir-category-location">
                            <a href="#"
                              ><i
                                class="fa fa-map-marker"
                                aria-hidden="true"
                              ></i>
                              Makarska, 17707</a
                            >
                            <a href="#"
                              ><i class="fa fa-heart"></i><span>153</span></a
                            >
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  <!-- listing-item end-->
                </div>
                <!--slick-slide-item end-->
                <!--slick-slide-item-->
                <div class="slick-slide-item">
                  <!-- listing-item -->
                  <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                      <div class="geodir-category-img">
                        <img
                          src="images/pexels-valeria-boltneva-2400.jpg"
                          alt=""
                        />
                        <div class="overlay"></div>
                      </div>
                      <div class="geodir-category-content fl-wrap">
                        <a class="listing-geodir-category" href="listing.html"
                          >Holiday Home</a
                        >
                        <h3>
                          <a href="listing-single.html">Home - Classic</a>
                        </h3>
                        <p>Lorem ipsum gravida bibh vel veilt.</p>
                        <div class="geodir-category-options fl-wrap">
                          <div
                            class="listing-rating card-popup-rainingvis"
                            data-starrating2="5"
                          >
                            <span>(5 reviews)</span>
                          </div>
                          <div class="geodir-category-location">
                            <a href="#"
                              ><i
                                class="fa fa-map-marker"
                                aria-hidden="true"
                              ></i>
                              Makarska, 17707</a
                            >
                            <a href="#"
                              ><i class="fa fa-heart"></i><span>153</span></a
                            >
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  <!-- listing-item end-->
                </div>
                <!--slick-slide-item end-->
                <!--slick-slide-item-->
                <div class="slick-slide-item">
                  <!-- listing-item -->
                  <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                      <div class="geodir-category-img">
                        <img src="images/pexels-jaxson-bryden-979.jpg" alt="" />
                        <div class="overlay"></div>
                      </div>
                      <div class="geodir-category-content fl-wrap">
                        <a class="listing-geodir-category" href="listing.html"
                          >Holiday Home</a
                        >
                        <h3>
                          <a href="listing-single.html">Home - Classic</a>
                        </h3>
                        <p>Lorem ipsum gravida bibh vel veilt.</p>
                        <div class="geodir-category-options fl-wrap">
                          <div
                            class="listing-rating card-popup-rainingvis"
                            data-starrating2="5"
                          >
                            <span>(5 reviews)</span>
                          </div>
                          <div class="geodir-category-location">
                            <a href="#"
                              ><i
                                class="fa fa-map-marker"
                                aria-hidden="true"
                              ></i>
                              Makarska, 17707</a
                            >
                            <a href="#"
                              ><i class="fa fa-heart"></i><span>153</span></a
                            >
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  <!-- listing-item end-->
                </div>
                <!--slick-slide-item end-->
              </div>
              <!--listing-carousel end-->
              <div class="swiper-button-prev sw-btn">
                <i class="fa fa-long-arrow-left"></i>
              </div>
              <div class="swiper-button-next sw-btn">
                <i class="fa fa-long-arrow-right"></i>
              </div>
            </div>
            <!--  carousel end-->
          </section>
          <!-- section end -->
          <!--section -->
          <section class="color-bg">
            <div class="shapes-bg-big"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="images-collage fl-wrap"></div>
                </div>
                <div class="col-md-6">
                  <div class="color-bg-text">
                    <h3>Join our online community</h3>
                    <div class="text-content">
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry’s standard dummy text ever since the 1500s.
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry’s standard dummy text ever since the 1500s.
                      </p>
                    </div>
                    <a href="#" class="color-bg-link modal-open">Sign In Now</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--section   end -->
          <!--section -->
          <section>
            <div class="container">
              <div class="section-title">
                <h2>How it <span>works</span></h2>
                <p>Explore Makarska with 3 tips from us.</p>
              </div>
              <!--process-wrap  -->
              <div class="process-wrap fl-wrap">
                <ul>
                  <li>
                    <div class="process-item">
                      <span class="process-count">01</span>
                      <div class="map-marker">
                        <img src="images/place.png" alt="map marker" />
                      </div>
                      <h4>Make a Listing</h4>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry’s standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        crambled it to make a type specimen book. It has
                        survived not only five centuries
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="process-item">
                      <span class="process-count">02</span>
                      <div class="map-marker">
                        <img src="images/place.png" alt="map marker" />
                      </div>
                      <h4>Make a Listing</h4>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry’s standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        crambled it to make a type specimen book. It has
                        survived not only five centuries
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="process-item">
                      <span class="process-count">03</span>
                      <div class="map-marker">
                        <img src="images/place.png" alt="map marker" />
                      </div>
                      <h4>Make a Listing</h4>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry’s standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and
                        crambled it to make a type specimen book. It has
                        survived not only five centuries
                      </p>
                    </div>
                  </li>
                </ul>
                <div class="process-end"><i class="fa fa-check"></i></div>
              </div>
              <!--process-wrap   end-->
            </div>
          </section>
          <section class="parallax-section" data-scrollax-parent="true">
            <div
              class="bg"
              data-bg="images/pexels-jaxson-bryden-1920.jpg"
              data-scrollax="properties: { translateY: '100px' }"
            ></div>
            <div class="overlay co lor-overlay"></div>
            <!--container-->
            <div class="container">
              <div class="section-title featured-category">
                <h2>Featured Categories</h2>
                <p>Explore holiday homes and apartments.</p>
                <a href="#" class="color-bg-link modal-open">Explore</a>
              </div>
            </div>
          </section>
          <!-- section end -->
          <!--section -->
          <section class="color-bg">
            <div class="shapes-bg-big"></div>
            <div class="container">
              <div class="single-facts fl-wrap">
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        <div class="num" data-content="0" data-num="172">
                          172
                        </div>
                      </div>
                    </div>
                    <h6>Win Awards</h6>
                  </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        <div class="num" data-content="0" data-num="172">
                          172
                        </div>
                      </div>
                    </div>
                    <h6>Win Awards</h6>
                  </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        <div class="num" data-content="0" data-num="172">
                          172
                        </div>
                      </div>
                    </div>
                    <h6>Win Awards</h6>
                  </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        <div class="num" data-content="0" data-num="172">
                          172
                        </div>
                      </div>
                    </div>
                    <h6>Win Awards</h6>
                  </div>
                </div>
                <!-- inline-facts end -->
              </div>
            </div>
          </section>
          <!-- section end -->
          <!--section -->
          <section class="testimonials">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>
                      Explore the region of Makarska with our recommendations
                      from our lovely clientele
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- testimonials-carousel -->
            <div class="container">
              <!--testimonials-carousel-->
              <div class="carousel fl-wrap">
                <div class="testimonials-carousel single-carousel fl-wrap">
                  <!--slick-slide-item-->
                  <div class="slick-slide-item">
                    <div class="testimonilas-text">
                      <div
                        class="listing-rating card-popup-rainingvis"
                        data-starrating2="4"
                      ></div>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry’s standard dummy text ever since the 1500s,
                        when an unknown printer took a
                      </p>
                    </div>
                    <div class="testimonilas-avatar-item">
                      <div class="testimonilas-avatar">
                        <img
                          src="images/pexels-volkan-vardar-1142.jpg"
                          alt="profile image"
                        />
                      </div>
                      <h4>Nom Restaurant</h4>
                    </div>
                  </div>
                  <!--slick-slide-item end-->
                  <!--slick-slide-item-->
                  <div class="slick-slide-item">
                    <div class="testimonilas-text">
                      <div
                        class="listing-rating card-popup-rainingvis"
                        data-starrating2="4"
                      ></div>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry’s standard dummy text ever since the 1500s,
                        when an unknown printer took a
                      </p>
                    </div>
                    <div class="testimonilas-avatar-item">
                      <div class="testimonilas-avatar">
                        <img
                          src="images/pexels-jaxson-bryden-979.jpg"
                          alt="profile image"
                        />
                      </div>
                      <h4>Makarska Apartments</h4>
                    </div>
                  </div>
                  <!--slick-slide-item end-->
                  <!--slick-slide-item-->
                  <div class="slick-slide-item">
                    <div class="testimonilas-text">
                      <div
                        class="listing-rating card-popup-rainingvis"
                        data-starrating2="4"
                      ></div>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry’s standard dummy text ever since the 1500s,
                        when an unknown printer took a
                      </p>
                    </div>
                    <div class="testimonilas-avatar-item">
                      <div class="testimonilas-avatar">
                        <img
                          src="images/pexels-volkan-vardar-1142.jpg"
                          alt="profile image"
                        />
                      </div>
                      <h4>Nom Restaurant</h4>
                    </div>
                  </div>
                  <!--slick-slide-item end-->
                  <!--slick-slide-item-->
                  <div class="slick-slide-item">
                    <div class="testimonilas-text">
                      <div
                        class="listing-rating card-popup-rainingvis"
                        data-starrating2="4"
                      ></div>
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the
                        industry’s standard dummy text ever since the 1500s,
                        when an unknown printer took a
                      </p>
                    </div>
                    <div class="testimonilas-avatar-item">
                      <div class="testimonilas-avatar">
                        <img src="images/pexels-valeria-boltneva-2400.jpg" />
                      </div>
                      <h4>Hotel Casablanca</h4>
                    </div>
                  </div>
                  <!--slick-slide-item end-->
                </div>
                <!--testimonials-carousel end-->
                <div class="swiper-button-prev sw-btn">
                  <i class="fa fa-long-arrow-left"></i>
                </div>
                <div class="swiper-button-next sw-btn">
                  <i class="fa fa-long-arrow-right"></i>
                </div>
              </div>
              <!-- testimonials-carousel end-->
            </div>
          </section>
          <!-- section end -->
          <!--section -->
          <section class="gray-section">
            <div class="container">
              <div class="fl-wrap spons-list">
                <ul class="client-carousel">
                  <li>
                    <a href="#" target="_blank"
                      ><img src="images/clients/1.png" alt=""
                    /></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"
                      ><img src="images/clients/1.png" alt=""
                    /></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"
                      ><img src="images/clients/1.png" alt=""
                    /></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"
                      ><img src="images/clients/1.png" alt=""
                    /></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"
                      ><img src="images/clients/1.png" alt=""
                    /></a>
                  </li>
                  <li>
                    <a href="#" target="_blank"
                      ><img src="images/clients/1.png" alt=""
                    /></a>
                  </li>
                </ul>
                <div class="sp-cont sp-cont-prev">
                  <i class="fa fa-angle-left"></i>
                </div>
                <div class="sp-cont sp-cont-next">
                  <i class="fa fa-angle-right"></i>
                </div>
              </div>
            </div>
          </section>
          <!-- section end -->
          <!--section -->
          <section class="tips_articles">
            <div class="container">
              <div class="section-title">
                <h2><span>Tips</span> & <span>Articles</span></h2>
                <p>Our top choices for this period.</p>
              </div>
              <div class="row home-posts">
                <div class="col-md-4">
                  <article class="card-post">
                    <div class="card-post-img fl-wrap">
                      <a href="blog-single.html"
                        ><img
                          src="images/pexels-jaxson-bryden-979.jpg"
                          alt="image"
                      /></a>
                    </div>
                    <div class="card-post-content fl-wrap">
                      <h3>
                        <a href="blog-single.html">How is Plaza rated?</a>
                      </h3>
                      <p>
                        Lorem ipsum gravida bibh vel veilt. Lorem ipsum gravida
                        bibh vel veilt. Lorem ipsum gravida bibh vel veilt.
                        Lorem ipsum gravida bibh vel veilt.
                      </p>
                      <div class="post-author">
                        <a href="#"
                          ><img
                            src="images/pexels-valeria-boltneva-2400.jpg"
                            alt="profile image"
                          /><span>By, Mery Lynn</span></a
                        >
                      </div>
                      <div class="post-opt">
                        <ul>
                          <li>
                            <i class="fa fa-calendar"></i>
                            <span>25 April</span>
                          </li>
                          <li><i class="fa fa-eye"></i> <span>264</span></li>
                          <li>
                            <i class="fa fa-tags"></i>
                            <a href="#">Stories</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="card-post">
                    <div class="card-post-img fl-wrap">
                      <a href="blog-single.html"
                        ><img
                          src="images/pexels-jaxson-bryden-979.jpg"
                          alt="image"
                      /></a>
                    </div>
                    <div class="card-post-content fl-wrap">
                      <h3>
                        <a href="blog-single.html">How is Plaza rated?</a>
                      </h3>
                      <p>
                        Lorem ipsum gravida bibh vel veilt. Lorem ipsum gravida
                        bibh vel veilt. Lorem ipsum gravida bibh vel veilt.
                        Lorem ipsum gravida bibh vel veilt.
                      </p>
                      <div class="post-author">
                        <a href="#"
                          ><img
                            src="images/pexels-valeria-boltneva-2400.jpg"
                            alt="profile image"
                          /><span>By, Mery Lynn</span></a
                        >
                      </div>
                      <div class="post-opt">
                        <ul>
                          <li>
                            <i class="fa fa-calendar"></i>
                            <span>25 April</span>
                          </li>
                          <li><i class="fa fa-eye"></i> <span>264</span></li>
                          <li>
                            <i class="fa fa-tags"></i>
                            <a href="#">Stories</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="card-post">
                    <div class="card-post-img fl-wrap">
                      <a href="blog-single.html"
                        ><img
                          src="images/pexels-jaxson-bryden-979.jpg"
                          alt="image"
                      /></a>
                    </div>
                    <div class="card-post-content fl-wrap">
                      <h3>
                        <a href="blog-single.html">How is Plaza rated?</a>
                      </h3>
                      <p>
                        Lorem ipsum gravida bibh vel veilt. Lorem ipsum gravida
                        bibh vel veilt. Lorem ipsum gravida bibh vel veilt.
                        Lorem ipsum gravida bibh vel veilt.
                      </p>
                      <div class="post-author">
                        <a href="#"
                          ><img
                            src="images/pexels-valeria-boltneva-2400.jpg"
                            alt="profile image"
                          /><span>By, Mery Lynn</span></a
                        >
                      </div>
                      <div class="post-opt">
                        <ul>
                          <li>
                            <i class="fa fa-calendar"></i>
                            <span>25 April</span>
                          </li>
                          <li><i class="fa fa-eye"></i> <span>264</span></li>
                          <li>
                            <i class="fa fa-tags"></i>
                            <a href="#">Stories</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </article>
                </div>
                <!--<img-->
                <!--  src="images/calendars.png"-->
                <!--  alt="calendar"-->
                <!--  width="132px"-->
                <!--  class="img_calendar"-->
                <!--/>-->
                <!--<img-->
                <!--  src="images/eye-svgrepo-coms.png"-->
                <!--  alt="calendar"-->
                <!--  width="132px"-->
                <!--  class="img_eye"-->
                <!--/>-->
                <!--<img-->
                <!--  src="images/tags.png"-->
                <!--  alt="calendar"-->
                <!--  width="112px"-->
                <!--  class="img_tag"-->
                <!--/>-->
              </div>
              <a href="blog.html" class="btn big-btn circle-btn color-bg"
                >Read All</a
              >
            </div>
          </section>
          <!-- section end -->
          <!--section -->
          <section class="gradient-bg">
            <div class="container">
              <div class="join-wrap fl-wrap">
                <div class="row">
                  <div class="col-md-8">
                    <h3>Do you have a question?</h3>
                    <p>Explore holiday homes and apartments.</p>
                  </div>
                  <div class="col-md-4">
                    <a href="contacts.html" class="join-wrap-btn"
                      >Get In Touch</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- section end -->
        </div>
        <!-- Content end -->
      </div>
      <!-- wrapper end -->
    </div>
@endsection