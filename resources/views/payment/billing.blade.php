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
                                <li class="active"><span>02.</span>Billing Address</li>
                                <li><span>03.</span>Payment Method</li>
                                <li><span>04.</span>Confirm</li>
                            </ul>

                            <x-auth-validation-errors class="mb-4" :errors="$errors" style="color:red"/>
                            <!--   list-single-main-item -->
                            <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                <div class="profile-edit-container">
                                    <div class="custom-form">
                                        <form action="{{route('billingStep')}}" method="post">
                                            @csrf
                                            <fieldset class="fl-wrap">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Billing Address</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>City <i class="fa fa-globe"></i></label>
                                                        <input type="text" name="billing_city" placeholder="Your city" value=""/>                                                  
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Country </label>
                                                        <select data-placeholder="Your Country" name="billing_country" class="chosen-select" >
                                                            <option value="us">United states</option>
                                                            <option value="asia">Asia</option>
                                                            <option value="australia">Australia</option>
                                                            <option value="europe">Europe</option>
                                                            <option value="south america">South America</option>
                                                            <option value="africa">Africa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label>Street <i class="fa fa-road"></i> </label>
                                                        <input type="text" name="billing_street" placeholder="Your Street" value=""/>                                                  
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <label>State<i class="fa fa-street-view"></i></label>
                                                        <input type="text" name="billing_state" placeholder="Your State" value=""/>                                                  
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <label>Postal code<i class="fa fa-barcode"></i> </label>
                                                        <input type="text" name="billing_zip" placeholder="123456" value=""/>
                                                    </div>
                                                </div>
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Addtional Notes</h3>
                                                </div>
                                                <textarea cols="40" rows="3" name="additional_info" placeholder="Notes"></textarea>
                                                <span class="fw-separator"></span>
                                                <button  type="submit"  class="btn  big-btn  color-bg flat-btn" style="float:right">Next 
                                                <i class="fa fa-angle-right"></i></button>
                                                <!-- <a  href="/payment-step-3"  class="btn  big-btn  color-bg flat-btn" style="float:right">Next 
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
