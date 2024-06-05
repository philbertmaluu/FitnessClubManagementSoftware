<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">

                    @auth
                    <h4>Hi, {{ Auth::user()->username }}</h4>
                    @endauth
                    <p class="mb-0">Please review and adhere to follow your schedule</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Calerdar</a></li>
                        </ol> -->
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-intro-title">Calendar</h4>

                        <div class="">
                            <div id="external-events" class="my-3">
                                <p>Drag and drop your event or click in the calendar</p>
                                <ul>
                                    <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Begginer</button></li>
                                    <br>
                                    <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Amateur</button>
                                    <li>
                                        <br>
                                    <li><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#basicModal">Proffesional</button></li>
                                    <div class="external-event" data-class="bg-dark"><i class="fa fa-move"></i>Create New theme</div>
                                    <ul>
                            </div>

                            <!-- checkbox -->
                            <div class="checkbox checkbox-event pt-3 pb-5">
                                <input id="drop-remove" class="styled-checkbox" type="checkbox">
                                <label class="ml-2 mb-0" for="drop-remove">Remove After Drop</label>
                            </div>
                            <a href="javascript:void()" data-toggle="modal" data-target="#add-category" class="btn btn-primary btn-event w-100">
                                <span class="align-middle"><i class="ti-plus"></i></span> Create New
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar" class="app-fullcalendar"></div>
                    </div>
                </div>
            </div>
            <!-- BEGIN MODAL -->
            <!------------------------>
            <!---------Schedule activity begins--------->
            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <!--------modal content--->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add New Event</strong></h4>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success save-event waves-effect waves-light">Create
                                event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                        <!---------footer ends here-------->
                    </div>
                    <!-------- content ends here--------->
                </div>
                <!--------dialog ends-------------->
            </div>
            <!---------Schedule activity ends----------->
            <!------------------------------------------------------->
            <!-- Modal for Adding Schedule Category begins here -->
            <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add a category</strong></h4>
                        </div>
                        <!---------body of the schedule modal begins here-------->
                        <div class="modal-body">
                            @csrf
                            <form action="{{route('trainer.schedule.store')}}" method="POST">
                                <!--------row begins----------->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Location</label>
                                        <input class="form-control form-white" placeholder="venue" type="text" name="location">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Allocated trainer</label>
                                        {{-- <select class="js-select2 form-control" id="val-select2" name="trainer_id" style="width: 100%;" data-placeholder="Choose one..">
                                                @foreach ( $admins as $admin )
                                                <option value="{{ $admin->id}}">{{ $admin->username}}</option>
                                        @endforeach
                                        </select> --}}
                                    </div>

                                    <div class="col-md-12">
                                        <label class="control-label">Activity</label>
                                        <input class="form-control form-white" placeholder="event" type="text" name="Activity_id">
                                    </div>

                                    <div class="col-md-12">
                                        <label class="control-label">Description</label>
                                        <input class="form-control form-white" placeholder="description" type="text" name="description">
                                    </div>
                                </div>
                                <!-------row ends--------->
                            </form>
                        </div>
                        <!---------body of the schedule ends here---------->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!------modal ends here---------->
        </div>

    </div>
</div>