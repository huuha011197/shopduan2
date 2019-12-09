@extends('clients.layouts.master')
@section('title')
Liên hệ
@endsection
@section('content')
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{asset('client/images/anhd20.jpg')}});">
		<h2 class="l-text2 t-center">
			Liên hệ
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.946632284577!2d108.1518715143367!3d16.06825894373318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142192868ca4d4d%3A0x1166c4ac23be8418!2zOCBIw6AgVsSDbiBUw61uaCwgSG_DoCBLaMOhbmggTmFtLCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZyA1NTAwMDAsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1575875600672!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" action="{{route('postLienhe')}}" method="post">
						<h4 class="m-text26 p-b-36 p-t-15">
							Gửi tin nhắn của bạn cho chúng tôi
						</h4>
						@include('errors.errors')
						@csrf

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Họ và tên" value="{{ old('name') }}">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" name="email" type="email" placeholder="Email của bạn" value="{{ old('email') }}">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" name="subject" type="text" placeholder="Tiêu đề" value="{{ old('subject') }}">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Nội dung liên hệ">{{ old('message') }}</textarea>

						<div class="w-size25">
							<!-- Button -->
							<button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Gửi
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection