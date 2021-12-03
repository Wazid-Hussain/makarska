@include('includes.styles')

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('pk_test_51K1nCpSDxEDWJrzk4i9vwmoN665nzXod2H2cCwa5lZUftvnHxhTZcDDxGayaWGp2GjioLMr5cmh3QR2x6AvlGk8R00dIjdwSZg');
</script>
              <!--booking-modal-wrap -->   
              <div class="booking-modal-wrap" style="display:block">
                <div class="booking-modal-container">
                    <div class="booking-modal-content fl-wrap">
                        <div class="booking-modal-info">
                            <div class="bg"  data-bg="images/bg/1.jpg" ></div>
                            <div class="overlay"></div>
                            <div class="booking-modal-info_content fl-wrap">
                                <h4>Luxury Hotel Spa</h4>
                                <ul>
                                    <li>Date : <span>05.05.2020</span></li>
                                    <li>Persons : <span>2</span></li>
                                    <li>Price : <span>$120</span> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bookiing-form-wrap">
                            <ul id="progressbar">
                                <li><span>01.</span>Personal Info</li>
                                <li><span>02.</span>Billing Address</li>
                                <li class="active"><span>03.</span>Payment Method</li>
                                <li><span>04.</span>Confirm</li>
                            </ul>
                            <!--   list-single-main-item -->
                            <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                <div class="profile-edit-container">
                                    <div class="custom-form">

                                    <form id="payment-form">
                                    <div id="payment-element">
                                        <!-- Elements will create form elements here -->
                                    </div>
                                    <button id="submit">Submit</button>
                                    <div id="error-message">
                                        <!-- Display error message to your customers here -->
                                    </div>
                                    </form>







                                    <form action="{{route('paymentStep')}}" method="post">
                                            @csrf
                                            <fieldset class="fl-wrap">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Payment method</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>Cardholder's Name<i class="fa fa-user"></i></label>
                                                        <input type="text" placeholder="" value="Adam Kowalsky"/>                                                  
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Card Number <i class="fa fa-credit-card"></i></label>
                                                        <input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" value=""/> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label>Expiry Month<i class="fa fa-calendar"></i></label>
                                                        <input type="text" placeholder="MM" value=""/>                                                  
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>Expiry Year<i class="fa fa-calendar"></i></label>
                                                        <input type="text" placeholder="YY" value=""/>                                                  
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>CVV / CVC *<i class="fa fa-credit-card"></i></label>
                                                        <input type="password" placeholder="***" value=""/> 
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <p style="padding-top:20px;">*3 digits number on the back of your card</p>
                                                    </div>
                                                </div>
                                                <div class="log-separator fl-wrap"><span></span></div>
                                                <div class="soc-log fl-wrap">
                                                    <a href="#" class="paypal-log"><i class="fa fa-cc-stripe"></i>Pay With Stripe</a>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <!-- <button  type="submit"  class="btn  big-btn  color-bg flat-btn" style="float:right">Next 
                                                <i class="fa fa-angle-right"></i></button>-->
                                                <!-- <a  href="/payment-step-4"  class="btn  big-btn  color-bg flat-btn" style="float:right">Next 
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
