@include('includes.auth.header')

<body>


    @include('includes.auth.preloader')


    <!--Main wrapper start-->
    <div id="main-wrapper">
        @include('includes.auth.head')


        @include('includes.auth.sidebar')

        <!--Content body start-->

        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            @auth
                            <h4>Hi, {{ Auth::user()->username }} welcome back!</h4>
                            @endauth
                            <p class="mb-0">Manage your workout activities</p>
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
                                                        <label class="text-label">Discription*</label>
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
            </div>
        </div>


        <!--Content body end-->


        @include('includes.auth.copyright')


    </div>
    <!--Main wrapper end-->

    <!--Scripts-->
    @include('includes.auth.footer')