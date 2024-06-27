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
                    <!--------All tha navigation that can be seen by all----->

                    @if(Auth::user()->role == 3 )
                    <li><a href="{{ route('trainer.home')}}">Dashboard</a></li>
                    @endif

                    @if(Auth::user()->role == 2 )
                    <li><a href="{{ route('trainee.home')}}">Dashboard</a></li>
                    @endif
                </ul>
            </li>
            @if(Auth::user()->role == 2 )
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-calendar"></i><span class="nav-text">Calendar</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('/trainee/calendar/schedule') }}">Schedule</a></li>
                </ul>
            </li>
            @endif
            @if(Auth::user()->role == 1 )
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-calendar"></i><span class="nav-text">Calendar</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.calendar_schedule')}}">Schedule</a></li>
                </ul>
            </li>
            @endif
            @if(Auth::user()->role == 3 )
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-calendar"></i><span class="nav-text">Calendar</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('trainer.schedule_calendar')}}">Schedule</a></li>
                </ul>
            </li>
            @endif

            @if(Auth::user()->role == 2)
            <li class="nav-label">Meal Planning</li>
            <li><a href="{{ route('trainee.meal') }}" aria-expanded="false"><i class="ti-thought"></i><span class="nav-text">Meal</span></a></li>
            <li><a href="{{ route('trainee.suppliment') }}" aria-expanded="false" disabled><i class="ti-shine"></i><span class="nav-text">Suppliments</span></a></li>

            <li class="nav-label">Progress Tracking</li>
            <li><a href="{{ route('trainee.progress') }}" aria-expanded="false"><i class="ti-bar-chart-alt"></i><span class="nav-text">Progress</span></a></li>
            <li><a href="{{ route('trainee.attendance') }}" aria-expanded="false"><i class="ti-check-box"></i><span class="nav-text">Attendance</span></a></li>
            <li><a href="{{ route('trainee.notes') }}" aria-expanded="false"><i class="ti-notepad"></i><span class="nav-text">Notes</span></a></li>


            <li class="nav-label">Notifications</li>
            <li><a href="{{ route('trainee.messeges') }}" aria-expanded="false"><i class="ti-comment-alt"></i><span class="nav-text">Messeges</span></a></li>
            <li><a href="{{ route('trainee.nutrition') }}" aria-expanded="false"><i class="ti-pulse"></i><span class="nav-text">Nutrition And Health</span></a></li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-email"></i><span class="nav-text">Emails</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Compose</a></li>
                    <li><a href="javascript:void()">Inbox</a></li>
                    <li><a href="javascript:void()">Read</a></li>
                </ul>
            </li>

            <li class="nav-label">Settings</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-settings"></i><span class="nav-text">Settings</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('user/profile')}}">Profile</a></li>
                    <li><a href="{{ url('pricing/plans')}}">Pricing Plan</a></li>
                </ul>
            </li>


            @endif

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
                    <li><a href="{{route('trainer.meals')}}">Meals</a></li>
                </ul>
            </li>


            <li class="nav-label">Notifications</li>
            <li><a href="{{ route('trainer.messeges') }}" aria-expanded="false"><i class="ti-comment-alt"></i><span class="nav-text">Messeges</span></a></li>
            <li><a href="{{ route('trainee.nutrition') }}" aria-expanded="false"><i class="ti-pulse"></i><span class="nav-text">Nutrition And Health</span></a></li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-email"></i><span class="nav-text">Emails</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Compose</a></li>
                    <li><a href="javascript:void()">Inbox</a></li>
                    <li><a href="javascript:void()">Read</a></li>
                </ul>
            </li>

            <li class="nav-label">Settings</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-settings"></i><span class="nav-text">Settings</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('trainer.levels')}}">Levels</a></li>
                    <li><a href="{{ route('trainer.meal.planning')}}">Foods</a></li>
                </ul>
            </li>

            @endif



            @if(Auth::user()->role == 1)
            <li class="nav-label">Users management</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-user"></i><span class="nav-text">Administrators</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Activations</a>
                        <ul aria-expanded="false">
                            <li><a href="javascript:void()">Requests</a></li>
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

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-face-sad"></i><span class="nav-text">Trainers</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Activations</a>
                        <ul aria-expanded="false">
                            <li><a href="{{  route('trainer.request') }}">Requests</a></li>
                            <!-- <li><a href="javascript:void()">..</a></li>
                            <li><a href="javascript:void()">Read</a></li> -->
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-face-smile "></i><span class="nav-text">Members</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{  route('admin.user.promotion') }}">Profile</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="javascript:void()">Compose</a></li>
                            <li><a href="javascript:void()">Inbox</a></li>

                        </ul>
                    </li>

                </ul>
            </li>

            <li class="nav-label">Assets management</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-crown"></i><span class="nav-text">Assets</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('admin.assets')}}">Assets</a></li>
                    <li><a href="{{route('admin.transaction')}}">Transactions</a></li>
                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-shopping-cart-full"></i><span class="nav-text">Inventory</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Stores</a></li>
                    <li><a href="javascript:void()"></a></li>
                </ul>
            </li>
            <li><a href="javascript:void()" aria-expanded="false"><i class="ti-link"></i><span class="nav-text">Obsoletes</span></a></li>

            <li class="nav-label">Accounting and finance</li>
            <li><a href="javascript:void()" aria-expanded="false"><i class="ti-pie-chart"></i><span class="nav-text">Income</span></a></li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-server"></i><span class="nav-text">Overview</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Payroll</a></li>
                    <li><a href="javascript:void()l">Liab>ilities</a></li>

                </ul>
            </li>

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-cut"></i><span class="nav-text">Revenue</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Funds</a></li>
                    <li><a href="javascript:void()">Payments</a></li>
                </ul>
            </li>

            <li class="nav-label">Settings</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="ti-settings"></i><span class="nav-text">Settings</span></a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Fitness Centers</a></li>
                    <li><a href="{{ url('pricing/plans')}}">Plicing Plan</a></li>
                    <!-- <li><a href=" {{ route('trainer.levels')}}">Levels</a></li>
                    <li><a href="{{ route('trainer.meal.planning')}}">Meal planning</a></li> -->
                    <li><a href=" {{  route('admin.user.promotion') }}">Promotion (RBAC)</a></li>
                </ul>
            </li>

            @endif

        </ul>
    </div>
</div>
<!--Sidebar end-->
