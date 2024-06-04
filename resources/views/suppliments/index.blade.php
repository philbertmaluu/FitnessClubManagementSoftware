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
                            <h4>Create Meal plan</h4>

                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" href="javascript:void()"><span class="text-light"><i class="fa fa-plus color-light"></i></span></a>
                    </div>
                </div>

                <!------meal plan card---------->
                {{-- @foreach ($suppliments as $suppliment ) --}}
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="card">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                    </p>
                                </div>
                                <div class="card-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <!---------------meal plan ends here-------->
                    <!---------meal plan form starts here---------->

                    <div class="modal fade" id="basicModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                </div>
                                <form action="{{route('trainer.suppliments.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="modal-body">
                                        <div class="col-xl-8 col-xxl-12 col-lg-6 col-sm-12">

                                            <div class="form-validation">
                                                <div class="form-group row">
                                                    <label class="form-label">Suppliment</label>
                                                    <input class="form-control" type="text" name="suppliment" placeholder="suppliment">
                                                </div>

                                                <div class="form-group row">
                                                    <label class="form-label">Foodimage</label>
                                                    <div class="input-group ">
                                                        <div class="custom-file">
                                                            <input class="custom-file-input" type="file" name="foodimage" id="foodimage">
                                                            <label class="custom-file-label" for="foodimage">Choose file</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>
                                                    @if ($suppliments->$foodimage)
                                                    <div class="mt-2">
                                                        <img src="{{ foodimages('hajjir2/' . $supplement->foodimage) }}" alt="foodimage" class="img-thumbnail" style="max-height: 200px;">
                                                    </div>
                                                    @endif

                                                </div>
                                                <div class="form-group row">
                                                    <label class="form-label">Foodname</label>
                                                    <input class="form-control" name="foodname" placeholder="foodname" type="text">
                                                </div>

                                                <div class="form-group row">
                                                    <label class="form-label">Created_by</label>
                                                    <input class="form-control" type="text" name="created_by">
                                                </div>
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