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
                        <a data-toggle="modal" data-target="#basicModal" href="javascript:void()" class="badge badge-primary"><span class="text-light"><i class="fa fa-plus color-light"></i></span></a>
                    </div>
                </div>

              <!------meal plan card---------->
            <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                <div class="card text-white bg-info">
                    <div class="card-header">
                        <h5 class="card-title text-white">Info card title</h5>
                    </div>
                    <div class="card-body mb-0">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="javascript:void()" class="btn btn-dark btn-card">Go
                            somewhere</a>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-white">
                        Last updateed 3 min ago
                    </div>
                </div>
            </div>
            <!---------------meal plan ends here-------->
           <!---------meal plan form starts here---------->

        <div class="modal fade" id="basicModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        
                    </div>
        <div class="modal-body">
            <div class="col-xl-8 col-xxl-12 col-lg-6 col-sm-12">
                <div class="form-validation">
                        <div class="form-group row">
                            <label class="form-label">Suppliment</label>
                            <input class="form-control" type="text" name="suppliment" placeholder="suppliment">
                        </div>
                        <div class="form-group row">
                            <label class="form-label">Foodname</label>
                            <input class="form-control" name="foodname" placeholder="foodname" type="text">
                        </div>
                    <div class="form-group row">
                            <label class="form-label">Foodimage</label>
                        <div class="input-group ">
                             <div class="custom-file">
                                <input class="custom-file-input" type="file"  name="foodimage">
                                   <label class="custom-file-label">Choose file</label>
                            </div>
                             <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                                </div>
                        </div>
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
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
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