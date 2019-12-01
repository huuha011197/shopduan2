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
                  <h4 class="card-title tb" >All Product</h4>
                  <a href="{{route('themproduct')}}" class="btn btn-sm btn-primary new" > New Product</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr>
                          <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Unitprice
                        </th>
                        <th>
                          image
                        </th>
                      </tr></thead>
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
                            {{$ca->unit_price}}
                          </td>
                          <td>
                            <img style="height: 200px;width: 200px" src="source/image/product/{{$ca->image}}">
                          </td>
                          <td>
                             <a href="{{route('suaproduct',$ca->id)}}">repair</a>
                            <a href="{{route('xoaproduct',$ca->id)}}">delete</a>
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