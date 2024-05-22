<!--Sidebar start-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">

            <li class="nav-label first">Main Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
            </li> -->
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-home"></i><span class="nav-text">Dashboard</span></a>
                <ul aria-expanded="false">
                    @if(Auth::user()->role == 1)
                    <li><a href="{{ route('dashboard')}}">Dashboard</a></li>
                    @endif

                    @if(Auth::user()->role == 3)
                    <li><a href="{{ route('trainer.home')}}">Dashboard</a></li>
                    <li><a href="{{ route('schedule_calendar')}}">Schedule</a></li>
                    @endif
                </ul>
            </li>

            @if(Auth::user()->role == 3)
            <li class="nav-label">Training Facilities</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-crown"></i><span class="nav-text">Facilities</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Assigned</a></li>
                    <li><a href="javascript:void()">Fixing</a></li>
                    <li><a href="javascript:void()">Retired</a></li>

                </ul>
            </li>


            <li class="nav-label">Trainee Management</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-user "></i><span class="nav-text">Trainees</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Assigned</a></li>
                    <li><a href="javascript:void()">....</a></li>
                    <li><a href="javascript:void()">....</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-heart"></i><span class="nav-text">Meal Planning</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Meals</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Suppliments</a>
                        <ul aria-expanded="false">
                            <li><a href="javascript:void()">Meals</a></li>
                            <li><a href="javascript:void()">....</a></li>
                            <li><a href="javascript:void()">....</a></li>
                        </ul>
                    </li>

                </ul>
            </li>


            <li class="nav-label">Settings</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-settings"></i><span class="nav-text">Settings</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('trainer.levels')}}">Levels</a></li>
                </ul>
            </li>

            @endif



            @if(Auth::user()->role == 1)
            <li class="nav-label">Users management</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-user "></i><span class="nav-text">Administrators</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Activations</a>
                        <ul aria-expanded="false">
                            <li><a href="{{  route('trainer.request') }}">Requests</a></li>
                            <!-- <li><a href="javascript:void()">..</a></li>
                            <li><a href="javascript:void()">Read</a></li> -->
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="javascript:void()">Compose</a></li>
                            <li><a href="javascript:void()">Inbox</a></li>
                            <li><a href="javascript:void()">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void()">Calendar</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-user  "></i><span class="nav-text">Trainers</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Profile</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="javascript:void()">Compose</a></li>
                            <li><a href="javascript:void()">Inbox</a></li>
                            <li><a href="javascript:void()">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void()">Calendar</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-face-smile "></i><span class="nav-text">Members</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('user/profile')}}">Profile</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="javascript:void()">Compose</a></li>
                            <li><a href="javascript:void()">Inbox</a></li>
                            <li><a href="javascript:void()">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void()">Calendar</a></li>
                </ul>
            </li>

            <li class="nav-label">Assets management</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-crown"></i><span class="nav-text">Assets</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Accordion</a></li>
                    <li><a href="javascript:void()">Alert</a></li>
                    <li><a href="javascript:void()">Badge</a></li>
                    <li><a href="javascript:void()">Button</a></li>
                    <li><a href="javascript:void()">Modal</a></li>
                    <li><a href="javascript:void()">Button Group</a></li>
                    <li><a href="javascript:void()">List Group</a></li>
                    <li><a href="javascript:void()">Media Object</a></li>
                    <li><a href="javascript:void()">Cards</a></li>
                    <li><a href="javascript:void()">Carousel</a></li>


                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-shopping-cart-full"></i><span class="nav-text">Inventory</span></a>
                <ul aria-expanded="false">
                    <li><a href="./uc-select2.html">Select 2</a></li>
                    <li><a href="./uc-nestable.html">Nestedable</a></li>
                    <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="./uc-toastr.html">Toastr</a></li>
                    <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                </ul>
            </li>
            <li><a href="javascript:void()" aria-expanded="false"><i class="ti-link"></i><span class="nav-text">Obsoletes</span></a></li>

            <li class="nav-label">Accounting and finance</li>
            <li><a href="javascript:void()" aria-expanded="false"><i class="ti-pie-chart"></i><span class="nav-text">Over view</span></a></li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-server"></i><span class="nav-text">Income</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Accordion</a></li>
                    <li><a href="javascript:void()l">Alert</a></li>
                    <li><a href="javascript:void()">Badge</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-cut"></i><span class="nav-text">Revenue</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Select 2</a></li>
                    <li><a href="javascript:void()">Nestedable</a></li>
                </ul>
            </li>

            <li class="nav-label">Settings</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-settings"></i><span class="nav-text">Settings</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Centers</a></li>
                    <li><a href="javascript:void()">Packages</a></li>
                    <li><a href="javascript:void()">Import</a></li>
                </ul>
            </li>

            @endif

        </ul>
    </div>
</div>
<!--Sidebar end-->