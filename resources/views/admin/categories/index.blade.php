@extends('admin.home')
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
                <h4 class="card-title tb">All category</h4>
                <a href="{{route('category.create')}}" class="btn btn-sm btn-primary new"> New category</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Created at</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($category as $ca)
                      <tr>
                        <td>
                          {{$ca->id}}
                        </td>
                        <td>
                          {{$ca->name}}
                        </td>
                        <td>
                          <img style="height: 100px" src="source/image/product/{{$ca->image}}">
                        </td>
                        <td style="width: 60%;height: 100px;overflow-y: scroll;">
                          {{$ca->description}}
                        </td>
                        <td>
                          {{$ca->created_at}}
                        </td>
                        <td>
                          <a class="btn btn-primary btn-sm" href="{{route('category.edit',$ca->id)}}">Edit</a>
                          <form method="POST" action="{{route('category.destroy',$ca->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                                <input type="submit" class="btn btn-danger delete-user btn-sm" value="Delete user">
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