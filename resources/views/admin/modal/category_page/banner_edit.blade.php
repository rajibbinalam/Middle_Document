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
                                    <form method="post" action="{{route('admin.category.banner.update',$row->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Banner Name</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="banner_name"
                                                    value="{{$row->banner_name}}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Banner Image</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="file" class="form-control" name="banner_1_image"
                                                    value="{{$row->banner_1_image}}" />
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Adsense Code</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                <input type="text" class="form-control" name="banner_1_link"
                                                    value="{{$row->banner_1_link}}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Key Words</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                            <textarea type="text" class="form-control" name="key_words[]" >   </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Paid from</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                            <input type="date" class="form-control" name="banner_1_upload"
                                                    value="{{$row->banner_1_upload}}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label text-right col-lg-3 col-sm-12">Paid Until</label>
                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                            <input type="date" class="form-control" name="banner_1_expired"
                                                    value="{{$row->banner_1_expired}}" />
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