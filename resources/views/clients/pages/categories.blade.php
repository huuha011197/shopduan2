@extends('clients.layouts.master')
@section('title')
    Shop
@endsection
@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
    <h2 class="l-text2 t-center">
        Women
    </h2>
    <p class="m-text13 t-center">
        New Arrivals Women Collection 2018
    </p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Danh mục sản phẩm
						</h4>
							<ul class="p-b-54">
								@foreach ($categories as $item)
									<li class="p-t-4">
										<a href="{{Route('loai_san_pham', $item->id)}}" class="s-text13 active1">
											{{ $item->name}}
										</a>
									</li>
								@endforeach
							</ul>
						
						<!--  -->
						<form action="{{route('search')}}" method="post">
							@csrf
							<div class="search-product pos-relative bo4 of-hidden">
								<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search" placeholder="Search Products...">

								<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
									<i class="fs-12 fa fa-search" aria-hidden="true"></i>
								</button>
							</div>
						</form>
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Default Sorting</option>
									<option>Popularity</option>
									<option>Price: low to high</option>
									<option>Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="sorting">
									<option>Price</option>
									<option>$0.00 - $50.00</option>
									<option>$50.00 - $100.00</option>
									<option>$100.00 - $150.00</option>
									<option>$150.00 - $200.00</option>
									<option>$200.00+</option>

								</select>
							</div>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					<!-- Product -->
					<div class="row">
						@foreach ($cate_products as $item)
							<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
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

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection