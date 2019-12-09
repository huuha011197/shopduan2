@extends('clients.layouts.master')
@section('title')
Giới thiệu
@endsection
@section('content')

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{asset('client/images/anhd20.jpg')}});">
	<h2 class="l-text2 t-center">
		Giới Thiệu
	</h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
	<div class="container">
		<div class="row">
			<div class="col-md-4 p-b-30">
				<div class="hov-img-zoom">
					<img src="{{asset('client/images/anhd1.jpg')}}" alt="IMG-ABOUT">
				</div>
			</div>

			<div class="col-md-8 p-b-30">
				<h3 class="m-text26 p-t-15 p-b-16">
					Lịch sử và Giá trị Thương hiệu mang lại
				</h3>

				<p class="p-b-28">
					Được thành lập tại Seoul – Hàn Quốc năm 2001. Với những gì đã đạt được, Julius đã trở thành một thương hiệu lớn mang tầm quốc tế năm 2015. 
				</p>

				<div class="bo13 p-l-29 m-l-9 p-b-10">
					<p class="p-b-11">
						Trải qua quá trình 17 năm phát triển, Julius được phái đẹp chào đón nhiệt liệt chào đón khi xuất hiện  từ những ngày đầu tiên như Hàn Quốc sau đó lan tỏa và đăng ký hiệp hội Marid quốc tế trên 30 nước trên thế giới như America, Canada, Mexico, Iran, Vietnam, India, Philippines, Thai Lan, Trung Quốc. etc. 
						Năm 2012, Julius được vinh danh với giải thưởng có thiết kế đẹp nhất năm 2012 tại hội chợ đồng hồ Hong Kong. 
					</p>
					<p>Julius được sản xuất khép kín từ khâu thiết kế tại Hàn Quốc, nhập khẩu máy của Nhật đến lắp ráp tại Trung Quốc. Tạo nên một mức giá phân khúc phổ thông phù hợp và cạnh tranh nhất. Xây dựng nên một “đế chế” vững mạnh trong lòng giới trẻ yêu thời trang. </p>
					<p>Julius thương hiệu Hàn quốc, công nghệ Nhật Bản với máy toàn bộ khung máy đồng hồ được nhật nhập khẩu 100% từ Citizen. Thiết kế tại Korea bởi chuyên gia thời trang hàng đầu Hàn Quốc, tiêu chuẩn quốc tế, lắp ráp tại Trung Quốc, bảo hành quốc tế và chế độ hậu mãi tốt nhất.</p>
					<span class="s-text7">
						
					</span>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection