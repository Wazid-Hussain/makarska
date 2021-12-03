@include('includes.styles')
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
                                <li><span>03.</span>Payment Method</li>
                                <li class="active"><span>04.</span>Confirm</li>
                            </ul>
                            <!--   list-single-main-item -->
                            <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                <div class="profile-edit-container">
                                    <div class="custom-form">
                                        <form>
                                            <fieldset class="fl-wrap">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Confirmation</h3>
                                                </div>
                                                <div class="success-table-container">
                                                    <div class="success-table-header fl-wrap">
                                                        <i class="fa fa-check-circle decsth"></i>
                                                        <h4>Thank you. Your reservation has been received.</h4>
                                                        <div class="clearfix"></div>
                                                        <p>Your payment has been processed successfully.</p>
                                                        <!-- <a href="invoice.html" target="_blank" class="color-bg">View Invoice</a> -->
                                                    </div>
                                                </div>
                                                <span class="fw-separator"></span>
                                                <a  href="#"  class="-form action-button     color-bg"><i class="fa fa-angle-left"></i> Show Booking</a>
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
