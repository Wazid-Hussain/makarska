@extends('layouts.app')
@section('content')
     <div id="wrapper">
                         <!--section --> 
                    <section id="sec1">
                        <!-- container -->
                        <div class="container">
                            <!-- profile-edit-wrap -->
                            <div class="profile-edit-wrap">
                                <div class="profile-edit-page-header">
                                    <h2>Change Password</h2>
                                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Change Password</span></div>
                                </div>
                                <div class="row">
                                    @include('user.sidebar')
                                    
                                    <div class="col-md-9">
                                        <!-- profile-edit-container--> 
                                        <div class="profile-edit-container">
                                            <div class="profile-edit-header fl-wrap" style="margin-top:30px">
                                                <h4>Change Password</h4>
                                            </div>
                                            @if($errors->any())
                                            <h4>{{$errors->first()}}</h4>
                                            @endif
                                            <form action="/change-password" method="post">
                                                @csrf;
                                                <div class="custom-form no-icons">
                                                    <div class="pass-input-wrap fl-wrap">
                                                        <label>Current Password</label>
                                                        <input type="password" class="pass-input" name="oldpassword" placeholder="" value=""/>
                                                        <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
                                                    </div>
                                                    <div class="pass-input-wrap fl-wrap">
                                                        <label>New Password</label>
                                                        <input type="password" class="pass-input" name="password" value=""/>
                                                        <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
                                                    </div>
                                                    <div class="pass-input-wrap fl-wrap">
                                                        <label>Confirm New Password</label>
                                                        <input type="password" class="pass-input" name="password_confirmation" value=""/>
                                                        <span class="eye"><i class="fa fa-eye" aria-hidden="true"></i> </span>
                                                    </div>
                                                    <button class="btn  big-btn  color-bg flat-btn">Save Changes<i class="fa fa-angle-right"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- profile-edit-container end-->                                        
                                    </div>
                                </div>
                            </div>
                            <!--profile-edit-wrap end -->
                        </div>
                        <!--container end -->
                    </section>
                    <!-- section end -->
     
     </div>
     
@endsection