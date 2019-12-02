@extends('master')
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

							<div class="row">
								@foreach($items as $new)
								<div class="col-md-3 divbutton">
									<div class="single-item">
										@if($new->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('ctsp',$new->id)}}"><img height="250px" src="source//image/product/{{$new->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
												@if($new->promotion_price==0)
												<span class="flash-sale">{{number_format($new->unit_price) }} VND</span>
												@else
												<span class="flash-sale">{{number_format($new->promotion_price)}} VND</span>
												<span class="flash-del">{{number_format($new->unit_price)}} VND</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left button" href="{{route('themgiohang',$new->id)}}"><button class="btn btn-danger">Mua ngay</button></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
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