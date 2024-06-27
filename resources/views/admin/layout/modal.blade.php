<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">GYM ASSETS</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form action="{{route('asset.store')}}" method="POST">
                    @csrf
                 <div class="form-group col-md-6">
                    <label for="Gym equipment">Assetname</label>
                    <input type="text" id="assetname" class="form-control" name="assetname">


                   <div class="form-group row">
                        <label class="col-lg-12 col-form-label" for="trainer">Trainer</label>
                        <div class="col-lg-12">
                        <select class="js-select2 form-control" id="val-select2" name="user_id" style="width: 100%;" data-placeholder="Choose one..">
                            @foreach ( $admins as $admin )
                            <option value="{{ $admin->id}}">{{ $admin->username}}</option>
                            @endforeach
                        </select>
                    </div>
                        </label>
                  </div>
                  <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="1"
                             >Status
                        </label>
                  </div>
                  {{-- <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""
                             >Weight Machines
                        </label>
                  </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""
                             >Locker rooms
                        </label>
                  </div>
                  <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""
                             >Sauna and steam rooms
                        </label>
                  </div> --}}
                   </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>
