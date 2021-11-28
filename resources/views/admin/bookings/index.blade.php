@extends('admin.admin_master')

@section('admin')
            
            
        <!-- table area -->
        <section class="table_area">
            <div class="panel">
                <div class="panel_header">
                    <div class="panel_title"><span>Bookings</span></div>
                </div>
                <div class="panel_body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Booking From</th>
                                  <th>Booking upto</th>
                                  <th>Listing </th>
                                  <th>Booked by user</th>
                                  <th data-hide="all">total amount</th>
                                  <th>Status</th>
                              </tr>
                          </thead>
                          <tbody>
                                @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{$booking->id}}</td>
                                        <td>{{$booking->start_from}}</td>
                                        <td>{{$booking->end_to}}</td>
                                        <td>{{$booking->listing->title}}</td>
                                        <td>{{$booking->user->email}}</td>
                                        <td>{{$booking->total_price}}</td>
                                        <td>{{$booking->status ? 'booked' : 'cancelled' }}</td>
                                    </tr>
                                @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- /table -->
            <!-- chart area -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel chart_area">
                        <div class="panel_header">
                            <div class="panel_title">
                                <span class="panel_icon"><i class="far fa-chart-bar"></i></span>
                                <span>bar chat</span>
                            </div>
                        </div>
                        <div class="panel_body">
                            <div id="bar-chart">
                                <div id="bar-legend"></div>
                                <canvas id="bar-canvas" ></canvas>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="panel">
                        <div class="panel_header">
                            <div class="panel_title">
                                <span class="panel_icon"><i class="fas fa-chart-pie"></i></span>
                                <span>pie chat</span>
                            </div>
                        </div>
                        <div class="panel_body">
                            <div id="piechart"></div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>               









@endsection