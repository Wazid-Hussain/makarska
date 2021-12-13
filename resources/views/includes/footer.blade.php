
      <!--footer -->
      <footer class="main-footer dark-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="footer-widget fl-wrap">
                <h3>{{__('footer.About Us')}}</h3>
                <div class="footer-contacts-widget fl-wrap">
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry’s
                    standard dummy text ever since the 1500s. Lorem Ipsum is
                    simply dummy
                  </p>
                  <ul class="footer-contacts fl-wrap">
                    <li>
                      <span><i class="fa fa-envelope-o"></i> Mail:</span
                      ><a href="#" target="_blank">yourmail@domain.com</a>
                    </li>
                    <li>
                      <span><i class="fa fa-map-marker"></i> Address:</span
                      ><a href="#" target="_blank">Makarska, 27th Street</a>
                    </li>
                    <li>
                      <span><i class="fa fa-phone"></i> {{__('footer.Phone')}}:</span
                      ><a href="#">+7(111)123456789</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer-widget fl-wrap">
                <h3>{{__('footer.Our Last News')}}</h3>
                <div class="widget-posts fl-wrap">
                  <ul>
                  <li style="text-align: left;font-size: 18px;font-weight: 700;"><a href="/" class="act-link">{{__('nav.Home')}}</a></li>
                    <li style="text-align: left;font-size: 18px;font-weight: 700;"><a href="/accommodations">{{__('nav.Accommodation')}}</a></li>
                    <li style="text-align: left;font-size: 18px;font-weight: 700;"><a href="/about">{{__('nav.About us')}}</a></li>
                    <li style="text-align: left;font-size: 18px;font-weight: 700;"><a href="/contact">{{__('nav.Contact')}}</a></li>
                    <li style="text-align: left;font-size: 18px;font-weight: 700;"><a href="/projects">{{__('nav.J Projects')}}</a></li>
                    
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer-widget fl-wrap">
                <h3>{{__('footer.Our Instagram')}}</h3>
                <div class="container insta-widget">

                  <div class="row">
                   {{-- @foreach($images as $key => $image)
                    <div class="col-md-6 img-con">
                      <img
                        src="{{asset('/insta/images/'.$key.'.png')}}"
                        alt="image"
                      />
                    </div>
                    @endforeach --}}

                  </div>

                </div>

              </div>
            </div>
            <div class="col-md-3">
              <div class="footer-widget fl-wrap">
                <h3>{{__('footer.Subscribe')}}</h3>
                <div class="subscribe-widget fl-wrap">
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry’s
                    standard dummy text ever since the 1500s. Lorem Ipsum is
                    simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry’s standard dummy text ever
                  </p>
                </div>
                <div class="footer-widget fl-wrap">
                  <div class="footer-menu fl-wrap">
                    <ul>
                      <li><a href="#">{{__('footer.Home')}}</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">{{__('footer.Listing')}}</a></li>
                      <li><a href="#">{{__('footer.Contacts')}}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sub-footer fl-wrap">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="about-widget">
                  <img src="images/logo.png" alt="logo" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="copyright">
                  &#169; Makarska 2021 . {{__('footer.All rights reserved.')}}
                </div>
              </div>
              <div class="col-md-4">
                <div class="footer-social">
                  <ul>
                    <li>
                      <a href="#" target="_blank"
                        ><i class="fa fa-facebook-official"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"
                        ><i class="fa fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"
                        ><i class="fa fa-chrome"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fa fa-vk"></i></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"
                        ><i class="fa fa-whatsapp"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!--footer end  -->