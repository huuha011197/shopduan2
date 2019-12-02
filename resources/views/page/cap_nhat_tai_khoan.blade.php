@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Cập nhật tài khoản</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Cập nhật tài khoản</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="list-style-type: none">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               @if(Session::has('thongbao'))
               <div class="alert alert-success">{{Session::get('thongbao')}}</div>
               @endif
			<form action="{{route('save_cntk',$user->id)}}" method="post" class="beta-form-checkout">
				<div class="row">

					<div class="col-sm-12">
						@csrf
						<div class="space20">&nbsp;</div>
						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" value='{{$user->email}}' disabled >
						</div>
                        <div class="form-block">
							<input type="email" id="email" name="email" value='{{$user->email}}' hidden >
						</div>
						<div class="form-block">
							<label for="your_last_name">Họ tên*</label>
							<input type="text" id="your_last_name" name="name" value='{{$user->name}}' >
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ*</label>
							<input type="text" id="adress" name="address" value='{{$user->address}}' >
						</div>


						<div class="form-block">
							<label for="phone">Điện thoại*</label>
							<input type="text" id="phone" name="phone" value='{{$user->phone}}' >
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Cập nhật</button>
						</div>
					</div>

				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection