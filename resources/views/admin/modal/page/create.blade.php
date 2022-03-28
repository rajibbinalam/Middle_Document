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
                    <form method="post" action="{{route('admin.category.insert')}}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label text-right col-lg-3 col-sm-12">Category Name</label>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <input type="text" class="form-control" name="cat_name" value="" />
                            </div>
                        </div>
                      
                    </form>
                </div>

            </div>
        </div>
    </div>