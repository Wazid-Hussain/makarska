@include('includes.styles')

<div style="background:url('{{Session::get('listingImage.0')}}'); width:100vw;height:100vh;background-size:cover;"></div>
    <!--booking-modal-wrap -->   
    <div class="booking-modal-wrap" style="display:block">
    <div class="booking-modal-container">
        <div class="booking-modal-content fl-wrap">
            <div class="booking-modal-info">
                <div class="bg" style="background:url('{{Session::get('listingImage.0')}}'); width:100vw;height:100vh;background-size:cover;"></div>
                <div class="overlay" style="background-color:#000"></div>
                <div class="booking-modal-info_content fl-wrap">
                    <h4></h4>
                    <ul>
                        <li>From : <span>{{Session('formdata.0.start_from')}}</span></li>
                        <li>To : <span>{{Session('formdata.0.end_to')}}</span></li>
                        <li>Persons : <span>{{Session('formdata.0.adults')}}</span></li>
                        <li>Price : <span>${{Session('formdata.0.total_price')}}</span> </li>
                    </ul>
                </div>
            </div>
            <div class="bookiing-form-wrap">
                <ul id="progressbar">
                    <li class="active"><span>01.</span>Personal Info</li>
                    <li><span>02.</span>Billing Address</li>
                    <li><span>03.</span>Payment Method</li>
                    <li><span>04.</span>Confirm</li>
                </ul>

                
            
                <!--   list-single-main-item -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" style="color:red"/>
                <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                    <div class="profile-edit-container">
                        <div class="custom-form">
                            <form action="{{route('personalStep')}}" method="post" >
                                @csrf
                                <fieldset class="fl-wrap">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Your personal Information</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>First Name <i class="fa fa-user"></i></label>
                                            <input type="text" placeholder="Your Name" value="" name="firstName" autocomplete="off"/>                                                  
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Last Name <i class="fa fa-user"></i></label>
                                            <input type="text" placeholder="Your Last Name" value="" name="lasttName"  autocomplete="off"/> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Email Address<i class="fa fa-envelope"></i>  </label>
                                            <input type="email" placeholder="yourmail@domain.com" value="" name="email"  autocomplete="off"/>                                                  
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Phone<i class="fa fa-phone"></i>  </label>
                                            <input type="text" placeholder="87945612233" value="" name="phone" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Password<i class="fa fa-lock"></i>  </label>
                                            <input type="password" placeholder="Your Password" value="" name="password" autocomplete="off"/>                                                  
                                        </div>
                                    </div>
                                    <div class="soc-log fl-wrap">
                                        <p>Already Have an Account ?</p>
                                        <a href="/customer/login" class="facebook-log"><i class="fa fa-sign-in"></i>Login Here</a>
                                    </div>
                                    <span class="fw-separator"></span>
                                    <button  type="submit"  class="btn  big-btn  color-bg flat-btn" style="float:right">Payment Step 
                                    <i class="fa fa-angle-right"></i></button>
                                    <!-- <a  href="/payment-step-2"  class="btn  big-btn  color-bg flat-btn" style="float:right">Next 
                                    <i class="fa fa-angle-right"></i></a> -->
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <!--   list-single-main-item end -->
            </div>
        </div>
    </div>
</div>
<div class="bmw-overlay" style="display:block"></div>
<!--booking-modal-wrap end -->	
            
            
            
    <!--=============== scripts  ===============-->
<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/scripts.js') }}"></script>
