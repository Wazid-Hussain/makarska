@include('includes.styles')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div style="background:url('{{Session::get('listingImage.0')}}'); width:100vw;height:100vh;background-size:cover;"></div>
              <!--booking-modal-wrap -->   
              <div class="booking-modal-wrap" style="display:block">
                <div class="booking-modal-container">
                    <div class="booking-modal-content fl-wrap">
                        <div class="booking-modal-info">
                            <div class="bg" style="background:url('{{Session::get('listingImage.0')}}'); width:100vw;height:100vh;background-size:cover;"></div>
                            <div class="overlay"></div>
                            <div class="booking-modal-info_content fl-wrap">
                                <h4>Luxury Hotel Spa</h4>
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
                                <li><span>01.</span>Personal Info</li>
                                <li><span>02.</span>Billing Address</li>
                                <li class="active"><span>03.</span>Payment Method</li>
                                <li><span>04.</span>Confirm</li>
                            </ul>

                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                            
                            <!--   list-single-main-item -->
                            <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                <div class="profile-edit-container">
                                    <div class="custom-form">
                                    <form role="form" action="{{ route('paymentStep') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                            @csrf
                                            <fieldset class="fl-wrap">
                                                <div class="list-single-main-item-title fl-wrap">
                                                    <h3>Payment method</h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label>Cardholder's Name<i class="fa fa-user"></i></label>
                                                        <input class='form-control' size='4' type='text' name="name">                                                 
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Card Number <i class="fa fa-credit-card"></i></label>
                                                        <input autocomplete='off' class='form-control card-number' size='20' type='text'> 
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <label>Expiry Month<i class="fa fa-calendar"></i></label>
                                                        <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>                                                  
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>Expiry Year<i class="fa fa-calendar"></i></label>
                                                        <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>                                                  
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>CVV / CVC *<i class="fa fa-credit-card"></i></label>
                                                        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'> 
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <p style="padding-top:20px;">*3 digits number on the back of your card</p>
                                                    </div>
                                                </div>
                                                <div class="log-separator fl-wrap"><span></span></div>
                                                <div class="soc-log fl-wrap">
                                                    <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now ($100)</button> -->
                                                    <button type="submit" class="btn  big-btn  color-bg flat-btn" style="float:right"><i class="fa fa-cc-stripe"></i>Pay With Stripe</button>
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



<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
var $form         = $(".require-validation");
$('form.require-validation').bind('submit', function(e) {
var $form         = $(".require-validation"),
inputSelector = ['input[type=email]', 'input[type=password]',
'input[type=text]', 'input[type=file]',
'textarea'].join(', '),
$inputs       = $form.find('.required').find(inputSelector),
$errorMessage = $form.find('div.error'),
valid         = true;
$errorMessage.addClass('hide');
$('.has-error').removeClass('has-error');
$inputs.each(function(i, el) {
var $input = $(el);
if ($input.val() === '') {
$input.parent().addClass('has-error');
$errorMessage.removeClass('hide');
e.preventDefault();
}
});
if (!$form.data('cc-on-file')) {
e.preventDefault();
Stripe.setPublishableKey($form.data('stripe-publishable-key'));
Stripe.createToken({
number: $('.card-number').val(),
cvc: $('.card-cvc').val(),
exp_month: $('.card-expiry-month').val(),
exp_year: $('.card-expiry-year').val()
}, stripeResponseHandler);
}
});
function stripeResponseHandler(status, response) {
if (response.error) {
$('.error')
.removeClass('hide')
.find('.alert')
.text(response.error.message);
} else {
/* token contains id, last4, and card type */
var token = response['id'];
$form.find('input[type=text]').empty();
$form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
$form.get(0).submit();
}
}
});
</script>
