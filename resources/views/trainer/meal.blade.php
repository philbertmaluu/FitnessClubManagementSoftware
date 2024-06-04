@include('includes.auth.header')

<body>


    @include('includes.auth.preloader')


    <!--Main wrapper start-->
    < id="main-wrapper">
        @include('includes.auth.head')


        @include('includes.auth.sidebar')

        <!--Content body start-->

        <div class="content-body">
            <div class="container-fluid">

                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Create Meal plan</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <a data-toggle="modal" data-target="#basicModal" href="javascript:void()" class="badge badge-primary"><span class="text-light"><i class="fa fa-plus color-light"></i></span></a>
                    </div>
                </div>
                <!-------row begins------>
                <div class="row" @foreach($mealplans as $mealplan) <div class="col-xl-5 col-xxl-3 col-lg-4 col-sm-6">
                    <div class="d-flex flex-wrap">
                        <div class="card m-2" style="flex: 1 1 calc(33.333% - 1rem);">
                            <div class="card-header">
                                <h5 class="card-title">MEALS</h5>
                                <div class="card-title">
                                    <a data-toggle="modal" data-target="#basicModal" href="javascript:void()" class="badge badge-warning"><span><i class="fa fa-pencil color-light"></i></span></a>
                                    <a href="{{route('trainer.meal.destroy')}}" class="badge badge-danger sweet-confirm"><span><i class="fa fa-trash color-light"></i></span></a>
                                </div>
                            </div>
                            <!------------card body------------------------------------------------------------------>
                            <div class="card-body d-flex justify-center align-horizontal" style="margin-right: 5rem">
                                <div class="mr-3">
                                    <p class="card-text">Foodname</p>
                                    <h5>{{$mealplan->name}}</h5>
                                </div>
                                <div class="mr-3">
                                    <p class="card-text">Calories</p>
                                    <h5>{{$mealplan->calories}}</h5>
                                </div>
                                @if($mealplan->carbohydrate == 1)
                                <div class="mr-3">
                                    <p class="card-text">Carbohydrate</p>
                                    <h5>Yes</h5>
                                </div>
                                @endif

                                @if ($mealplan->protein == 1)
                                <div class="mr-3">
                                    <p class="card-text">Protein</p>
                                    <h5>Yes</h5>
                                </div>
                                @endif

                                @if ($mealplan->fats == 1)
                                <div class="mr-3">
                                    <p class="card-text">Fats</p>
                                    <h5>Yes</h5>
                                </div>
                                @endif

                                @if ($mealplan->vitamins == 1)
                                <div class="mr-3">
                                    <p class="card-text">Vitamins</p>
                                    <h5>Yes</h5>
                                </div>
                                @endif

                                @if ($mealplan->dairyproducts == 1)
                                <div class="mr-3">
                                    <p class="card-text">Dairyproducts</p>
                                    <h5>Yes</h5>
                                </div>
                                @endif

                                @if ($mealplan->fruits == 1)
                                <div class="mr-3">
                                    <p class="card-text">Fruits</p>
                                    <h5>Yes</h5>
                                </div>
                                @endif

                                @if ($mealplan->water == 1)
                                <div class="mr-3">
                                    <p class="card-text">Water</p>
                                    <h5>Yes</h5>
                                </div>
                                @endif
                            </div>
                            <!------------------card footer--------------------------->
                            <div class="card-footer">
                                <p class="card-text text-dark d-center">Created_at</p>
                                <p>{{$mealplan->created_at}}</p>
                                <form method="post" action="{{ route('trainer.meal.destroy') }}" class="p-6" id="delete-account-form">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="hidden" id="delete-account-btn"></button>
                                </form>

                            </div>
                        </div>
                    </div>


                    @endforeach
                </div>
            </div>
            <!---------row ends---->

            <div class="col-xl-8 col-lg-3 col-xl-3 col-xxl-3 mb-4">
                <!-- Modal -->
                <div class="modal fade" id="basicModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <!---------modal body------>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{route('trainer.meal.store')}}" method="POST">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="foodname">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Calories</label>
                                                    <input type="text" class="form-control" name="calories" placeholder="KCa">
                                                </div>
                                            </div>
                                            <!-----------------------------------------------------meals checkboxes------->
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="carbohydrate" value="1">Carbohydrate
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="protein" value="1">Protein
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline disabled">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="vitamins" value="1">Vitamins
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline disabled">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="fats" value="1">Fats
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline disabled">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="dairyproducts" value="1">Dairyproducts
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline disabled">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="fruits" value="1">Fruits
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline disabled">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="water" value="1">Water
                                                    </label>
                                                </div>

                                            </div>

                                            <!------------------------------------------------------------check box ends-------------------->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="Submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-----modal content ends here---->
            </div>
        </div>
        </div>



        <!--Content body end-->


        @include('includes.auth.copyright')


        </div>
        <!--Main wrapper end-->

        <!--Scripts-->
        @include('includes.auth.footer')