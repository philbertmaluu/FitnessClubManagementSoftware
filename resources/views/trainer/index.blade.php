@include('includes.auth.header')

<body>


    @include('includes.auth.preloader')


    <!--Main wrapper start-->
    <div id="main-wrapper">
        @include('includes.auth.head')




        <!--Content body start-->
<<<<<<< HEAD
    <div class="content-body">

<div class="container-fluid">
<div class="col-xl-8 col-xxl-12 col-lg-6 col-sm-12">
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Activation</h4>
        </div>
        <div class="card-body">

            <p class="card-text" style="color: black;font-size:100%"> Hello Mr Trainer <br> please Contact the administration for account activation  </p>
            <div class="bootstrap-modal">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Request</button>
                <!-- Modal -->
<div class="modal fade" id="basicModal">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">ACTIVATION</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
        </button>
    </div>

    
<form class="form-valide" action="{{ route('activation')}}" method="POST">
    @csrf
    <div class="modal-body">
            <div class="col-xl-8 col-xxl-12 col-lg-6 col-sm-12">
            <div class="form-validation">
            <div class="form-group row">
                <label class="col-lg-12 col-form-label" for="val-pas">To<span class="text-danger"></span></label>
            <div class="col-lg-12">
                <select class="js-select2 form-control" id="val-select2" name="receiver" style="width: 100%;" data-placeholder="Choose one..">
                     @foreach ( $admins as $admin )
                    <option value="{{ $admin->id}}">{{ $admin->username}}</option>
                    @endforeach
                    </select>
            </div>
         </div>
    
                <div class="form-group row">
                     <label class="col-lg-12" for="val-text">Description<span class="text-danger"></span></label>
                <div class="col-lg-12">
                    <textarea type="text" class="form-control" id="val-description" name="description" placeholder="enter description" cols="30" rows="10"></textarea>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">submit</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                </div>
            
            </div>   
        </div>
        
    </div>
    </form>
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
                
            
    

            {{-- modal body --}}

        <!--Content body end-->
 
    </div><!--Main wrapper end-->
=======




        <!--Content body end-->





    </div>
    <!--Main wrapper end-->
>>>>>>> 456ca52c7da472a2dcd94624ba0852765bdf12f8

    <!--Scripts-->
    @include('includes.auth.footer')