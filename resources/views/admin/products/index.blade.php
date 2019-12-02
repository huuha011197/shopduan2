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
                <h4 class="card-title tb">All Product</h4>
                <a href="{{route('product.create')}}" class="btn btn-sm btn-primary new"> New Product</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>image</th>
                        <th>Unitprice</th>
                        <th>Promotion_price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Create at</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($product as $ca)
                      <tr>
                        <td>
                          {{$ca->id}}
                        </td>
                        <td>
                          {{$ca->name}}
                        </td>
                        <td>
                          <img style="height: 100px;width: 100px" src="source/image/product/{{$ca->image}}">
                        </td>
                        <td>
                          {{$ca->unit_price}}
                        </td>
                        <td>
                          {{$ca->promotion_price}}
                        </td>
                        <td>
                          {{$ca->quantity}}
                        </td>
                        <td >
                          <p style="width: 500px;height: 200px; overflow-y: scroll;">{{$ca->description}}</p>
                        </td>
                        <td>
                          {{$ca->created_at}}
                        </td>
                        <td>
                          <a class="btn btn-primary btn-sm" href="{{route('product.edit',$ca->id)}}">Edit</a>
                          <form method="POST" action="{{route('product.destroy',$ca->id)}}">
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
                <div class="row">{{$product->links()}}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection