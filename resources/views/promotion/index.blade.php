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
                <div class="row">

                    <div class="col-md-12">
                        <div class="card-1">
                            <div class="card-body">
                                <ul class="nav nav-pills justify-content-end mb-4">
                                    <li class=" nav-item">
                                        <a href="#navpills2-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Trainers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#navpills2-2" class="nav-link" data-toggle="tab" aria-expanded="false">Trainees</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#navpills2-3" class="nav-link" data-toggle="tab" aria-expanded="true">Admin</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="navpills2-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Trainers</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table id="example" class="display" style="min-width: 845px">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($promotionTrainers as $trainer)
                                                                    <tr>
                                                                        <td>TER~0034{{ $trainer->id }}</td>
                                                                        <td>{{ $trainer->username }}</td>
                                                                        <td>{{ $trainer->email }}</td>
                                                                        <td>
                                                                            <span style="background-color: orange; padding: 5px; color: white; border-radius: 50%; display: inline-block;"></span>
                                                                            un promoted
                                                                        </td>
                                                                        <td>
                                                                            <div class="btn-group" role="group">
                                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="ti-smile"></i></button>
                                                                                <div class="dropdown-menu">
                                                                                    <a class="dropdown-item" href="">Admin</a>
                                                                                    <a class="dropdown-item" href="">Trainer</a>
                                                                                    <a class="dropdown-item" href="">Trainee</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="navpills2-2" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Trainees</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table id="example" class="display" style="min-width: 845px">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Trainer</th>
                                                                        <th>Trainer Email</th>
                                                                        <th>Message</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="navpills2-3" class="tab-pane">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Admins</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table id="example" class="display" style="min-width: 845px">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Trainer</th>
                                                                        <th>Trainer Email</th>
                                                                        <th>Message</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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