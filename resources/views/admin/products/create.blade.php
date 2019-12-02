@extends('admin.home')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">New Product</h4>
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
            <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="col-md-3">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">ID (auto)</label>
                  <input type="text" class="form-control" disabled="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Product name</label>
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Product Type</label>
                      <select style="margin-left:100PX " name="id_type" class="form-control">
                        @foreach($type as $t)
                        <option value="{{$t->id}}">{{$t->name}}</option>
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
                      <input type="text" name="quantity" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Unit price</label>
                      <input type="text" name="unit_price" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Promotion price</label>
                      <input type="text" name="promotion_price" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Image</label>
                </div>
                <input type="file" name="image" style="margin-left:100px ">
              </div>
              <div class="col-md-9">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating">Decruption</label>
                  <textarea name="description" rows="5" class="form-control"></textarea>
                </div>
              </div>

              <button type="submit" class="btn btn-primary pull-right">Add new</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection