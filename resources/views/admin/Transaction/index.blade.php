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
            <div class="row page-titles">
                <div class="col-sm-6 pd-md-0">
                  <div class="welcome-text">
                   <h3>Transaction Management</h3>
                  </div>
                </div>
                {{-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                 <a data-toggle="modal" data-target="#basicModal" href="javascript:void()" class="badge badge-primary"><span class="text-light"><i class="fa fa-plus color-light"></i></span></a>
                </div> --}}
            </div>
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table Bordered</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Trainee</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Subscription</th>
                                                <th>Level</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Kolor</td>
                                                <td><span class="badge badge-primary">Active</span>
                                                </td>
                                                <td>January 22</td>
                                                <td>premium</td>
                                                <td>Begginer</td>
                                                <td class="color-primary">$21.56</td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Orton</td>
                                                <td><span class="badge badge-success">Active</span>
                                                </td>
                                                <td>January 30</td>
                                                <td>premium</td>
                                                <td>Proffesional</td>
                                                <td class="color-success">$55.32</td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Rollins</td>
                                                <td><span class="badge badge-danger">Expired</span>
                                                </td>
                                                <td>January 25</td>
                                                <td>premium</td>
                                                <td>Intermediate</td>
                                                <td class="color-danger">$14.85</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
