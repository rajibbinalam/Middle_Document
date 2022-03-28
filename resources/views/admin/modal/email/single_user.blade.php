<div class="modal fade modal-user" id="exampleModalLong{{$row->id}}" data-backdrop="static"
                        tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-user" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Send Email</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <form method="post" action="{{route('admin.user.sendMail')}}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-left">Email address</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{$row->email}}">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Message</label>
                                            <textarea type="text" class="form-control summernote" id="kt_summernote_1"
                                                rows="20" cols="100" name="user_massage"></textarea>

                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary">send email</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>