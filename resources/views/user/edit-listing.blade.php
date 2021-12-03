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

                  
                      <form action="/edit-listing/" method="post">
                        @csrf

                  <div class="col-md-9">
                    <!-- profile-edit-container-->
                    <div class="profile-edit-container add-list-container">
                      <div class="profile-edit-header fl-wrap">
                        <h4>Basic Informations</h4>
                      </div>

                      
                      <div class="custom-form">
                        <div class="row">
                          <div class="col-md-12">
                              
                            <h4 style="text-align: left;font-size: 18px;color: #98aab8;font-weight: 700;padding-bottom: 20px;">Select Category</h4>
                            <div class="middle" style="display:flex">
                                
                                @foreach($categories as $category)
                                <label>
                                  <input type="radio" name="category" checked/>
                                  <div class="box">
                                    <span>{{$category->title}}</span>
                                  </div>
                                </label>
                                @endforeach
                                <label></label>
                                <label></label>
                                <label></label>
                                <label></label>
                            </div>
                            
                            
                          </div>
                          <div class="col-md-12">
                            <label>Keywords <i class="fa fa-key"></i></label>
                            <input type="text" name="keywords" placeholder="Maximum 15, should be separated by commas" value="">
                          </div>
                        </div>
                        
                        <label>Listing Title <i class="fa fa-briefcase"></i></label>
                        <input type="text" name="title" placeholder="Name of your business" value="{{$listing->title}}">
                      </div>
                      
                    </div>
                    <!-- profile-edit-container end-->
                    <!-- profile-edit-container-->
                    <div class="profile-edit-container add-list-container">
                      <div class="custom-form">
                        <label>Address<i class="fa fa-map-marker"></i></label>
                        <input type="text" name="address" placeholder="Address of your business" value="{{$listing->address}}">                          
                        <label>Street<i class="fa fa-map-marker"></i></label>
                        <input type="text" name="street" placeholder="Your Street" value="{{$listing->street}}">
                        <label>City<i class="fa fa-map-marker"></i></label>
                        <input type="text" name="city" placeholder="Your City" value="{{$listing->city}}">
                        <label>ZIP Code<i class="fa fa-globe"></i></label>
                        <input type="text" name="zipcode" placeholder="Your Zipcode" value="{{$listing->zipcode}}">
                        <div class="map-container">
                          <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" style="position: relative; overflow: hidden;">
                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                              <div class="gm-err-container">
                                <div class="gm-err-content">
                                  <div class="gm-err-icon">
                                    <img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;">
                                  </div>
                                  <div class="gm-err-title">Oops! Something went wrong.</div>
                                  <div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div class="profile-edit-container add-list-container">
                      <div class="profile-edit-header fl-wrap">
                        <h4>Detailed Information</h4>
                      </div>
                      <div class="custom-form">
                        <label>Description</label>
                        <textarea cols="40" rows="3" placeholder="" name="description">{{$listing->description}}</textarea>
                        <!-- Checkboxes -->
                        <div class="fl-wrap filter-tags">
                          <h4>Amenities</h4>
                          <input id="check-a" type="checkbox" name="amenities" value="{{$listing->amenities}}" checked>
                          <label for="check-a">{{$listing->amenities}}</label>
                          
                          <input id="check-a" type="checkbox" name="amenities" value="Elevator in building">
                          <label for="check-a">Elevator in building</label>
                          <input id="check-b" type="checkbox" name="amenities" value="Friendly workspace">
                          <label for="check-b">Friendly workspace</label>
                          <input id="check-c" type="checkbox" name="amenities" value="Instant Book">
                          <label for="check-c">Instant Book</label>
                          <input id="check-d" type="checkbox" name="amenities" value="Wireless Internet">
                          <label for="check-d">Wireless Internet</label>
                        </div>
                      </div>
                    </div>

                    <div class="profile-edit-container add-list-container">
                      
                      <div class="custom-form">
                        <div class="row">
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
                                  <input type="file" class="upload">
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
                                  <input type="file" class="upload">
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
                                  <input type="file" class="upload">
                                </div>
                              </div>
                            </div>
                            <!-- act-widget end-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- profile-edit-container end-->
                    <!-- profile-edit-container-->
                    <div class="profile-edit-container add-list-container">
                      <div class="profile-edit-header fl-wrap">
                        <h4>Price</h4>
                      </div>
                      <div class="custom-form">
                        <!-- act-widget-->
                        <div class="act-widget fl-wrap">
                          
                        <label>Price<i class="fa fa-briefcase"></i></label>
                        <input type="text" name="price" placeholder="$500" value="${{$listing->price}}">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn  big-btn  color-bg flat-btn">Save Changes<i class="fa fa-angle-right"></i></button>
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