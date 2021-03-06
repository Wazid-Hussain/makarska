<div class="col-md-3">
    <div class="fixed-bar fl-wrap">
        <div class="user-profile-menu-wrap fl-wrap">
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <h3>Main</h3>
                <ul>
                    <li><a href="/dashboard" class="user-profile-act"><i class="fa fa-gears"></i>Dashboard</a></li>
                    <li><a href="/profile"><i class="fa fa-user-o"></i> Edit profile</a></li>
                    <li><a href="dashboard-messages.html"><i class="fa fa-envelope-o"></i> Messages <span>3</span></a></li>
                    <li><a href="dashboard-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                </ul>
            </div>
            <!-- user-profile-menu end-->
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <h3>Listings</h3>
                <ul>
                    <li><a href="dashboard-listing-table.html"><i class="fa fa-th-list"></i> My listigs  </a></li>
                    <li><a href="{{route('dashboard-bookings')}}"> <i class="fa fa-calendar-check-o"></i> Bookings <span>2</span></a></li>
                    <li><a href="dashboard-review.html"><i class="fa fa-comments-o"></i> Reviews </a></li>
                    <li><a href="{{route('add-listing')}}"><i class="fa fa-plus-square-o"></i> Add New</a></li>
                </ul>
            </div>
            <!-- user-profile-menu end-->                                        
            <a href="#" class="log-out-btn">Log Out</a> 
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </div>
    </div>
</div>