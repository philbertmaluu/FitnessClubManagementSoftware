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
                            <h4>Plans</h4>
                            <span class="ml-1">Select a plan of your choice</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <a data-toggle="modal" data-target=".bd-example-modal-lg" href="javascript:void()" class="badge badge-primary"><span class="text-light"><i class="fa fa-plus color-light"></i></span></a>
                    </div>
                </div>
                <div class="row">

                    @foreach($plans as $plan)



                    <div class="col-xl-3 col-xxl-3 col-lg-4 col-sm-6">
                        <div class="card text-center">
                            <div class="card-header">
                                <h5 class="card-title">{{$plan->name}}</h5>
                                <div class="card-title">
                                    <a data-toggle="modal" data-target="#basicModal" href="javascript:void()" class="badge badge-warning"><span><i class="fa fa-pencil color-light"></i></span></a>
                                    <a href="javascript:void()" class="badge badge-danger sweet-confirm"><span><i class="fa fa-trash color-light"></i></span></a>
                                </div>
                            </div>
                            <div class="card-body d-flex justify-center align-center" style="margin-left: 3rem;">

                                <div class="ml-4">
                                    <p class="card-text">Price</p>
                                    <h1>{{ $plan->price }}</h1>
                                </div>
                                <!-- <a href="javascript:void()" class="btn btn-primary">hio</a> -->
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void()" class="badge badge-rounded badge-outline-warning">Anaerobic</a>
                                <a href="javascript:void()" class="badge badge-rounded badge-outline-info">Jogging</a>
                                <a href="javascript:void()" class="badge badge-rounded badge-outline-warning">Weight Lifting</a>
                            </div>
                            <form method="post" action="{{ route('profile.destroy') }}" class="p-6" id="delete-account-form">
                                @csrf
                                @method('delete')
                                <button type="submit" class="hidden" id="delete-account-btn"></button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    <!-------adding plan starts------>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Create Plan</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('pricing.plans.store') }}" method="POST">
                                    @csrf

                                    <div class="modal-body">

                                        <div class="card-body">
                                            <div class="basic-form">

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Plan name" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Price</label>
                                                        <input type="number" name="price" class="form-control" placeholder="Plan price" required>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label>Description</label>
                                                        <textarea name="descrioption" type="text" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group d-flex">
                                                    <div class="form-check mr-4">
                                                        <input class="form-check-input" name="weight_Lifting" type="checkbox">
                                                        <label class="form-check-label">
                                                            Weight Lifting
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" name="anaerobic" type="checkbox">
                                                        <label class="form-check-label">
                                                            Anaerobic
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-------adding plan ends------>
                    <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Plan</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('pricing.plans.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="modal-body">

                                        <div class="card-body">
                                            <div class="basic-form">

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Plan name" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Price</label>
                                                        <input type="number" name="price" class="form-control" placeholder="Plan price" required>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label>Description</label>
                                                        <textarea name="descrioption" type="text" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group d-flex">
                                                    <div class="form-check mr-4">
                                                        <input class="form-check-input" name="weight_Lifting" type="checkbox">
                                                        <label class="form-check-label">
                                                            Weight Lifting
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" name="anaerobic" type="checkbox">
                                                        <label class="form-check-label">
                                                            Anaerobic
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!------- plan starts------>

                </div>
            </div>
        </div>

        <!--Content body end-->


        @include('includes.auth.copyright')


    </div>
    <!--Main wrapper end-->

    <!--Scripts-->
    @include('includes.auth.footer')