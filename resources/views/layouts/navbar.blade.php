<div class="navbar fixed-top navbar-main">
    <a href="javascript:;" class="toggle-sidebar"><i class="icon-code"></i></a>
    <div class="mr-auto navbar-title">
        @yield('title')
    </div>
    <div class="ml-auto d-flex justify-content-end align-items-center">
        <a class="navbar-info-icon" href="mail.html"><i class="icon-mail"></i><span class="info-count">3</span></a>
        <a class="navbar-info-icon toggle-calendar" href="javascript:;"><i class="icon-calendar"></i><span class="info-count">5</span></a>
        <div class="d-flex dropdown">
            <a class="navbar-info-icon toggle-dropdown" href="javascript:;">
                <i class="icon-bell"></i>
                <span class="info-count">7</span>
            </a>
            
            <div class="dropdown-wrapper dropdown-menu-right dropdown-notification">
                <div class="head text-light bg-main">
                    <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <span>3 New Notifications</span>
                    </div>
                </div>
                </div>
                @include('layouts.notification')
                <div class="footer text-center">
                    <a href="" class="text-dark">View All</a>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <a class="navbar-user-info toggle-dropdown" href="javascript:;"><img src="assets/img/avatar_2.jpeg" alt="user" class="rounded-circle" width="35" /></a>
            <ul class="dropdown-wrapper dropdown-menu-right dropdown-menu-user">
                <li>
                    <a class="dropdown-item" href="#"><i class="icon-user"></i> Edit Profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="icon-mail"></i> My Inbox</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="icon-check-square"></i> My Task</a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><i class="icon-power"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>