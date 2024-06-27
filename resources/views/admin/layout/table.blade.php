<div class="col-lg-12">
    {{-- <div class="row justify-content-center"> --}}
        {{-- <div class="col-md-4 custom-right"> --}}

            <div class="card">
        <div class="card-header">
            <h4 class="card-title">Lists of Assets</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Asset</th>
                            <th scope="col">Trainer </th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assets as $asset )
                                                <tr>
                            <td>{{$asset->assetname}}</td>
                            <td>{{$asset->user_id}}
                             </td>
                            <td>{{$asset->created_at}}</td>
                            @if ($asset->status == 1)
                              <td><span class="badge badge-primary">ON USE</span>
                            @elseif ($asset->status == 0)
                            <span class="badge badge danger">EXPIRED</span>
                            </td>
                            @endif

                            <td>
                                <span>
                                    <a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i
                                            class="fa fa-pencil color-muted"></i> </a>
                                    <a href="javascript:void()" data-toggle="tooltip"
                                        data-placement="top" title="Close"><i
                                            class="fa fa-trash color-danger"></i></a>
                                </span>
                            </td>
                        </tr>
                        @endforeach



                        {{-- <tr>
                            <td>Exercise bicycles</td>
                            <td>

                            </td>
                            <td>May 27,2018</td>
                            <td><span class="badge badge-success">ON USE</span>
                            </td>
                            <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i
                                            class="fa fa-pencil color-muted"></i> </a><a
                                        href="javascript:void()" data-toggle="tooltip"
                                        data-placement="top" title="Close"><i
                                            class="fa fa-trash color-danger"></i></a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Weight machines</td>

                            <td></td>

                            <td>May 18,2018</td>
                            <td><span class="badge badge-dark">ON USE</span>
                            </td>
                            <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i
                                            class="fa fa-pencil color-muted"></i> </a><a
                                        href="javascript:void()" data-toggle="tooltip"
                                        data-placement="top" title="Close"><i
                                            class="fa fa-trash color-danger"></i></a></span>
                            </td>
                        </tr>
                        <tr>
                            <td>Mat and Accessories</td>
                            <td>

                            </td>
                            <td>Mar 27,2018</td>
                            <td><span class="badge badge-danger">ON USE</span>
                            </td>
                            <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i
                                            class="fa fa-pencil color-muted"></i> </a><a
                                        href="javascript:void()" data-toggle="tooltip"
                                        data-placement="top" title="Close"><i
                                            class="fa fa-trash color-danger"></i></a></span>
                            </td>
                        </tr> --}}
                        {{-- <tr>
                            <td>Boats</td>
                            <td>

                            </td>
                            <td>Jun 28,2018</td>
                            <td><span class="badge badge-warning">TO BE PURCHASED</span>
                            </td>
                            <td><span><a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                        data-placement="top" title="Edit"><i
                                            class="fa fa-pencil color-muted"></i> </a><a
                                        href="javascript:void()" data-toggle="tooltip"
                                        data-placement="top" title="Close"><i
                                            class="fa fa-trash color-danger"></i></a></span>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

       {{-- </div> --}}
    {{-- </div> --}}

</div>
