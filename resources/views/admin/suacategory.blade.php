@extends('admin.home')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">New Category</h4>
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
                  <form method="post" action="{{route('updatecategory', $category->id)}}">
                    @csrf
                    @method('put')
                   
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
                          <label class="bmd-label-floating">Decruption</label>
                          <textarea  name="decription" rows="5"  class="form-control">{{$category->description}}</textarea>
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