@extends('admin.home')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Repair Product {{$product->name}}</h4>
            <p class="card-category">
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
            </p>
          </div>
          <div class="card-body">
            <form method="post" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="col-md-3">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">ID</label>
                  <input type="text" value="{{$product->id}}" class="form-control" disabled="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Product name</label>
                      <input type="text" name="name" value="{{$product->name}}" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Product Type</label>
                      <select style="margin-left:100PX " name="id_type" class="form-control">
                        @foreach($type as $t)
                        @if($t->id==$product->id_type)
                        <option selected value="{{$t->id}}">{{$t->name}}</option>
                        @else
                        <option value="{{$t->id}}">{{$t->name}}</option>
                        @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Quantity</label>
                      <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Unit price</label>
                      <input type="text" name="unit_price" value="{{$product->unit_price}}" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Promotion price</label>
                      <input type="text" name="promotion_price" value="{{$product->promotion_price}}"
                        class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group bmd-form-group">
                  <img style="height: 200px;width: 200px" src="source/image/product/{{$product->image}}">
                  <br>
                  {{$product->image}}
                  <input type="" name="image2" value="{{$product->image}}" hidden="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-9">
                  <input type="file" name="image" style="margin-left:100px ">
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Decruption</label>
                  <textarea name="description" rows="5" class="form-control">"{{$product->description}}</textarea>
                </div>
              </div>

              <button type="submit" class="btn btn-primary pull-right">Update</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection