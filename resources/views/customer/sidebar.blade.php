<div class="col-md-3">
    <div class="fixed-bar fl-wrap">
        <div class="user-profile-menu-wrap fl-wrap">
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <h3>Main</h3>
                <ul>
                    <li><a href="{{route('customer.dashboard')}}" class="user-profile-act"><i class="fa fa-gears"></i>Dashboard</a></li>
                    <li><a href="{{route('customer_profile')}}"><i class="fa fa-user-o"></i> Edit profile</a></li>
                    <!--<li><a href="dashboard-messages.html"><i class="fa fa-envelope-o"></i> Messages <span>3</span></a></li>-->
                    <li><a href="{{route('customer_change_password')}}"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                </ul>
            </div>
            <!-- user-profile-menu end-->
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <h3>Listings</h3>
                <ul>
                    
                    
                    <li><a href="{{route('customer_booking')}}"> <i class="fa fa-calendar-check-o"></i> Bookings </a></li>
                </ul>
            </div>
            <!-- user-profile-menu end-->                
            <form method="POST" action="{{ route('customer_logout') }}">
                @csrf

                <a href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();" class="log-out-btn">
                    {{ __('Log Out') }}
                </a>
            </form>
        </div>
    </div>
</div>