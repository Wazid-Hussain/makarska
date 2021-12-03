@extends('layouts.app')
@section('content')
    <div class="content">
          <!--section -->
          <section id="sec1">
            <!-- container -->
            <div class="container">
              <!-- profile-edit-wrap -->
              <div class="profile-edit-wrap">
                <div class="profile-edit-page-header">
                  <h2>Add Listing</h2>
                  <div class="breadcrumbs">
                    <a href="#">Home</a><a href="#">Dasboard</a><span>Add Listing</span>
                  </div>
                </div>
                <div class="row">
                  @include('user.sidebar')

                      <form action="/add-listing" method="post" enctype="multipart/form-data">
                        @csrf

                  <div class="col-md-9">
                    <!-- profile-edit-container-->
                    <div class="profile-edit-container add-list-container">
                      <div class="profile-edit-header fl-wrap">
                          <div class="row custom-form">
                            <div class="col-md-12">
                                <h4>Select Category</h4>
                                <div class="middle">
                                    @foreach($categories as $category)
                                    <label>
                                      <input type="radio" name="category"/>
                                      <div class="box">
                                        <span>{{$category}}</span>
                                      </div>
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                          </div>
                          <div class="row custom-form">
                            <div class="col-md-12">
                                <h4>Basic Informations</h4>
                            </div>
                          </div>
                          <div class="row custom-form">
                            <div class="col-md-6">
                                <label>Listing Title <i class="fa fa-briefcase"></i></label>
                                <input type="text" name="title" placeholder="Name of your business" value="">
                                <label>Address</label>
                                <textarea cols="40" rows="3" name="address" placeholder="Address of your business" value=""></textarea>
                                <label>Keywords <i class="fa fa-key"></i></label>
                                <input type="text" name="keywords" placeholder="Maximum 15, should be separated by commas" value="">
                                @if($errors->has('keywords'))
                                  <div class="error">{{ $errors->first('keywords') }}</div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="map-container hidden">
                                  <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" style="position: relative; overflow: hidden;">
                                    <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                      <div class="gm-err-container">
                                        <div class="gm-err-content">
                                          <div class="gm-err-icon">
                                            <img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;">
                                          </div>
                                          <div class="gm-err-title">Oops! Something went wrong.</div>
                                          <div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="row custom-form">
                              <div class="col-md-4">
                                <!-- act-widget-->
                                <div class="act-widget fl-wrap">
                                  <div class="add-list-media-wrap">
                                    <div class="fuzone">
                                      <div class="fu-text">
                                        <span><i class="fa fa-picture-o"></i> Click
                                          here or drop files to upload</span>
                                        <div class="photoUpload-files fl-wrap"></div>
                                      </div>
                                      <input type="file" class="upload" name='images[]'>
                                      <img class="preview"/>
                                    </div>
                                  </div>
                                </div>
                                <!-- act-widget end-->
                              </div>
                              <div class="col-md-4">
                                <!-- act-widget-->
                                <div class="act-widget fl-wrap">
                                  <div class="add-list-media-wrap">
                                    <div class="fuzone">
                                      <div class="fu-text">
                                        <span><i class="fa fa-picture-o"></i> Click
                                          here or drop files to upload</span>
                                        <div class="photoUpload-files fl-wrap"></div>
                                      </div>
                                      <input type="file" class="upload"  name='images[]'>
                                      <img class="preview"/>
                                    </div>
                                  </div>
                                </div>
                                <!-- act-widget end-->
                              </div>
                              <div class="col-md-4">
                                <!-- act-widget-->
                                <div class="act-widget fl-wrap">
                                  <div class="add-list-media-wrap">
                                    <div class="fuzone">
                                      <div class="fu-text">
                                        <span><i class="fa fa-picture-o"></i> Click
                                          here or drop files to upload</span>
                                        <div class="photoUpload-files fl-wrap"></div>
                                      </div>
                                      <input type="file" class="upload"  name='images[]'>
                                      <img class="preview"/>
                                    </div>
                                  </div>
                                </div>
                                <!-- act-widget end-->
                              </div>
                          </div>
                          <div class="row custom-form">
                            <div class="col-md-12">
                                <div class="fl-wrap filter-tags">
                                  <h4>What this place offers</h4>
                                  <div>
                                    <p>Bathroom</p>
                                    <div class="input-item">
                                      <input id="check-a" type="checkbox" name="amenities" value="Hot water">
                                      <label for="check-a">Hot water</label>
                                    </div>
                                  </div>
                                  <div>
                                    <p>Bedroom and laundry</p>
                                    <div class="input-item">
                                        <input id="check-b" type="checkbox" name="amenities" value="Washing machine">
                                        <label for="check-b">Washing machine</label>
                                    </div>
                                    <div class="input-item">
                                        <input id="check-c" type="checkbox" name="amenities" value="Essentials">
                                        <label for="check-c">Essentials
                                            <span>Towels, bed sheets, soap and toilet paper</span>
                                        </label>
                                    </div>
                                    <div class="input-item">
                                        <input id="check-d" type="checkbox" name="amenities" value="Iron">
                                        <label for="check-d">Iron</label>
                                    </div>
                                  </div>
                                  <div>
                                    <p>Entertainment</p>
                                    <div class="input-item">
                                        <input id="check-e" type="checkbox" name="amenities" value="TV">
                                        <label for="check-e">TV</label>
                                    </div>
                                    <div class="input-item">
                                        <input id="check-f" type="checkbox" name="amenities" value="Suitable for events">
                                        <label for="check-f">Suitable for events
                                            <span>The listing can accommodate a gathering of 25 or more attendees</span>
                                        </label>
                                    </div>
                                  </div>
                                  <div>
                                    <p>Heating and cooling</p>
                                    <div class="input-item">
                                        <input id="check-g" type="checkbox" name="amenities" value="Air conditioning">
                                        <label for="check-g">Air conditioning</label>
                                    </div>
                                    <div class="input-item">
                                        <input id="check-h" type="checkbox" name="amenities" value="Indoor fireplace">
                                        <label for="check-h">Indoor fireplace</label>
                                    </div>
                                    <div class="input-item">
                                        <input id="check-i" type="checkbox" name="amenities" value="Heating">
                                        <label for="check-i">Heating</label>
                                    </div>
                                  </div>
                                  <div>
                                    <p>Home safety</p>
                                    <div class="input-item">
                                        <input id="check-j" type="checkbox" name="amenities" value="Smoke alarm">
                                        <label for="check-j">Smoke alarm</label>
                                    </div>
                                    <div class="input-item">
                                        <input id="check-k" type="checkbox" name="amenities" value="First aid kit">
                                        <label for="check-k">First aid kit</label>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="row custom-form">
                            <div class="col-md-12">
                                <h4>Detailed Information</h4>
                                <label>Description</label>
                                <textarea cols="40" rows="3" placeholder="" name="description"></textarea>
                            </div>
                          </div>
                          <div class="row custom-form">
                            <div class="col-md-12">
                                <h4>Price</h4>
                                <!-- act-widget-->
                                <div class="act-widget fl-wrap">
                                  <label>Price<i class="fa fa-briefcase"></i></label>
                                  <input type="text" name="price" placeholder="$500" value="">
                                </div>
                            </div>
                          </div>
                          <div class="row custom-form">
                            <div class="col-md-6">
                                <h4><span>*</span> Rooms</h4>
                                <div class="quantity fl-wrap">
                                    <span><i class="fa fa fa-bed"></i>Rooms :</span>
                                    <div class="quantity-item">
                                      <input type="button" value="-" class="minus" />
                                      <input type="text" name="quantity" title="Qty" class="qty" min="1" max="5" step="1" value="1" />
                                      <input type="button" value="+" class="plus" />
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="row custom-form">
                            <div class="col-md-6">
                                <h4><span>*</span> Adults</h4>
                                <div class="quantity fl-wrap">
                                    <span><i class="fa fa-user-plus"></i>Persons :</span>
                                    <div class="quantity-item">
                                      <input type="button" value="-" class="minus" />
                                      <input type="text" name="quantity" title="Qty" class="qty" min="1" max="2" step="1" value="1" />
                                      <input type="button" value="+" class="plus" />
                                    </div>
                                </div>
                                <span class="condn">Max. of 2 Adults per room.</span>
                            </div>
                          </div>
                          <div class="row custom-form">
                            <div class="col-md-12">
                                <button type="submit" class="btn  big-btn  color-bg flat-btn">Save Changes
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </div>
                          </div>
                      </div>
                    </div>
                    <!-- profile-edit-container end-->
                  </div>
                </form>



                </div>
              </div>
              <!--profile-edit-wrap end -->
            </div>
            <!--container end -->
          </section>
          <!-- section end -->
          <div class="limit-box fl-wrap"></div>
          <!--section -->
          <section class="gradient-bg">
            <div class="cirle-bg">
              <div class="bg" data-bg="images/bg/circle.png" style="background-image: url(&quot;images/bg/circle.png&quot;);"></div>
            </div>
            <div class="container">
              <div class="join-wrap fl-wrap">
                <div class="row">
                  <div class="col-md-8">
                    <h3>Do You Have Questions ?</h3>
                    <p>
                      Lorem ipsum dolor sit amet, harum dolor nec in, usu
                      molestiae at no.
                    </p>
                  </div>
                  <div class="col-md-4">
                    <a href="contacts.html" class="join-wrap-btn">Get In Touch <i class="fa fa-envelope-o"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- section end -->
        </div>
@endsection