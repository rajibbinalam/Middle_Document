<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$add_title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('admin.suburbs.insert')}}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">City Name</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <select class="form-control selectpicker" name="city_id">

                                    <option>Select City</option>
                                    @foreach($city as $row)
                                    <option value="{{$row->id}}">{{$row->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Sub Suburbs Name</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control" name="suburbs_name" value="" />
                            </div>
                        </div>
                        Seo Details
                        <hr>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Seo Title</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control" name="title" value="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Seo Description</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <textarea type="text" class="form-control" name="description" value=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Seo Keywords</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <textarea type="text" class="form-control" name="kewywords[]" value=""></textarea>
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