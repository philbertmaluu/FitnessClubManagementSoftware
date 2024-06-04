@include('includes.auth.header')

<body>


    @include('includes.auth.preloader')


    <!--Main wrapper start-->
    <div id="main-wrapper">
        @include('includes.auth.head')


        @if(Auth::user()->is_active == 1)
        @include('includes.auth.sidebar')
        @endif

        <!--Content body start-->

        <div class="content-body">
            <div class="container-fluid">

                <!----------alert starts------------>
                @if(session('success'))
                <div class="alert alert-success alert-dismissible alert-alt fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span></button>
                    {{ session('success') }}
                </div>
                @elseif(session('error'))
                <div class="alert alert-danger alert-dismissible alert-alt fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                    {{ session('error') }}
                </div>
                @endif

                <!---------alert ends----------->
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            @auth
                            <h4>Hi, {{ Auth::user()->username }} welcome back!</h4>
                            @endauth
                            @if(Auth::user()->is_active == 1)
                            <p class="mb-0">Setup your account and let us manage your workours</p>
                            @else
                            <p class="mb-0">Manage ur workouts with us</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
                        </ol> -->
                    </div>
                </div>
                <!-- row -->
                @if(Auth::user()->is_active == 0)
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Setup your account</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                                    <div>
                                        <h4>Goal settings</h4>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Level*</label>
                                                        <select class="form-control" type="number" name="level" required autocomplete="new-password">
                                                            <option>Select your level</option>
                                                            <option value="1">Beginner</option>
                                                            <option value="2">Intermediate</option>
                                                            <option value="2">Senior</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Targeted weight</label>
                                                        <input type="number" name="weight" class="form-control" placeholder="Enter the your target weight">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Start date*</label>
                                                        <div class="input-group">
                                                            <input type="date" name="start_date" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="example@example.com.com" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mb-4">
                                                    <div class="form-group">
                                                        <label class="text-label">Description*</label>
                                                        <div class="input-group">
                                                            <textarea type="text" name="description" class="form-control" placeholder="" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <h4>Suggested schedule</h4>
                                        <section>
                                            <div class="row">
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <h4>Monday *</h4>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="9.00" type="number" name="input1" id="input1">
                                                    </div>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="6.00" type="number" name="input2" id="input2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <h4>Tuesday *</h4>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="9.00" type="number" name="input3" id="input3">
                                                    </div>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="6.00" type="number" name="input4" id="input4">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <h4>Wednesday *</h4>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="9.00" type="number" name="input5" id="input5">
                                                    </div>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="6.00" type="number" name="input6" id="input6">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <h4>Thrusday *</h4>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="9.00" type="number" name="input7" id="input7">
                                                    </div>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="6.00" type="number" name="input8" id="input8">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <h4>Friday *</h4>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="9.00" type="number" name="input9" id="input9">
                                                    </div>
                                                </div>
                                                <div class="col-4 col-sm-3 mb-4">
                                                    <div class="form-group">
                                                        <input class="form-control" value="6.00" type="number" name="input10" id="input10">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <h4>suggested Plans</h4>
                                        <section>
                                            <div class="row">
                                                @foreach($plans as $plan)
                                                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                                                    <div class="card text-center">
                                                        <div class="card-header">
                                                            <h5 class="card-title">{{$plan->name}}</h5>


                                                            @if(Auth::user()->role == 1)
                                                            <div class="card-title">
                                                                <a data-toggle="modal" data-target=".bd-example-modal-lg2" href="javascript:void()" class="badge badge-warning"><span><i class="fa fa-pencil color-light"></i></span></a>
                                                                <a href="javascript:void()" class="badge badge-danger sweet-confirm"><span><i class="fa fa-trash color-light"></i></span></a>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="card-body">

                                                            <p class="card-text">{{ $plan->desciption}}</p>
                                                            <a href="javascript:void()" class="btn btn-primary">Subscribe</a>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="card-text text-dark">{{ $plan->price }}</p>
                                                        </div>

                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </section>
                                        <h4>Payment</h4>
                                        <section>
                                            <div class="row emial-setup">
                                                <div class="col-sm-3 col-6">
                                                    <div class="form-group">
                                                        <label for="mailclient11" class="mailclinet mailclinet-gmail">
                                                            <input type="radio" name="emailclient" id="mailclient11">
                                                            <span class="mail-icon">
                                                                <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                            </span>



                                                            <span class="mail-text">Google pay</span>
                                                        </label>
                                                        <div class="row mt-5 mb-5">
                                                            <div class="col-4"></div>
                                                            <div class="col-2">
                                                                <form action="/test" method="POST">
                                                                    @csrf
                                                                    <input type="hidden">
                                                                    <button type="submit" id="checkout-test-button" class="btn btn-primary">Checkout (Test)</button>
                                                                </form>
                                                            </div>

                                                            <div class="col-2">
                                                                <form action="/live" method="POST">
                                                                    @csrf
                                                                    <input type="hidden">
                                                                    <button type="submit" id="checkout-live-button" class="btn btn-success">Checkout (LIVE)</button>
                                                                </form>
                                                            </div>

                                                            <div class="col-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="form-group">
                                                        <label for="mailclient12" class="mailclinet mailclinet-office">
                                                            <input type="radio" name="emailclient" id="mailclient12">
                                                            <span class="mail-icon">
                                                                <i class="mdi mdi-office" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">Master card</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="form-group">
                                                        <label for="mailclient13" class="mailclinet mailclinet-drive">
                                                            <input type="radio" name="emailclient" id="mailclient13">
                                                            <span class="mail-icon">
                                                                <i class="mdi mdi-google-drive" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">Mobile wallet</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="form-group">
                                                        <label for="mailclient14" class="mailclinet mailclinet-another">
                                                            <input type="radio" name="emailclient" id="mailclient14">
                                                            <span class="mail-icon">
                                                                <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="mail-text">Another Service</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="skip-email text-center">
                                                        <p>Or if want skip payment you wont be able to access our services</p>
                                                        <a href="javascript:void()">Skip step</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @else

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Exercise </div>
                                    <div class="stat-digit"> Badmintoon</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Cardio</div>
                                    <div class="stat-digit">Jooging</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Max Cardio</div>
                                    <div class="stat-digit">Body Building</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Aquatic Cardio</div>
                                    <div class="stat-digit">Swimming</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <div class="row">

                    <div class="col-lg-8 col-sm-8 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Exercise Time</h4>
                            </div>
                            <div class="card-body">
                                <div id="morris_bar" class="morris_chart_height"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <div class="m-t-10">
                                    <h4 class="card-title">Wellness</h4>
                                    <h2 class="mt-3">18,293.23</h2>
                                    <small>Kcal Totally <span>+10%</span></small>
                                </div>
                                <div class="widget-card-circle mt-5 mb-5" id="info-circle-card">
                                    <i class="ti-control-shuffle pa"></i>
                                </div>
                                <ul class="widget-line-list m-b-15">
                                    <li class="border-right">62kg<br><span class="text-success"><i class="ti-hand-point-up"></i> Weight</span></li>
                                    <li>18% <br><span class="text-danger"><i class="ti-hand-point-down"></i>Fat Totally</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Yearly Transactions</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Plan</th>
                                                <th>Month</th>
                                                <th>Bank(a/c)</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="{{ asset('group/images/avatar/1.png') }}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>Premium</td>
                                                <td><span>January</span></td>
                                                <td><span>3953 07 245 3498</span></td>
                                                <td><span>500,000</span></td>
                                                <td><span class="badge badge-success">Payed</span></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="{{ asset('group/images/avatar/1.png') }}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>Premium</td>
                                                <td><span>January</span></td>
                                                <td><span>3953 07 245 3498</span></td>
                                                <td><span>500,000</span></td>
                                                <td><span class="badge badge-success">Payed</span></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="{{ asset('group/images/avatar/1.png') }}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>Premium</td>
                                                <td><span>January</span></td>
                                                <td><span>3953 07 245 3498</span></td>
                                                <td><span>500,000</span></td>
                                                <td><span class="badge badge-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="round-img">
                                                        <a href=""><img width="35" src="{{ asset('group/images/avatar/1.png') }}" alt=""></a>
                                                    </div>
                                                </td>
                                                <td>Basic</td>
                                                <td><span>May</span></td>
                                                <td><span>-</span></td>
                                                <td><span>500,000</span></td>
                                                <td><span class="badge badge-danger">Not payed</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Todo</h4>
                            </div>
                            <div class="card-body px-0">
                                <div class="todo-list">
                                    <div class="tdl-holder">
                                        <div class="tdl-content widget-todo mr-4">
                                            <ul id="todo_list">
                                                <li><label><input type="checkbox"><i></i><span>Get up</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox" checked><i></i><span>Do something
                                                            else</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox" checked><i></i><span>Stand up</span><a href='#' class="ti-trash"></a></label></li>
                                                <li><label><input type="checkbox"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class="ti-trash"></a></label></li>
                                            </ul>
                                        </div>
                                        <div class="px-4">
                                            <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @endif
            </div>
        </div>


        <!--Content body end-->


        @include('includes.auth.copyright')


    </div>
    <!--Main wrapper end-->

    <!--Scripts-->
    @include('includes.auth.footer')