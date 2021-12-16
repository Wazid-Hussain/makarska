        <!-- header-->
        <header class="main-header dark-header fs-header sticky">
          <div class="header-inner">
            <div class="header-inner-left">
              <div class="logo-holder">
                <a href="{{route('index')}}"><img src="{{asset('images/logo.png')}}" alt="fg"></a>
              </div>
            </div>
            <div class="header-inner-center">
              <div class="nav-icon"><i class="fa fa-bars"></i></div>
              <div class="nav-holder main-menu">
                <nav>
                  <ul>
                    <li><a href="/" class="act-link">{{__('nav.Home')}}</a></li>
                    <li><a href="/accommodations">{{__('nav.Accommodation')}}</a></li>
                    <li><a href="/about">{{__('nav.About us')}}</a></li>
                    <li><a href="/contact">{{__('nav.Contact')}}</a></li>
                    <li><a href="/projects">{{__('nav.J Projects')}}</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="header-inner-right">
              <div class="web">
                <i class="fa fa-globe languages" style="font-size:24px"></i>
                <div class="lan-modal hidden">
                    <ul>
                        
                        @foreach (Config::get('languages') as $lang => $language)
                            <li>
                                <a href="{{ route('lang.switch', $lang) }}"> 
                                    <span>{{$language}}</span>
                                </a>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>
              </div>
              <div class="bar-icon-group">
                <div class="bars">
                  <div class="bar bar-1"></div>
                  <div class="bar bar-2"></div>
                  <div class="bar bar-3"></div>
                </div>
                
                @if(Auth::guard('customer')->check())
                <div class="makarska-icon">
                      <img src="{{asset('/storage/images/' . Auth::guard('customer')->user()->image)}}" style="width:38px;height:38px;border-radius:50%;object-fit:cover" alt="" />
                    </div>
                    <ul class="hidden">
                      <li><a href="{{route('customer_profile')}}">{{Auth::guard('customer')->user()->name}}</a></li>
                      <li><a href="{{route('customer_booking')}}">Bookings</a></li>
                      <li>
                          <form action="{{route('customer_logout')}}" method="post">
                              @csrf
                              <button type="submit" class="logout__btn">Log Out</button>
                          </form>
                      </li>
                    </ul>
                @elseif(Auth::guard('web')->check())
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
                      <li><a href="/customer/login" class="">Sign in</a></li>
                      <li><a href="/customer/login" class="">Register</a></li>
                      <li><a href="/signup" class="">Become a host</a></li>
                    </ul>
                @endif

              <!--</div>-->
            </div>
          </div>
        </header>
        <!--  header end -->