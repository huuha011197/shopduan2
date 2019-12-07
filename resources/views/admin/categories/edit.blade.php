@extends('admin.home')
@section('title')
	Sửa danh mục
@endsection
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Category</h4>
                  <p class="card-category">
                  </p>
                </div>
                <div class="card-body">
                    @include('errors.errors')
                  <form method="post" action="{{route('category.update', $category->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                   
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">ID: {{$category->id}}</label>
                          <input type="text" class="form-control" value="" disabled="">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Category name</label>
                          <input type="text" name="name" value="{{$category->name}}" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-9">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Decription</label>
                          <textarea  name="description" rows="5"  class="form-control">{{$category->description}}</textarea>
                        </div>
                      </div>
                      <div class="col-md-9">
                          <div class="form-group bmd-form-group">
                            <img style="height: 200px;width: 200px" src="source/image/product/{{$category->image}}">
                            <br>
                            {{$category->image}}
                            <input type="" name="image2" value="{{$category->image}}" hidden="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-9">
                            <input type="file" name="image" style="margin-left:100px ">
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