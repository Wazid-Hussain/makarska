@extends('layouts.app')
@section('content')

                                                                    
                                        @if(session()->has('message'))   
                                        
                                                                                <!--  booking successful pop up start -->
                                        <div class="single-listing-modal hidden">
                                            <button class="close-modal">×</button>
                                            <div class="text-content">
                                                <p>{{ session()->pull('message') }}
                                                    
                                                </p>
                                            </div>
                                        </div>
                                        <div class="single-listing-overlay hidden"></div>
                                        <!--  booking successful pop up end -->
                                        
                                        @endif
                <!--content -->  
                <div class="content">
                    <!--section -->  
                    <section id="sec1">
                        <!-- container -->
                        <div class="container">
                            <!-- profile-edit-wrap -->
                            <div class="profile-edit-wrap">
                                <div class="profile-edit-page-header">
                                    <h2>My Bookings</h2>
                                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Bookings</span></div>
                                </div>
                                <div class="row">
                                @include('customer.sidebar')
                                    <div class="col-md-9">
                                    <div class="dashboard-list-box fl-wrap">                                 

                                @foreach($bookings as $booking)
                                    <div class="dashboard-list">
                                        <div class="dashboard-message">
                                            <div class="dashboard-listing-table-image">
                                                <a href="{{route('single-listing',$booking->listing->id)}}"><img src="{{asset('/storage/'.$booking->listing->images[0]->path.'/'.$booking->listing->images[0]->image_name)}}" alt=""></a>
                                            </div>
                                            <div class="dashboard-listing-table-text">
                                                <h4><a href="{{route('single-listing',$booking->listing->id)}}">{{ $booking->listing->title }}</a></h4>
                                                <ul>
                                                    <li>
                                                    Adults : {{$booking->adults}}
                                                    </li>
                                                    <li>
                                                    Children : {{$booking->children}}
                                                    </li>
                                                    <li>
                                                        Booked On : {{$booking->created_at}}
                                                    </li>
                                                    <li>
                                                    Total Price : {{$booking->total_price}}
                                                    </li>
                                                </ul>

                                                
                                             
                                                <ul class="dashboard-listing-table-opt  fl-wrap">
                                                    <li><a href="">{{$booking->start_from}}<i class="fa fa-calender"></i></a></li>

                                                    <li><a href="">To</a></li>
                                                    
                                                    <li><a href="">{{$booking->end_to}}<i class="fa fa-calender"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> 
                                @endforeach
                            </div>
                            {{$bookings->links() }}
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