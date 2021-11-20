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
                    <li><a href="index.html" class="act-link">{{__('nav.Home')}}</a></li>
                    <li><a href="#">{{__('nav.Accommodation')}}</a></li>
                    <li><a href="#">{{__('nav.About us')}}</a></li>
                    <li><a href="#">{{__('nav.Contact')}}</a></li>
                    <li><a href="#">{{__('nav.J Projects')}}</a></li>
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
                  <li><a href="#" class="show-reg-form modal-open">Register</a></li>
                </ul>
              @endauth

              <!--</div>-->
            </div>
          </div>
        </header>
        <!--  header end -->