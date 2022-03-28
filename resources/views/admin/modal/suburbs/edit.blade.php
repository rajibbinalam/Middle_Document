<div class="modal fade" id="editModal{{$row->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">{{$add_title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{route('admin.suburbs.update',$row->id)}}">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">City
                                                Name</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <select class="form-control selectpicker" name="city_id">

                                                    <option>Select City</option>
                                                    @foreach($cityname as $ct)
                                                    <option value="{{$ct->id}}" @if($row->city_id == $ct->id) ?
                                                        selected="";@endif>{{$ct->city_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Sub Suburbs
                                                Name</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="suburbs_name"
                                                    value="{{$row->suburbs_name}}" />
                                            </div>
                                        </div>
                                        Seo Details
                                        <hr>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Seo
                                                Title</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="title"
                                                    value="{{$row->title}}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Seo
                                                Description</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <textarea type="text" class="form-control"
                                                    name="description">{{$row->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Seo
                                                Keywords</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <textarea type="text" class="form-control"
                                                    name="kewywords[]"> @foreach($js as $item) {{$item}} @endforeach</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary font-weight-bold">Save
                                                changes</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>