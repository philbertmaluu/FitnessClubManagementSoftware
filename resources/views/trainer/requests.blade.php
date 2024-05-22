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

                <!-- row -->

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


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Activation Requests</h4>
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
                                            @foreach($inactiveTrainers as $trainers)
                                            <tr>

                                                <td>TER~013{{ $trainers->id}} </td>
                                                <td>{{ $trainers->trainer->username}}</td>
                                                <td>{{ $trainers->trainer->email}}</td>
                                                <td>{{ $trainers->text}}</td>
                                                <td>
                                                    @if( $trainers->trainer->is_active == -1 )
                                                    <span style="background-color: orange; padding: 5px; color: white; border-radius: 50%; display: inline-block;"></span>
                                                    pending
                                                    @elseif($trainers->trainer->is_active == 1)
                                                    <span style="background-color: blue; padding: 5px; color: white; border-radius: 50%; display: inline-block;"></span>
                                                    activated
                                                    @else
                                                    <span style="background-color: red; padding: 5px; color: white; border-radius: 50%; display: inline-block;"></span>
                                                    dectivated
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Activate</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{ route('activate', ['id' => $trainers->trainer->id]) }}">Accept</a>
                                                            <a class="dropdown-item" href="{{ route('cancel', ['id' => $trainers->trainer->id]) }}">Cancel</a>
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
        </div>


        <!--Content body end-->


        @include('includes.auth.copyright')


    </div>
    <!--Main wrapper end-->

    <!--Scripts-->
    @include('includes.auth.footer')