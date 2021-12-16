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
                                    @foreach($categories as $key => $category)
                                
                                    <label>
                                      <input type="radio" name="category_id" value="{{$key}}"/>
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
                                    @foreach($amenities as $amenity)
                                      <div class="input-item">
                                        <input id="check-{{$amenity->id}}" type="checkbox" name="amenities[]" value="{{$amenity->id}}">
                                        <label for="check-{{$amenity->id}}">{{$amenity->name}}</label>
                                      </div>
                                    @endforeach
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
                                      <input type="text" name="rooms" title="Qty" class="qty" min="1" max="5" step="1" value="1" />
                                      <input type="button" value="+" class="plus" />
                                    </div>
                                </div>
                            </div>
                          </div>
                          
                        <div class="row custom-form">
                            <div class="col-md-6">
                                <h4><span>*</span> Beds</h4>
                                <div class="quantity fl-wrap">
                                    <span><i class="fa fa fa-bed"></i>Beds :</span>
                                    <div class="quantity-item">
                                      <input type="button" value="-" class="minus" />
                                      <input type="text" name="beds" title="Qty" class="qty" min="1" max="10" step="1" value="1" />
                                      <input type="button" value="+" class="plus" />
                                    </div>
                                </div>
                            </div>
                          </div>
                                    
                        <div class="row custom-form">
                            <div class="col-md-6">
                                <h4><span>*</span> Bathrooms</h4>
                                <div class="quantity fl-wrap">
                                    <span><i class="fa fa fa-bed"></i>Bathrooms :</span>
                                    <div class="quantity-item">
                                      <input type="button" value="-" class="minus" />
                                      <input type="text" name="bathrooms" title="Qty" class="qty" min="1" max="5" step="1" value="1" />
                                      <input type="button" value="+" class="plus" />
                                    </div>
                                </div>
                            </div>
                          </div>
                          
                        <div class="row custom-form">
                            <div class="col-md-6">
                                <h4><span>*</span> Kitchens</h4>
                                <div class="quantity fl-wrap">
                                    <span><i class="fa fa fa-bed"></i>Kitchens :</span>
                                    <div class="quantity-item">
                                      <input type="button" value="-" class="minus" />
                                      <input type="text" name="kitchens" title="Qty" class="qty" min="0" max="5" step="1" value="0" />
                                      <input type="button" value="+" class="plus" />
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="row custom-form">
                            <div class="col-md-6">
                                <h4><span>*</span> Guests</h4>
                                <div class="quantity fl-wrap">
                                    <span><i class="fa fa-user-plus"></i>Guests :</span>
                                    <div class="quantity-item">
                                      <input type="button" value="-" class="minus" />
                                      <input type="text" name="guests" title="Qty" class="qty" min="1" max="10" step="1" value="1" />
                                      <input type="button" value="+" class="plus" />
                                    </div>
                                </div>
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