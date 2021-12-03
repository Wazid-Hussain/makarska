@extends('layouts.app')
@section('content')
     
<div class="content">
    <!--section --> 
    <section>
        <!-- container -->
        <div class="container">
            <!-- profile-edit-wrap -->
            <div class="profile-edit-wrap">
                <div class="profile-edit-page-header">
                    <h2>Edit profile</h2>
                    <div class="breadcrumbs"><a href="/">Home</a><a href="/dashboard">Dasboard</a><span>Edit profile</span></div>
                </div>
                <div class="row">                
                    @include('customer.sidebar')
                    <div class="col-md-7">
                        <!-- profile-edit-container--> 

                        <form action="{{route('customer_edit_profile')}}" method="post">
                            @csrf
                        <div class="profile-edit-container">
                            <div class="profile-edit-header fl-wrap">
                                <h4>My Account</h4>
                            </div>
                            <div class="custom-form">
                                <label>Your Name <i class="fa fa-user-o"></i></label>
                                <input type="text" name="name" value="{{$customer->name}}"/>
                                <label>Email Address<i class="fa fa-envelope-o"></i>  </label>
                                <input type="text" value="{{$customer->email}}" readonly/>
                                <label>Phone<i class="fa fa-phone"></i>  </label>
                                <input type="text" name="phone" value="{{$customer->phone}}"/>
                                <label> Adress <i class="fa fa-map-marker"></i>  </label>
                                <input type="text" name="address" value="{{$customer->address}}"/>
                            </div>
                        </div>
                        <!-- profile-edit-container end--> 							
                        <!-- profile-edit-container--> 
                        <div class="profile-edit-container">
                            <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                <h4>My Socials</h4>
                            </div>
                            <div class="custom-form">
                                <label>Facebook <i class="fa fa-facebook"></i></label>
                                <input type="text" name="facebook" value="{{$customer->facebookID}}"/>
                                <button class="btn  big-btn  color-bg flat-btn">Save Changes<i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                        <!-- profile-edit-container end-->  
                        </form>                                      
                    </div>
                    <div class="col-md-2">

                        <form action="{{route('customer_add_image')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="act-widget fl-wrap">
                              <div class="add-list-media-wrap">
                                <div class="fuzone" style="background-image:url('{{asset('/storage/images/' . Auth::guard('customer')->user()->image)}}'); background-position:center;
                                    background-size:cover;">
                                  <div class="fu-text">
                                    <span><i class="fa fa-picture-o"></i> Click
                                      here or drop files to upload</span>
                                    <div class="photoUpload-files fl-wrap"></div>
                                  </div>
                                  <input type="file" class="upload" name="image">
                                </div>
                              </div>

                              <button class="btn color-bg flat-btn" type="submit">Upload</button>
                            </div>
                            </form>
                    </div>
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
            <div class="bg" data-bg="images/bg/circle.png"></div>
        </div>
        <div class="container">
            <div class="join-wrap fl-wrap">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Do You Have Questions ?</h3>
                        <p>Lorem ipsum dolor sit amet, harum dolor nec in, usu molestiae at no.</p>
                    </div>
                    <div class="col-md-4"><a href="contacts.html" class="join-wrap-btn">Get In Touch <i class="fa fa-envelope-o"></i></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
</div>
@endsection