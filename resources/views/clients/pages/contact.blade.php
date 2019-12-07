@extends('clients.layouts.master')
@section('title')
Liên hệ
@endsection
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			{{-- <h6 class="inner-title">Contacts</h6> --}}
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="index.html">Home</a> / <span>Contacts</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="beta-map">

	<div class="abs-fullwidth beta-map wow flipInX"><iframe
			src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3678.0141923553406!2d89.551518!3d22.801938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff8ef7ea2b7%3A0x1f1e9fc1cf4bd626!2sPranon+Pvt.+Limited!5e0!3m2!1sen!2s!4v1407828576904"></iframe>
	</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">

		<div class="space50">&nbsp;</div>
		<div class="row">
			<div class="col-sm-8">
				<h2>Liên Hệ</h2>
				<div class="space20">&nbsp;</div>

				<div class="space20">&nbsp;</div>
				<div class="row">
					@include('errors.errors')
				</div>
				<form action="{{route('postLienhe')}}" method="post" class="contact-form">
					@csrf
					<div class="form-block">
						<input name="name" type="text" placeholder="Tên của bạn (required)" value="{{ old('name') }}">
					</div>
					<div class="form-block">
						<input name="email" type="email" placeholder="Email của bạn (required)"
							value="{{ old('email') }}">
					</div>
					<div class="form-block">
						<input name="subject" type="text" placeholder="Tiêu đề" value="{{ old('subject') }}">
					</div>
					<div class="form-block">
						<textarea name="message" placeholder="Nội dung">{{ old('message') }}</textarea>
					</div>
					<div class="form-block">
						<button type="submit" class="beta-btn primary">Send Message <i
								class="fa fa-chevron-right"></i></button>
					</div>
				</form>
			</div>
			<div class="col-sm-4">
				<h2>Thông tin liên lạc</h2>
				<div class="space20">&nbsp;</div>

				<h6 class="contact-title">Địa chỉ nhà</h6>
				<p>
					151 Âu cơ - Liên chiểu - Đà nẵng<br>
					<a href="">Email: khanhtnpd02435@fpt.edu.vn <br></a>
					Việt nam
				</p>
				<div class="space20">&nbsp;</div>
				<h6 class="contact-title">Liên hệ</h6>
				<p>
					Phone 1: 0354389539 <br>
					Phone 2: 0984762038 <br>

				</p>

			</div>
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection