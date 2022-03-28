<div class="modal fade" id="editModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Staff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('admin.staff.update',$row->id)}}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Username</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="text" class="form-control" name="username"  value="{{$row->username}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Role</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control selectpicker" name="role_id">

                                <option>Select Role</option>
                                @foreach($staffrole as $staff)
                                <option value="{{$staff->id}}" @if($row->role_id == $staff->id) ? selected="" ; @endif>{{$staff->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Email</label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="email" class="form-control" name="email" value="{{$row->email}}" />
                        </div>
                    </div>
                  

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
