@extends('clients.layouts.master')
@section('title')
Home
@endsection
@section('content')
<!-- Slide1 -->
<section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                @foreach ($slides as $item)
                    <div class="item-slick1 item3-slick1" style="height: 300px; background-image: url({{asset('client/images/'. $item->image)}});">
                        <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                            <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
                                
                            </span>
    
                            <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                                    
                            </h2>
    
                            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                                <!-- Button -->
                                <a href="{{route('loai_san_pham', 1)}}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('client/images/banners/anhp1.jpg')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{Route('ctsp', 1)}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								ĐỒNG HỒ EPOS SWISS E-7000.701.20.98.25
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('client/images/banners/anhd4.jpg')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{Route('ctsp', 3)}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								ĐỒNG HỒ EPOS SWISS E-7000.701.22.16.26
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('client/images/banners/anhd5.jpg')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{Route('ctsp', 5)}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								ĐỒNG HỒ EPOS SWISS E-3390.156.22.20.32
							</a>
						</div>
					</div>
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('client/images/banners/anhd1.jpg')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{Route('ctsp', 8)}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								ĐỒNG HỒ ATLANTIC SWISS AT-60347.45.21
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="{{asset('client/images/banners/anhp2.jpg')}}" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="{{Route('ctsp', 10)}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								ĐỒNG HỒ ATLANTIC SWISS AT-62341.45.61
							</a>
						</div>
					</div>

					<!-- block2 -->
					<div class="block2 wrap-pic-w pos-relative m-b-30">
						<img src="{{asset('client/images/icons/bg-01.jpg')}}" alt="IMG">

						<div class="block2-content sizefull ab-t-l flex-col-c-m">
							<h4 class="m-text4 t-center w-size3 p-b-8">
								ĐĂNG KÝ VÀ NHẬN 20%
							</h4>

							<p class="t-center w-size4">
								Hãy là người đầu tiên biết về những tin tức thời trang mới nhất và nhận được những lời mời chào
							</p>

							<div class="w-size2 p-t-25">
								<!-- Button -->
								<a href="{{route('login')}}" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
									ĐĂNG KÝ 
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Sản phẩm mới
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach ($new_products as $item)
                <div class="item-slick2 p-l-15 p-r-15 slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                    tabindex="0" style="width: 300px;">
                    <!-- Block2 -->
                    <div class="block2">
                        <div
                            class="block2-img wrap-pic-w of-hidden pos-relative @if ($item->promotion_price != 0) block2-labelsale @else block2-labelnew @endif">
                            <img src="{{asset('client/images/'. $item->image)}}" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4" tabindex="0">
                                    {{$item->view}}
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <a href="{{route('themgiohang', $item->id)}}">
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"
                                            tabindex="0">
                                            Add to Cart
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="{{route('ctsp', $item->id)}}" class="block2-name dis-block s-text3 p-b-5"
                                tabindex="0">
                                {{ $item->name}}
                            </a>

                            @if ($item->promotion_price == 0)
                            <span class="block2-price m-text6 p-r-5">
                                {{ number_format($item->unit_price)}} đ
                            </span>
                            @else
                            <span class="block2-oldprice m-text7 p-r-5">
                                {{ number_format($item->unit_price)}} đ
                            </span>
                            <span class="block2-newprice m-text8 p-r-5">
                                {{ number_format($item->promotion_price)}} đ
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- Banner2 -->
<section class="banner2 bg5 p-t-55 p-b-55">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                <div class="hov-img-zoom pos-relative">
                    <img src="{{asset('client/images/banners/anhp4.jpg')}}" alt="IMG-BANNER">
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                <div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
                    <img src="{{asset('client/images/banners/anhp3.jpg')}}" alt="IMG-BANNER">

                    <div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
                        <div class="t-center">
                            <a href="product-detail.html" class="dis-block s-text3 p-b-5">
                                Gafas sol Hawkers one
                            </a>

                            <span class="block2-oldprice m-text7 p-r-5">
                                $29.50
                            </span>

                            <span class="block2-newprice m-text8">
                                $15.90
                            </span>
                        </div>

                        <div class="flex-c-m p-t-44 p-t-30-xl">
                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                <span class="m-text10 p-b-1 days">
                                    69
                                </span>

                                <span class="s-text5">
                                    days
                                </span>
                            </div>

                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                <span class="m-text10 p-b-1 hours">
                                    04
                                </span>

                                <span class="s-text5">
                                    hrs
                                </span>
                            </div>

                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                <span class="m-text10 p-b-1 minutes">
                                    32
                                </span>

                                <span class="s-text5">
                                    mins
                                </span>
                            </div>

                            <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                                <span class="m-text10 p-b-1 seconds">
                                    05
                                </span>

                                <span class="s-text5">
                                    secs
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sale Product -->
<section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Sản phẩm khuyến mãi
                </h3>
            </div>
    
            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    @foreach ($sale_products as $item)
                    <div class="item-slick2 p-l-15 p-r-15 slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                        tabindex="0" style="width: 300px;">
                        <!-- Block2 -->
                        <div class="block2">
                            <div
                                class="block2-img wrap-pic-w of-hidden pos-relative @if ($item->promotion_price != 0) block2-labelsale @else block2-labelnew @endif">
                                <img src="{{asset('client/images/'. $item->image)}}" alt="IMG-PRODUCT">
    
                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4" tabindex="0">
                                        {{$item->view}}
                                    </a>
    
                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        <a href="{{route('themgiohang', $item->id)}}">
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"
                                                tabindex="0">
                                                Add to Cart
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
    
                            <div class="block2-txt p-t-20">
                                <a href="{{route('ctsp', $item->id)}}" class="block2-name dis-block s-text3 p-b-5"
                                    tabindex="0">
                                    {{ $item->name}}
                                </a>
    
                                @if ($item->promotion_price == 0)
                                <span class="block2-price m-text6 p-r-5">
                                    {{ number_format($item->unit_price)}} đ
                                </span>
                                @else
                                <span class="block2-oldprice m-text7 p-r-5">
                                    {{ number_format($item->unit_price)}} đ
                                </span>
                                <span class="block2-newprice m-text8 p-r-5">
                                    {{ number_format($item->promotion_price)}} đ
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    
        </div>
    </section>

<!-- Shipping -->
<section class="shipping bgwhite p-t-62 p-b-46">
    <div class="flex-w p-l-15 p-r-15">
        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                Giao hàng miễn phí trên toàn Việt Nam
            </h4>
            <span class="s-text11 t-center">
                Bấm vào đây để biết thêm
            </span>
           
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
            <h4 class="m-text12 t-center">
                30 ngày trở lại
            </h4>

            <span class="s-text11 t-center">
                Đơn giản chỉ cần trả lại trong vòng 30 ngày để trao đổi.
            </span>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                Khai trương cửa hàng
            </h4>

            <span class="s-text11 t-center">
                Cửa hàng mở cửa từ thứ Hai đến Chủ nhật
            </span>
        </div>
    </div>
</section>

@endsection
