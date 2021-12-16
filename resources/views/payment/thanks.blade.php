@include('includes.styles')
              <!--booking-modal-wrap -->   
              <div style="background:url('{{Session::get('listingImage.0')}}'); width:100vw;height:100vh;background-size:cover;"></div>
              <div class="booking-modal-wrap" style="display:block">
                <div class="booking-modal-container">
                    <div class="booking-modal-content fl-wrap">
                        <div class="bookiing-form-wrap">
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
                                                <a  href="{{route('showBooking')}}"  class="-form action-button     color-bg btn"><i class="fa fa-angle-left"></i> View Booking</a>
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
