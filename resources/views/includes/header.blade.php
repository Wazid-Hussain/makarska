        <!-- header-->
        <header class="main-header dark-header fs-header sticky">
          <div class="header-inner">
            <div class="header-inner-left">
              <div class="logo-holder">
                <a href="{{route('index')}}"><img src="images/logo.png" alt=""></a>
              </div>
            </div>
            <div class="header-inner-center">
              <div class="nav-holder main-menu">
                <nav>
                  <ul>
                    <li>
                      <a href="index.html" class="act-link"
                        >Home <i class="fa fa-caret-down"></i
                      ></a>
                      <!--second level -->
                      <ul>
                        <li><a href="#">Home-1</a></li>
                        <li><a href="#">Home-2</a></li>
                        <li><a href="#">Home-3</a></li>
                        <li><a href="#">Home-4</a></li>
                        <li><a href="#">Home-5</a></li>
                      </ul>
                      <!--second level end-->
                    </li>
                    <li>
                      <a href="#">Listings <i class="fa fa-caret-down"></i></a>
                      <!--second level -->
                      <ul>
                        <li>
                          <a href="listing-results.html">Listings Search</a>
                        </li>
                        <li>
                          <a href="listing-food.html">Listings Food</a>
                        </li>
                      </ul>
                      <!--second level end-->
                    </li>
                    <li>
                      <a href="blog.html">Blog</a>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="header-inner-right">
              <div class="web">
                <img src="media/world.png" width="16px" alt="" />
              </div>
              <div class="bar-icon-group">
                <div class="bars">
                  <div class="bar bar-1"></div>
                  <div class="bar bar-2"></div>
                  <div class="bar bar-3"></div>
                </div>

                @auth
                <div class="makarska-icon">
                  <img src="{{asset('/storage/images/' . auth()->user()->image)}}" style="width:38px;height:38px;border-radius:50%;object-fit:cover" alt="" />
                </div>
                    <ul class="hidden">
                      <li><a href="/profile">{{auth()->user()->name}}</a></li>
                      <li><a href="/add-listing"> Add Listing</a></li>
                      <li><a href="#">  Bookings  </a></li>
                      <li><a href="#"> Reviews </a></li>
                      <li>
                          <form action="/logout" method="post">
                              @csrf
                              <button type="submit" class="logout__btn">Log Out</button>
                          </form>
                      </li>
                  </ul>
              @else
               <div class="makarska-icon">
                  <img src="images/favicon.png" width="30px" alt="" />
                </div>
                <ul class="hidden">
                  <li><a href="#" class="show-reg-form modal-open">Sign In</a></li>
                  <li><a href="#"class="show-reg-form modal-open">Log In</a></li>
                  <li><a href="#"class="show-reg-form modal-open">Register</a></li>
                </ul>
              @endauth

              <!--</div>-->
            </div>
          </div>
        </header>
        <!--  header end -->