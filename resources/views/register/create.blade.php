  @include('includes.styles')
   <div class="">
                <div class="main-overlay"></div>
                <div class="main-register-holder sign-up">
                    <div class="main-register fl-wrap">
                        <div class="logo-holder">
                            <a href="/">
                                <img src="{{asset('/images/logo.png')}}" alt="">
                            </a>
                        </div>
                        <a href="/" class="back-to-home">
                            <button class="btn">
                                Back
                                <i class="fa fa-long-arrow-left"></i>
                            </button>
                        </a>
                        <div class="soc-log fl-wrap">
                            <p><b>For faster login or register use your social account.</b></p>
                            <a href="/sign-in/facebook" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <x-auth-validation-errors class="mb-4" :errors="$errors" style="color:red"/>
                            <div class="tab">
                                <div id="tab-1" class="tab-content">
                                    <div class="custom-form">
                                        <form method="post" action="{{ route('login')}}" name="registerform">
                                            @csrf
                                            <label>Email Address * </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password * </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                        </form>
                                         @if (Route::has('password.request'))
                                            
                                            <div class="lost_password">
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                            </div>
                                            @endif
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                            <form method="post"  action="{{ route('register') }}" name="registerform" class="main-register-form" id="main-register-form2">
                                                @csrf
                                                <label >First Name * </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Email Address *</label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password *</label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit"     class="log-submit-btn"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&libraries=places&callback=initAutocomplete"></script>
