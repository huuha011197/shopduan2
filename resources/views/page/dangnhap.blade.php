		@extends('master')
@section('content')
<script src="source/assets/dest/js/jqueri.js"></script>
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng nhập</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		
		<div class="w3_login">
			<h3>Đăng nhập & Đăng kí</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Đăng nhập</h2>
					<form action="{{route('getlogin')}}" method="post">
					@if(Session::has('flag'))
						<div class="alert alert-{{Session::get('flag')}}">{{Session::get('thongbao')}}</div>
						@endif
						@if ($errors->any())
		                    <div class="alert alert-danger">
		                        <ul>
		                            @foreach ($errors->all() as $error)
		                                <li style="list-style-type: none">{{ $error }}</li>
		                            @endforeach
		                        </ul>
		                    </div>
		                @endif
						@csrf
					  <input type="text" name="email" placeholder="email" >
					  <input type="password" name="password" placeholder="Password" >
					  <input type="submit" value="Login">
					</form>
				  </div>
				  <div class="form">
					<h2>Tạo tài khoản mới</h2>
					<form action="{{route('registernew')}}" method="post">
						@csrf
					  <input type="text" name="name" placeholder="Username">
					  <input type="password" name="password" placeholder="Password" >
					  <input type="password" name="re_password" placeholder="Re password" >
					  <input type="email" name="email" placeholder="Email Address" >
					  <input type="text" name="phone" placeholder="Phone Number" >
					  <input type="text" id="adress" name="address" placeholder="address" >
					  <input type="submit" value="Register">
					</form>
				  </div>
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
	</div> <!-- .container -->
		@endsection