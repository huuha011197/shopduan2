@extends('admin.home')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Repair User</h4>
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
                  <form method="post" action="{{route('user.update',$user->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">ID</label>
                          <input type="text" class="form-control" value="{{$user->id}}" disabled="">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">User name</label>
                          <input type="text" name="name" value="{{$user->name}}" class="form-control" >
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" name="email"  value="{{$user->email}}"  class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Phone</label>
                          <input type="text" name="phone" value="{{$user->phone}}" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group bmd-form-group">
                          <div class="row">
                            <div class="col-md-1">
                              <label class="bmd-label-floating">Role</label>
                            </div>
                            <div class="col-md-4" >
                              <select name="vai_tro" class="form-control">
                                <option value="1" >Amin</option>
                                <option value="0">Customer</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row" hidden="">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" name="password" value="{{$user->password}}" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" name="address" value="{{$user->address}}" class="form-control">
                        </div>
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