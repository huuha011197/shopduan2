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
							<li><a href="#tab-description">Chi tiết</a></li>
							<li><a href="#tab-reviews">Bình luận ({{count($sp->comments)}})</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$sp->description}}</p>
						</div>
						<div class="panel" id="tab-reviews">
							{{-- <p>No Reviews</p> --}}
							<div class="">
								<h5>Nội dung</h5>
								<div class="dropdown-content dis-none p-t-15 p-b-23" style="display: block;">
									<form action="{{Route('comment')}}" method="post">
										@csrf								
										<div class="form-group">
										   <textarea name="content" placeholder="Nhập nội dung bình luận"></textarea>
										   <input type="hidden" name="status" value="1">
										   <input type="hidden" name="product_id" value="{{$sp->id}}">
										</div>
										<button type="submit" class="btn btn-primary btn-small mb-3">Submit</button>
									</form>
									

									@foreach ($sp->comments as $comment)
										<div class="card mb-2">
											<div class="card-body">
												<div class="row">
													<div class="col-md-2">
														<img src="{{asset('source/image/user.png')}}" class="img img-rounded img-fluid">
														
													</div>
													<div class="col-md-6">
														<p>
															<a class="float-left" href=""><strong>{{$comment->user->name}}</strong></a>
														</p>
														<div class="clearfix"></div>
														<p>{{ $comment->content}}</p>
													</div>
													<div class="col-md-4">
														<p>{{ $comment->created_at}}</p>
													</div>
												</div>
											</div>
										</div>
									@endforeach

									
								</div>
							</div>
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