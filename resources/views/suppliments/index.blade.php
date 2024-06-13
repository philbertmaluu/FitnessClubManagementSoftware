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
                            @if(Auth::user()->role == 1 && Auth::user()->role == 3)
                            <h4>Create Meal plan</h4>
                            @else
                            @auth
                            <h4>Hi, {{ Auth::user()->username }} review proposed meals plans.</h4>
                            @endauth

                            @endif


                        </div>
                    </div>
                    @if(Auth::user()->role == 3)
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" href="javascript:void()"><span class="text-light"><i class="fa fa-plus color-light"></i></span></a>
                    </div>
                    @endif
                </div>
                <!------meal plan card---------->
                <div class="row">
                    @foreach($mealplans as $meals)
                    <div class="col-xl-2 col-xxl-4 col-lg-4 col-sm-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                <div>
                                    <h5 class="card-title mb-3">{{ $meals->suppliment }}</h5>
                                    <h6>350 calories / day</h6s>
                                </div>
                                <div class="card-title">
                                    @if(Auth::user()->role == 3)
                                    <a data-toggle="modal" data-target="#basicModal" href="javascript:void()" class="badge badge-warning"><span><i class="fa fa-pencil color-light"></i></span></a>
                                    <a href="javascript:void()" class="badge badge-danger sweet-confirm"><span><i class="fa fa-trash color-light"></i></span></a>
                                    @endif
                                </div>
                            </div>
                            <div class="m-2">
                                <img class="card-img-top img-fluid" src="{{ asset('group/images/card/2.png') }}" alt="Card image cap">
                            </div>
                            <div class="card-header">
                                <div>
                                    <p class="card-title"><span><small><a href="javascript:void()" class="badge badge-outline-light">{{ $meals->meals}}</a> meals</small></span></p>
                                </div>
                                <div>
                                    <p class="card-title"><span><small><a href="javascript:void()" class="badge badge-outline-light">{{ $meals->days}}</a> Days</small></span></p>
                                </div>
                                <div>
                                    <p class="card-title"><span><small><a href="javascript:void()" class="badge badge-outline-success">{{ $meals->level->name}}</a> </small></span></p>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    He lay on his armour-like back, and if he lifted his head a little
                                    He lay on his armour-like back, and if he lifted his head a little
                                    He lay on his armour-like back, and if he lifted his head a little
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void()" class="badge badge-rounded badge-outline-warning">Vitamin</a>
                                <a href="javascript:void()" class="badge badge-rounded badge-outline-warning">Carbohyrate</a>
                                <a href="javascript:void()" class="badge badge-rounded badge-outline-warning">Fats</a>
                                <a href="javascript:void()" class="badge badge-rounded badge-outline-warning">Protein</a>
                                <a href="javascript:void()" class="badge badge-rounded badge-outline-warning">Daily</a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!---------------meal plan ends here-------->
                <!---------meal plan form starts here---------->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create Meal Plan</h5>
                            </div>
                            <form action="{{ route('trainer.meals.store') }}" method="POST">
                                @csrf

                                <div class="modal-body">
                                    <div class="col-xl-8 col-xxl-12 col-lg-6 col-sm-12">

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Level</label>

                                                <select id="inputState" name="level" class="form-control">
                                                    <option selected>Choose Trainer level</option>
                                                    @foreach($levels as $level)
                                                    <option value="{{ $level->id }}">{{ $level->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Duration</label>
                                                <select id="inputState" name="duration" class="form-control">
                                                    <option selected>Choose trainee level</option>
                                                    <option value="Morning">Morning</option>
                                                    <option value="Efternoon">Afternoon</option>
                                                    <option value="Evening">Evening</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Quality</label>
                                                <select id="inputState" name="quality" class="form-control">
                                                    <option selected>Choose meal quality</option>
                                                    <option value="High">High</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Quantity</label>
                                                <input type="number" name="quality" class="form-control" placeholder="Meal quantity in grams">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Food</label>
                                                <select multiple name="food_ids[]" class="form-control">
                                                    <option disabled>Choose foods to be in meal</option>
                                                    @foreach($foods as $food)
                                                    <option value="{{ $food->id }}">{{ $food->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Days</label>
                                                <input type="number" name="days" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Meals</label>
                                                <input type="number" name="meals" class="form-control" placeholder="Password">
                                            </div>


                                            <div class="form-group col-md-4">
                                                <label>Meal Image</label>
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" name="mealimage" class="custom-file-input">
                                                        <label class="custom-file-label">Choose file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="4" id="comment"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-----------meal plan form ends here--------->

            </div>

        </div>











        <!--Content body end-->


        @include('includes.auth.copyright')


    </div>
    <!--Main wrapper end-->

    <!--Scripts-->
    @include('includes.auth.footer')