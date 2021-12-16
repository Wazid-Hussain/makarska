@extends('layouts.app')

@section('content')
    <div class="content">
        <!--section -->
        <section class="scroll-con-sec hero-section" data-scrollax-parent="true" id="sec1">
          <div
            class="bg"
            data-bg="{{asset('/images/bg-static.jpg')}}"
            data-scrollax="properties: { translateY: '200px' }"
          ></div>
          <div class="overlay"></div>
          <div class="hero-section-wrap fl-wrap">
            <div class="container">
              <div class="main-search-input-wrap">
                <form action="/search" method="post">
                    @csrf
                <div class="main-search-input fl-wrap">
                  <div class="main-search-input-item">
                    <div class="listsearch-input-item form-group">
                      <label for="accommodation-type">{{__('banner.Accommodation type')}}</label>
                      <select class="form-control" name="accommodationType" id="accommodation-type">
                           @foreach($categories as $key => $category)
                          
                         <option value="{{$category->id}}">{{ $category->title }}</option>
                          
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div
                    class="main-search-input-item check-in"
                    id="autocomplete-container"
                  >
                    <label for="check-in">{{__('banner.Check In')}}</label>
                    <input
                      type="date"
                      name="check-in"
                      id="check-in"
                      placeholder="Date?"
                      class="datepicker"
                      data-large-mode="true"
                      data-large-default="true"
                      value=""
                    />
                  </div>
                  <div
                    class="main-search-input-item check-out"
                    id="autocomplete-container"
                  >
                    <label for="check-out">{{__('banner.Check Out')}}</label>
                    <input
                      type="date"
                      name="check-out"
                      id="check-out"
                      placeholder="Date?"
                      class="datepicker"
                      data-large-mode="true"
                      data-large-default="true"
                      value=""
                    />
                  </div>
                  <div class="main-search-input-item guests">
                    <label for="guests">{{__('banner.GUESTS')}}</label>
                    <input
                      type="text"
                      name="guests"
                      id="guests"
                      placeholder="{{__('banner.Number of people')}}"
                    />
                  </div>
                  <button class="main-search-button">
                    <img src="images/search.png" alt="search" />
                  </button>
                </div>
                </form>
                
              </div>
            </div>
          </div>
          <div class="bubble-bg"></div>
          <div class="intro-item">
            <h3>{{__('banner.No fixed travel period in mind yet? No problem!')}}</h3>
          </div>
          <div class="header-sec-link">
            <div class="container">
              <a href="/accommodations" class="custom-scroll-link">{{__('banner.I\'m flexible')}}</a>
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
              <h2>{{__('home.The')}} <span>{{__('home.Accommodations')}}</h2>

                <p>{{__('home.Discover our holiday homes and apartments.')}}</p>
              </div>
              
              <!-- portfolio start -->
              <div class="gallery-items fl-wrap mr-bot spad">
                  
              @foreach($listings as $key => $listing)
                <!-- gallery-item-->
                <div class="gallery-item {{($key == 1)?'gallery-item-second':''}}">
                  <div class="grid-item-holder">
                    <div class="listing-item-grid">
                      <div 
                        class="bg" 
                        style="background-image:url('{{asset('/storage/'.$listing->images[0]->path.'/'.$listing->images[0]->image_name)}}');"
                      >
                      </div>

                      <div class="listing-item-cat">
                        <h3><a href="{{route('single-listing',$listing->id)}}">{{$listing->title}}</a></h3>
                        <p>
                          {{ substr($listing->description, 0,  50) }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- gallery-item end-->
              @endforeach
              
              </div>
             
              <!-- portfolio end -->
              <a href="#" class="btn big-btn circle-btn color-bg">View more</a>
           
            </div>
          </section>
          <!-- section end -->
          <!--section -->
          <section class="gray-section">
            <div class="container">
              <div class="section-title">
                <h2>{{__('home.Our')}} <span>{{__('home.top 10')}}</span></h2>
                <p>{{__('home.The MOST POPULAR accommodations of our guests')}}</p>
              </div>
            </div>
            <!-- carousel -->
            <div class="list-carousel fl-wrap card-listing">
              <!--listing-carousel-->
              <div class="listing-carousel fl-wrap">
                @foreach($listings as $key => $listing)
                <!--slick-slide-item-->
                <div class="slick-slide-item">
                  <!-- listing-item -->
                  <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                    <a href="{{route('single-listing',$listing->id)}}">
                      <div class="geodir-category-img">
                        <img src="{{asset('/storage/'.$listing->images[0]->path.'/'.$listing->images[0]->image_name)}}" alt="" />
                        <div class="overlay"></div>
                      </div>
                      </a>
                      <div class="geodir-category-content fl-wrap">
                        <a class="listing-geodir-category" href="{{route('single-listing',$listing->id)}}"
                          >{{$listing->title}}</a
                        >
                        <h3>
                          <a href="{{route('single-listing',$listing->id)}}">{{$listing->title}}</a>
                        </h3>
                        <p>{{ substr($listing->description, 0,  100) }}<a href="{{route('single-listing',$listing->id)}}">...</a></p>
                        <div class="geodir-category-options fl-wrap">
                          <div
                            class="listing-rating card-popup-rainingvis"
                            data-starrating2="5" style="width:50%"
                          >
                            <span>(5 reviews)</span>
                          </div>

                          <div class="geodir-category-location">
                            <a href="#">
                              <p style="text-align:right">{{$listing->rooms}} - Rooms, {{$listing->beds}} - Beds, {{$listing->guests}} - Guests</p>
                              </a
                            >
                            <a href="#"
                              ><span style="font-size:110%"><b>${{$listing->price}} / night</b></span></a
                            >
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  <!-- listing-item end-->
                </div>
                <!--slick-slide-item end-->
                
                @endforeach
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
          <section>
            <div class="container">
              <div class="section-title">
                <h2>{{__('home.Our company')}} <span>{{__('home.philosophy')}}</span></h2>
                <p>{{__('home.Satisfied guests are our aim.')}}</p>
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
                      <h3>{{__('home.philosophy 1heading')}}</h3>
                      <p>{{__('home.philosophy 1')}}</p>
                    </div>
                  </li>
                  <li>
                    <div class="process-item">
                      <span class="process-count">02</span>
                      <div class="map-marker">
                        <img src="images/place.png" alt="map marker" />
                      </div>
                      <h3>{{__('home.philosophy 2heading')}}</h3>
                      <p>{{__('home.philosophy 2')}}</p>
                    </div>
                  </li>
                  <li>
                    <div class="process-item">
                      <span class="process-count">03</span>
                      <div class="map-marker">
                        <img src="images/place.png" alt="map marker" />
                      </div>
                      <h3>{{__('home.philosophy 3heading')}}</h3>
                      <p>{{__('home.philosophy 3')}}</p>
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
                <h2>Ihr Reisevermittler</h2>
                <p>Unsere Referenzen</p>
                <!--<a href="#" class="color-bg-link modal-open">{{__('home.Explore')}}</a>-->
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
                        <div class="num" data-content="0" data-num="1500">
                          1500
                        </div>
                      </div>
                    </div>
                    <h6>{{__('home.Satisfied guests')}}</h6>
                  </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        <div class="num" data-content="0" data-num="200">
                          200 +
                        </div>
                      </div>
                    </div>
                    <h6>{{__('home.positive reviews')}}</h6>
                  </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        <div class="num" data-content="0" data-num="10">
                          10
                        </div>
                      </div>
                    </div>
                    <h6>{{__('home.Years of professional experience.')}}</h6>
                  </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                  <div class="inline-facts">
                    <div class="milestone-counter">
                      <div class="stats animaper">
                        <div class="num" data-content="0" data-num="30">
                          30
                        </div>
                      </div>
                    </div>
                    <h6>{{__('home.selected holiday homes and apartments')}}</h6>
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
                    <h2>{{__('home.Testimonials')}}</h2>
                    <p>{{__('home.review')}}</p>
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
                      <p>
                        Wir hatten eine tolle Zeit in der Villa Panorama. Wir wurden herzlich in Empfang genommen, sogar für Käse, Schinken und Getränke war bei unserer Ankunft gesorgt. Pjero und Ivo waren super Gastgeber und immer für uns da, wenn wir Fragen hatten. Die Ausstattung ist super und der Blick auf die Adria einzigartig. Diese Unterkunft ist sehr zu empfehlen.
                      </p>
                      <div class="customer">
                          <img src="https://a0.muscache.com/im/pictures/user/47d02513-041a-4db0-bcab-41f541cad354.jpg?aki_policy=profile_x_medium" alt="" />
                          <div>
                              <h4>Joerg, Berlin, Germany</h4>
                              <span>Joined in 2014</span>
                          </div>
                      </div>
                    </div>
                    <div class="testimonilas-avatar-item">
                      <div class="testimonilas-avatar">
                        <img
                          src="https://a0.muscache.com/im/pictures/miso/Hosting-30673048/original/790918b1-3ea0-4c9c-87eb-f5e5d707104f.jpeg?aki_policy=small"
                          alt="profile image"
                        />
                      </div>
                      <h4>Villa Panorama</h4>
                    </div>
                  </div>
                  <!--slick-slide-item end-->
                  <!--slick-slide-item-->
                  <div class="slick-slide-item">
                    <div class="testimonilas-text">
                      <p>
                        Tolle Villa! Sehr zuvorkommende Gastgeber. Traumhafter Ausblick! Wir kommen auf jeden Fall wieder!!!
                      </p>
                      <div class="customer">
                          <img src="https://a0.muscache.com/im/pictures/user/b83228c9-1b60-4401-8914-9e0572c86ea0.jpg?aki_policy=profile_x_medium" alt="" />
                          <div>
                              <h4>Sam, Wesseln, Germany</h4>
                              <span>Joined in 2015</span>
                          </div>
                      </div>
                    </div>
                    <div class="testimonilas-avatar-item">
                      <div class="testimonilas-avatar">
                        <img
                          src="https://a0.muscache.com/im/pictures/1c411b9a-797d-490f-9dc0-278b0f191a74.jpg?aki_policy=small"
                          alt="profile image"
                        />
                      </div>
                      <h4>Villa De Linda</h4>
                    </div>
                  </div>
                  <!--slick-slide-item end-->
                  <!--slick-slide-item-->
                  <div class="slick-slide-item">
                    <div class="testimonilas-text">
                      <p>
                        Wir hatten tolle Tage in brela, obwohl wir etwas Pech mit dem Wetter hatten. Unterkunft war super, vor allem die Lage. Total nette Gastgeberin!! Sehr zufrieden!
                      </p>
                      <div class="customer">
                          <img src="https://a0.muscache.com/im/pictures/user/2ccb8d83-2b67-4e30-bafe-6f480b192ba7.jpg?aki_policy=profile_x_medium" alt="" />
                          <div>
                              <h4>Sven, Lübeck, Germany</h4>
                              <span>Joined in 2019</span>
                          </div>
                      </div>
                    </div>
                    <div class="testimonilas-avatar-item">
                      <div class="testimonilas-avatar">
                        <img
                          src="https://a0.muscache.com/im/pictures/941f2c14-ec84-4012-a76b-1dce9ef991a5.jpg?aki_policy=small"
                          alt="profile image"
                        />
                      </div>
                      <h4>Villa Zorana</h4>
                    </div>
                  </div>
                  <!--slick-slide-item end-->
                  <!--slick-slide-item-->
                  <div class="slick-slide-item">
                    <div class="testimonilas-text">
                      <p>
                        Eine Top-Unterkunft in hervorragender Lage. Alles Supersauber. Der Kontakt und die Betreuung durch den Vermieter war Spitze! Sehr zu Empfehlen!
                      </p>
                      <div class="customer">
                          <img src="https://a0.muscache.com/defaults/user_pic-225x225.png?v=3" alt="" />
                          <div>
                              <h4>Klaus</h4>
                              <span>Joined in 2021</span>
                          </div>
                      </div>
                    </div>
                    <div class="testimonilas-avatar-item">
                      <div class="testimonilas-avatar">
                        <img
                          src="https://a0.muscache.com/im/pictures/miso/Hosting-30673048/original/790918b1-3ea0-4c9c-87eb-f5e5d707104f.jpeg?aki_policy=small"
                          alt="profile image"
                        />
                      </div>
                      <h4>Villa Panorama</h4>
                    </div>
                  </div>
                  <!--slick-slide-item end-->
                  <!--slick-slide-item-->
                  <div class="slick-slide-item">
                    <div class="testimonilas-text">
                      <p>
                        Atemberaubende Unterkunft mit toller Aussicht. Die Küche ist gut ausgestattet und es gibt eine Grillstelle. Die Lage ist ruhig, das Meer ca. 5 Minuten entfernt. Die Kommunikation war super - rundum zufrieden.
                      </p>
                      <div class="customer">
                          <img src="https://a0.muscache.com/im/pictures/user/99050a94-142c-4747-b3e9-f5b28004f5b0.jpg?aki_policy=profile_x_medium" alt="" />
                          <div>
                              <h4>Patrick, Frankfurt, Germany</h4>
                              <span>Joined in 2018</span>
                          </div>
                      </div>
                    </div>
                    <div class="testimonilas-avatar-item">
                      <div class="testimonilas-avatar">
                        <img
                          src="https://a0.muscache.com/im/pictures/8d75dd9c-2ac9-4797-869a-c362cd17882d.jpg?aki_policy=small"
                          alt="profile image"
                        />
                      </div>
                      <h4>Villa Mare</h4>
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
          <section class="color-bg">
            <div class="shapes-bg-big"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div class="images-collage fl-wrap"></div>
                </div>
                <div class="col-md-6">
                  <div class="color-bg-text">
                    <h5>Kenia</h5>
                    <h3>BORN AGAIN WAISENHAUS KENIA</h3>
                    <div class="text-content">
                      <p> Seit 2019 betreue und helfe ich leidenschaftlich dem Waisenhaus “Born Again” in Kenia. Die Kinder wurden dort von ihren Eltern aus finanziellen oder gesundheitlichen Gründen abgegeben. Die Bedingungen vor Ort sind jedoch leider nicht die Besten.</p>
                      <p>An Weihnachten 2019 bin ich persönlich nach Kenia geflogen, um die Kinder zu besuchen. Zusammen mit Freunden haben wir Spenden in Höhe von 6.500 Euro für das Waisenhaus gesammelt. Für die Kinder wurden neue Betten gekauft, Weihnachtsgeschenke an die Jungen und Mädchen verteilt und ein Weihnachtsessen organisiert. Außerdem wurden durch die Spenden die Schul-, Strom- und Wasserrechnungen für die nächsten Monate bezahlt.</p>
                      <p>Die Dankbarkeit in den Augen der Kinder werde ich nie vergessen. Deshalb sehe ich es als meine Verpflichtung, dem Waisenhaus über die nächsten Jahre eine Stütze zu sein.</p>
                      <p>Aus diesem Grund werden von jeder Buchung 10 Euro direkt an das Waisenhaus gespendet. Ihr bucht also nicht nur euren Urlaub, sondern tut auch etwas Gutes damit. Im Namen von “Born Again” bedanken wir uns ganz herzlich bei euch.</p>
                    </div>
                    <!--<a href="#" class="color-bg-link modal-open">{{__('home.Sign In Now')}}</a>-->
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--section   end -->
          <!--section -->
          <section class="tips_articles">
            <div class="container">
              <div class="section-title">
                <h2><span>{{__('home.Discoveries')}}</span> & <span>{{__('home.Sights')}}</span></h2>
              </div>
              <div class="row home-posts">
                <div class="col-md-4">
                  <article class="card-post">
                    <div class="card-post-img fl-wrap">
                      <a href="{{route('blog-one')}}"
                        ><img
                          src="images/pexels-jaxson-bryden-979.jpg"
                          alt="image"
                      /></a>
                    </div>
                    <div class="card-post-content fl-wrap">
                      <h3>
                        <a href="{{route('blog-one')}}">{{__('home.Our 3 favorite beaches on the Makarska River')}}</a>
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
                      <a href="{{route('blog-two')}}"
                        ><img
                          src="images/pexels-jaxson-bryden-979.jpg"
                          alt="image"
                      /></a>
                    </div>
                    <div class="card-post-content fl-wrap">
                      <h3>
                        <a href="{{route('blog-two')}}">{{__('home.Our 3 favorite restaurants on the Makarska River')}}</a>
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
                      <a href="{{route('blog-three')}}"
                        ><img
                          src="images/pexels-jaxson-bryden-979.jpg"
                          alt="image"
                      /></a>
                    </div>
                    <div class="card-post-content fl-wrap">
                      <h3>
                        <a href="{{route('blog-three')}}">{{__('home.Our 3 Must see Lakes on the Makarska River')}}</a>
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
              {{--<a href="blog.html" class="btn big-btn circle-btn color-bg"
                >{{__('home.Read All')}}</a
              >--}}
            </div>
          </section>
          <!-- section end -->
          <!--section -->
          <section class="gradient-bg">
            <div class="container">
              <div class="join-wrap fl-wrap">
                <div class="row">
                  <div class="col-md-8">
                    <h3>{{__('home.Do you have any questions?')}}</h3>
                    <p>{{__('home.Contact us via email or just give us a call!')}}</p>
                  </div>
                  <div class="col-md-4">
                    <a href="contacts.html" class="join-wrap-btn"
                      >{{__('home.Get In Touch')}}</a
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