@include('includes.auth.header')

<style>
    /* Chat containers */
    .container {
        border: 2px solid #dedede;
        background-color: #f1f1f1;
        border-radius: 5px;
        padding: 10px;
        margin: 10px 0;
    }

    /* Darker chat container */
    .darker {
        border-color: #ccc;
        background-color: #ddd;
    }

    /* Clear floats */
    .container::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Style images */
    .container img {
        float: left;
        max-width: 60px;
        width: 100%;
        margin-right: 20px;
        border-radius: 50%;
    }

    /* Style the right image */
    .container img.right {
        float: right;
        margin-left: 20px;
        margin-right: 0;
    }

    /* Style time text */
    .time-right {
        float: right;
        color: #aaa;
    }

    /* Style time text */
    .time-left {
        float: left;
        color: #999;
    }
</style>

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
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Please reply on messeges you received</p>
                        </div>
                    </div>

                </div>
                <!-- row -->


                <div class="row">

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="compose-email">
                                    <div class="mail-box">

                                        <aside class="lg-side">
                                            <div class="inbox-head">
                                                <h3 class="input-text">Inbox</h3>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-inbox table-hover table-responsive">
                                                    <tbody>
                                                        <tr class="unread">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message  dont-show">PHPClass</td>
                                                            <td class="view-message ">Added a new class: Login Class Fast Site</td>
                                                            <td class="view-message  text-right">9:27 AM</td>
                                                        </tr>
                                                        <tr class="unread">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">Google Webmaster </td>
                                                            <td class="view-message">Improve the search presence of WebSite</td>

                                                            <td class="view-message text-right">March 15</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">JW Player</td>
                                                            <td class="view-message">Last Chance: Upgrade to Pro for </td>

                                                            <td class="view-message text-right">March 15</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">Tim Reid, S P N</td>
                                                            <td class="view-message">Boost Your Website Traffic</td>

                                                            <td class="view-message text-right">April 01</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
                                                            <td class="view-message dont-show">Freelancer.com <span class="badge badge-danger pull-right m-t-6">urgent</span></td>
                                                            <td class="view-message">Stop wasting your visitors </td>

                                                            <td class="view-message text-right">May 23</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
                                                            <td class="view-message dont-show">WOW Slider </td>
                                                            <td class="view-message">New WOW Slider v7.8 - 67% off</td>

                                                            <td class="view-message text-right">March 14</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
                                                            <td class="view-message dont-show">LinkedIn Pulse</td>
                                                            <td class="view-message">The One Sign Your Co-Worker Will Stab</td>

                                                            <td class="view-message text-right">Feb 19</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">Drupal Community<span class="badge badge-success pull-right m-t-6">megazine</span></td>
                                                            <td class="view-message view-message">Welcome to the Drupal Community</td>

                                                            <td class="view-message text-right">March 04</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">Facebook</td>
                                                            <td class="view-message view-message">Somebody requested a new password </td>

                                                            <td class="view-message text-right">June 13</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">Skype <span class="badge badge-info pull-right m-t-6">family</span></td>
                                                            <td class="view-message view-message">Password successfully changed</td>

                                                            <td class="view-message text-right">March 24</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
                                                            <td class="view-message dont-show">Google+</td>
                                                            <td class="view-message">alireza, do you know</td>

                                                            <td class="view-message text-right">March 09</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
                                                            <td class="dont-show">Zoosk </td>
                                                            <td class="view-message">7 new singles we think you'll like</td>

                                                            <td class="view-message text-right">May 14</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">LinkedIn </td>
                                                            <td class="view-message">Alireza: Nokia Networks, System Group and </td>

                                                            <td class="view-message text-right">February 25</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="dont-show">Facebook</td>
                                                            <td class="view-message view-message">Your account was recently logged into</td>

                                                            <td class="view-message text-right">March 14</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">Twitter</td>
                                                            <td class="view-message">Your Twitter password has been changed</td>

                                                            <td class="view-message text-right">April 07</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                                                            <td class="view-message">http://golddesigner.org/ Performance Report</td>

                                                            <td class="view-message text-right">July 14</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
                                                            <td class="view-message dont-show">AddMe.com</td>
                                                            <td class="view-message">Submit Your Website to the AddMe Business Directory</td>

                                                            <td class="view-message text-right">August 10</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">Terri Rexer, S P N</td>
                                                            <td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>

                                                            <td class="view-message text-right">April 14</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">Bertina </td>
                                                            <td class="view-message">IMPORTANT: Don't lose your domains!</td>

                                                            <td class="view-message text-right">June 16</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star inbox-started"></i></td>
                                                            <td class="view-message dont-show">Laura Gaffin, S P N </td>
                                                            <td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>

                                                            <td class="view-message text-right">August 10</td>
                                                        </tr>
                                                        <tr class="">

                                                            <td class="inbox-small-cells"><i class="ti-star"></i></td>
                                                            <td class="view-message dont-show">Facebook</td>
                                                            <td class="view-message view-message">john doe Login faild</td>

                                                            <td class="view-message text-right">feb 14</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <!-- <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div style="border: 1px solid grey; border-radius: 10px;" class="row p-2 m-1">sender</div>
                                    </div>



                                    <div class=" col-md-6">
                                        <div style="border: 1px solid grey; border-radius: 10px;" class="row p-2 m-1">receiver</div>
                                    </div>

                                </div>
                            </div>
                        </div> -->
                        <div class="container">
                            <img src="https://www.freeiconspng.com/img/1904">
                            <p>Hello. How are you today?</p>
                            <span class="time-right">11:00</span>
                        </div>

                        <div class="container darker">
                            <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">
                            <p>Hey! I'm fine. Thanks for asking!</p>
                            <span class="time-left">11:01</span>
                        </div>

                        <div class="container">
                            <img src="/w3images/bandmember.jpg" alt="Avatar">
                            <p>Sweet! So, what do you wanna do today?</p>
                            <span class="time-right">11:02</span>
                        </div>

                        <div class="container darker">
                            <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right">
                            <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                            <span class="time-left">11:05</span>
                        </div>

                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add New Event</strong></h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                        event</button>

                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add a category</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form>
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
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
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