@extends('admin.home')
@section('title')
	Bình luận
@endsection
@section('content')
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title tb">All Comments</h4>
                <a href="{{route('comment.create')}}" class="btn btn-sm btn-primary new"> New Comments</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>User Comment</th>
                        <th>Content</th>
                        <th>Created at</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($comments as $comment)
                      <tr>
                        <td>
                          {{$comment->id}}
                        </td>
                        <td>
                          {{$comment->product->name}}
                        </td>
                        <td>
                          {{$comment->user->name}}
                        </td>
                        <td>
                          {{$comment->content}}
                        </td>
                        <td style="">
                          {{$comment->created_at}}
                        </td>
                        <td>
                         
                          @if( $comment->status == 0)
                          <a href="{{route('comment.status1',$comment->id)}}" class="primary">Hidden
                          </a> 
                          @else
                          <a href="{{route('comment.status2',$comment->id)}}" class="primary">Actice
                          @endif
                        </td>
                       
                        <td>
                          <form method="POST" action="{{route('comment.destroy',$comment->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <input type="submit" class="btn btn-danger delete-user btn-sm" value="Delete comment">
                            </div>
                        </form>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection