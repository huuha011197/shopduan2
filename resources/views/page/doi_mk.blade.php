@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đổi mật khẩu</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đổi mật khẩu</span>
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
               @if(Session::has('thongbao2'))
               <div class="alert alert-danger">{{Session::get('thongbao2')}}</div>
               @endif
			<form action="{{route('save_doi_mk')}}" method="post" class="beta-form-checkout">
				<div class="row">

					<div class="col-sm-12">
						@csrf
						<div class="space20">&nbsp;</div>
                        <div class="form-block">
							<label for="phone">Mật khẩu cũ*</label>
							<input type="password" id="phone"  name="old_password" >
						</div>
						<div class="form-block">
							<label for="phone">Mật khẩu*</label>
							<input type="password" id="phone"  name="password" >
						</div>
						<div class="form-block">
							<label for="phone">Nhập lại mật khẩu*</label>
							<input type="password" id="phone" name="re_password" >
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
						</div>
					</div>

				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection