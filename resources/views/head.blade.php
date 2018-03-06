
<nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
    <div class="navbar-header">
        <a class="navbar-brand" href="/">
            <!-- Logo icon -->
            <b>
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img src="/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo icon -->
                <img src="/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span>
                         <!-- dark Logo text -->
                         <img src="/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                <!-- Light Logo text -->
                         <img src="/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>
        </a>
    </div>
    <div class="navbar-collapse">
        <!-- ============================================================== -->
        <!-- toggle and nav items -->
        <!-- ============================================================== -->
        <ul class="navbar-nav mr-auto mt-md-0 ">
            <!-- This is  -->
            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                    <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                </a>
                <div class="dropdown-menu mailbox animated bounceInDown">
                    <ul>
                        <li>
                            <div class="drop-title">Notifications</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                    <div class="mail-contnet">
                                        <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                    <div class="mail-contnet">
                                        <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                    <div class="mail-contnet">
                                        <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="#">
                                    <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    @if(auth()->check())
            <a href="{{route('logout')}}" onclick="id =document.getElementById('logout'); id.preventDefault().submit()" class="btn btn-info">Logout</a>
            <form id="logout" action="{{route('logout')}}" style="display: none;" method="post">
                {{csrf_field()}}
            </form>
        @else
        <a href="{{route('login')}}" class="btn btn-primary">Login</a>
    @endif
</nav>