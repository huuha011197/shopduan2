@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title"><h2>{{$sp->name}}</h2></h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Home</a> / <span>{{$sp->name}}</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="source/image/product/{{$sp->image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$sp->name}}</p>
								<p class="single-item-price">
									@if($sp->promotion_price==0)
									<span class="flash-sale">{{number_format($sp->unit_price) }} VND</span>
									@else
									<span class="flash-del">{{number_format($sp->unit_price)}} VND</span>
									<span class="flash-sale">{{number_format($sp->promotion_price)}} VND</span>
									@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$sp->dicription}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								<select class="wc-select" name="color">
									<option>Số lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="{{route('themgiohang',$sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$sp->dicription}}</p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4><br>

						<div class="row">
							@foreach($sptt as $sp_tt)
							<div class="col-sm-4 divbutton">
								
								<div class="single-item">
								@if($sp_tt->promotion_price!=0)
								<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
								@endif
								<div class="single-item-header">
									<a href="{{route('ctsp',$sp_tt->id)}}"><img height="250px" src="source//image/product/{{$sp_tt->image}}" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$sp_tt->name}}</p>
									<p class="single-item-price">
										@if($sp_tt->promotion_price==0)
										<span class="flash-sale">{{number_format($sp_tt->unit_price) }} VND</span>
										@else
										<span class="flash-del">{{number_format($sp_tt->unit_price)}} VND</span>
										<span class="flash-sale">{{number_format($sp_tt->promotion_price)}} VND</span>
										@endif
									</p>
								</div>
								<div class="single-item-caption">
										<a class="add-to-cart pull-left button" href="{{route('themgiohang',$sp->id)}}"><button class="btn btn-danger">Mua ngay</button></a>
											<div class="clearfix"></div>
								</div>
							</div>
								
							</div>
							@endforeach
							</div>
						</div>
					</div> <!-- .beta-products-list -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection