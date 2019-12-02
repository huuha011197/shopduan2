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
                <h4 class="card-title tb">All User</h4>
                <a href="{{route('user.create')}}" class="btn btn-sm btn-primary new"> New User</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                        <th>ID</th>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Phone </th>
                        <th>Address </th>
                        <th>Created at </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($user as $us)
                      <tr>
                        <td> {{$us->id}} </td>
                        <td> {{$us->name}}</td>
                        <td> {{$us->email}}</td>
                        <td> {{$us->phone}}</td>
                        <td> {{$us->address}}</td>
                        <td> {{$us->created_at}} </td>
                        <td>
                          <a class="btn btn-primary btn-sm" href="{{route('user.edit',$us->id)}}">Edit</a>
                          <form method="POST" action="{{route('user.destroy',$us->id)}}">
                            @csrf
                            @method('DELETE')
                            <div class="form-group">
                              <input type="submit" class="btn btn-danger btn-sm" value="Delete">
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