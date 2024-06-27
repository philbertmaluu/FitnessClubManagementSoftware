@include('includes.auth.header')

<body>


    @include('includes.auth.preloader')


    <!--Main wrapper start-->
    <div id="main-wrapper">
        @include('includes.auth.head')

        @if (Auth::user()->is_active == 1)
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


                {{-- if authenticated user is not activated --}}
                 @if(Auth::user()->is_active == 0)
                {{-- <div class="content-body"> --}}
                {{-- <div class="container-fluid"> --}}
                <div class="row">
                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card text-center">
                            <div class="card-header">
                                <h5 class="card-title">Welcome MR Trainer</h5>
                            </div>
                            <div class="card-body">
                                @auth
                                <p class="card-text">Hello Mr {{Auth::user()->username}} , Please Contact the Administration for your Account Activation</p>

                                @endauth
                            </div>
                            <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Contact</button>
                           </div>
                        </div>

                        <!-- Modal -->
                @include('trainer.Layout.tmodal')
                 {{-- modal ends --}}
                    </div>
                </div>

                @else

                <div class="row">
                  @foreach($levels as $level)
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Exercise </div>
                                    <div class="stat-digit">{{ $level->name }}</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- content body --}}
                @include('trainer.Layout.tcontent')
             @endif
             </div>
           </div>



        <!--Content body end-->


        @include('includes.auth.copyright')


    </div>
    <!--Main wrapper end-->

    <!--Scripts-->
    @include('includes.auth.footer')
