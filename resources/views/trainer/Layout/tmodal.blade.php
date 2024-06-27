<div class="modal fade" id="basicModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"></h5>
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
                                                <textarea type="text" class="form-control" id="val-description" name="description" placeholder="enter description" cols="40" rows="10"></textarea>
                                            </div>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                 </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
