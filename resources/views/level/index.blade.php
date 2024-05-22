@include('includes.auth.header')

<body>


    @include('includes.auth.preloader')


    <!--Main wrapper start-->
    <div id="main-wrapper">
        @include('includes.auth.head')

        @if(Auth::user()->is_active == 1)
        @include('includes.auth.sidebar')
        @endif

        <!--Content body start-->

    </div>
    <!--Content body end-->

    </div>
    </div>
    <!--Main wrapper end-->


    <!--Scripts-->
    @include('includes.auth.footer')