@extends('master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Sản phẩm {{$lsp ->name}}</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="index.html">Home</a> / <span>Sản phẩm {{$lsp ->name}}</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="aside-menu">
						@foreach($loai as $l)
						<li><a href="{{route('loai_san_pham',$l->id)}}">{{$l->name}}</a></li>
						@endforeach
					</ul>
				</div>
				<div class="col-sm-9">
					<div class="beta-products-list">
						<h4>New Products</h4>
						@foreach($sp_theo_loai as $new)
						<div class="col-md-4 divbutton">
							<div class="single-item">
								@if($new->promotion_price!=0)
								<div class="ribbon-wrapper">
									<div class="ribbon sale">Sale</div>
								</div>
								@endif
								<div class="single-item-header">
									<a href="{{route('ctsp',$new->id)}}"><img height="250px"
											src="source//image/product/{{$new->image}}" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$new->name}}</p>
									<p class="single-item-price">
										@if($new->promotion_price==0)
										<span class="flash-sale">{{number_format($new->unit_price) }} VND</span>
										@else
										<span class="flash-del">{{number_format($new->unit_price)}} VND</span>
										<span class="flash-sale">{{number_format($new->promotion_price)}} VND</span>
										@endif
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left button"
										href="{{route('themgiohang',$new->id)}}"><button class="btn btn-danger">Mua
											ngay</button></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<div class="row">
						<div class="col-sm-9">
							{{$sp_theo_loai->links()}}
						</div>
					</div>
				</div> <!-- .beta-products-list -->
			</div>
		</div> <!-- end section with sidebar and main content -->
	</div> <!-- .main-content -->
</div> <!-- #content -->
</div> <!-- .container -->
@endsection