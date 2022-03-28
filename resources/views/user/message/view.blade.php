@extends('layout.front.master')
@section('content')
<div id="mainBody">
  <div class="container">
    <div class="row">
      <!-- Sidebar ================================================== -->
      @include('user.user_sidebar')
      <!-- Sidebar end=============================================== -->
      <div class="spana9">
        <ul class="breadcrumb" style="background-color: #1a4bbb;color:white">
          <li><a href="{{url('/')}}" style="color:#26262600;">Home</a> /</li>
          <li>Message Inbox</li>
        </ul>
        <div class="span9">

          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="home">

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">User Name</th>
                    <th scope="col">Listing</th>
                    <th scope="col">Send</th>
                    <th scope="col">from</th>
                    <th scope="col">reply</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($message as $row)
                  @php
                  $adver = App\Models\Advertising::find($row->ad_id);
                  @endphp
                  <tr>
                    <th scope="row">{{$row->message}}</th>
                    <td>{{$adver->post_id}}</td>
                    <td>{{$row->created_at}} </td>
                    <td>{{$row->name}}</td>
                    <td><a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong{{$row->id}}">
                        Reply
                      </a></td>
                  </tr>
                  <div class="modal fade" id="exampleModalLong{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$row->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Message Reply</h5>
                          <button type="button" class="close messreply" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('user.reply.message')}}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="">User name</label>
                              <input type="text" name="name" class="form-control" value="{{$row->name}}">
                            </div>
                            <div class="form-group">
                              <label for="">User Email</label>
                              <input type="email" name="email" class="form-control" value="{{$row->email}}">
                            </div>
                            <div class="form-group">
                              <label for="">Message</label>
                              <textarea name="message" id="" cols="10" rows="4" style="width: 200px; height: 90px;">{{$row->message}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="">Reply Message</label>
                              <textarea name="reply_message" id="" cols="10" rows="4" style="width: 200px; height: 90px;"></textarea>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                          </form>
                        </div>

                      </div>
                    </div>
                  </div>
                  @endforeach
                </tbody>

              </table>

            </div>
          </div>

        </div>

      </div> <!-- row end -->

    </div> <!-- well end -->

  </div> <!-- span9 end -->

</div>
</div>
</div>

@endsection