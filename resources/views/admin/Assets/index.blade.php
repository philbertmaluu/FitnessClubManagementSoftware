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
                   <h3>Assets and Transaction Management</h3>
                  </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                 <a data-toggle="modal" data-target="#basicModal" href="javascript:void()" class="badge badge-primary"><span class="text-light"><i class="fa fa-plus color-light"></i></span></a>
                </div>
            </div>
            {{-- welcome blade ends --}}
             @include('admin.layout.modal')
            {{-- widgets starts --}}
            <div class="row">
                {{-- widget 1 --}}
              <div class="col-lg-4 col-xl-3 col-xxl-3 col-sm-6">
                <div class="card">
                  <div class="stat-widget-one">
                    {{-- <div class="stat-icon dib"><i class="ti-dumpbell color-success border-success"></i></div> --}}
                    <div class="stat-content dib">
                      <div class="stat-text">TOTAL ASSETS</div>
                      <div class="stat-digit">1,012</div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- ends --}}
              {{-- widget 2 --}}
               <div class="col-lg-4 col-xl-3 col-xxl-3 col-sm-6">
                <div class="card">
                  <div class="stat-widget-one">
                    {{-- <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i></div> --}}
                    <div class="stat-content dib">
                      <div class="stat-text">TOTAL TRANSACTIONS</div>
                      <div class="stat-digit">961</div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- ends --}}
              {{-- widget 3 --}}
              <div class="col-lg-4 col-xl-3 col-xxl-3 col-sm-6">
                <div class="card">
                  <div class="stat-widget-one">
                    {{-- <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i></div> --}}
                    <div class="stat-content dib">
                      <div class="stat-text">COMPLETED ASSETS</div>
                      <div class="stat-digit">770</div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- ends --}}
              {{-- widget 4 --}}
              <div class="col-lg-4 col-xl-3 col-xxl-3 col-sm-6">
                <div class="card">
                  <div class="stat-widget-one">
                    {{-- <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div> --}}
                    <div class="stat-content dib">
                      <div class="stat-text">EXPIRED ASSETS</div>
                      <div class="stat-digit">2,781</div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- ends --}}
            </div>
             {{--total widget ends --}}
                @include('admin.layout.table')
              </div>
            </div>

              <!-- /content  body ends-->

            <!-- /# row -->




        <!--Content body end-->


        @include('includes.auth.copyright')


    </div>
    <!--Main wrapper end-->

    <!--Scripts-->
    @include('includes.auth.footer')
