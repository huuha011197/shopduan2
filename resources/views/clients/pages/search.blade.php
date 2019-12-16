@extends('clients.layouts.master')
@section('title')
Tìm kiếm
@endsection
@section('content')
<div class="fullwidthbanner-container">

	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Từ khóa tìm kiếm <b>"{{$keyword}}"</b></h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($items)}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>

							<div class="wrap-slick2">
								<div class="slick2">
									@foreach ($items as $item)
									<div class="item-slick2 p-l-15 p-r-15 slick-slide slick-active" data-slick-index="3"
										aria-hidden="false" tabindex="0" style="width: 300px;">
										<!-- Block2 -->
										<div class="block2">
											<div
												class="block2-img wrap-pic-w of-hidden pos-relative @if ($item->promotion_price != 0) block2-labelsale @else block2-labelnew @endif">
												<img src="{{asset('client/images/'. $item->image)}}" alt="IMG-PRODUCT">

												<div class="block2-overlay trans-0-4">
													<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4"
														tabindex="0">
														{{$item->view}}
													</a>

													<div class="block2-btn-addcart w-size1 trans-0-4">
														<!-- Button -->
														<a href="{{route('themgiohang', $item->id)}}">
															<button
																class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"
																tabindex="0">
																Add to Cart
															</button>
														</a>
													</div>
												</div>
											</div>

											<div class="block2-txt p-t-20">
												<a href="{{route('ctsp', $item->id)}}"
													class="block2-name dis-block s-text3 p-b-5" tabindex="0">
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
							<div class="row">{{$items->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>


					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection