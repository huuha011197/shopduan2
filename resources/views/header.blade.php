	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline2">

						@if(Auth::check())
						<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Auth::user()->name}}
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
							<li><a href="{{route('cntk')}}">Cập nhật tài khoản</a></li>
							<li><a href="{{route('doi_mk')}}">Đổi mật khẩu</a></li>
							<li><a href="#">Lịch sử đặt hàng</a></li>
							<li><a href="{{route('logout')}}">Đăng xuất</a></li>
							</ul>
						</li>
						@else
						<li><a href="{{route('login')}}">Đăng nhập</a></li>
						<!-- <li><a href="{{route('register')}}">Đăng kí</a></li> -->
						@endif
					</ul>
					
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.html" id="logo"><img src="source/assets/dest/images/logo-cake.jpg" width="200px" alt=""></a>
				</div>
					<div class="row">
						<div class="col-md-6" style="margin: 20px 50px;display: inline-block;height: 45px;line-height: 45px;background-color: #fff;border-radius: 3px;">
							<form class="example" method='post' action="{{route('search')}}">
							{{ csrf_field() }}
							  <input type="text" placeholder="Search.." name="search">
							  <button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div style="float: left;margin:15px 0 0 0 ">
							<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						@if(Session::has('cart'))
						<div class="cart">
							<div class="beta-select"><i style="font-size: 40px;color: black" class="fa fa-shopping-cart " ></i>
								@if(Session('cart')->totalQty>0){{Session('cart')->totalQty}}
								@else
								0
								@endif
									<i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								@foreach($product_cart as $product)
								<div class="cart-item">
										<a class="cart-item-delete" href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-times"></i></a>
									<div class="media">
										<a class="pull-left" href="#"><img src="source//image/product/{{$product['item']['image']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$product['item']['name']}}</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">{{$product['qty']}}*<span>{{number_format($product['item']['unit_price'])}}</span>
										</span>
										</div>
									</div>
								</div>
								@endforeach
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format(Session('cart')->totalPrice)}}</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
						@else
						<div class="cart">
							<div class="beta-select"><i style="font-size: 40px;color: black" class="fa fa-shopping-cart"></i>0</div>
							<i class="fa fa-chevron-down"></i></div>
						</div> 
						@endif
					</div>
				</div>
						</div>
					</div>
				
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style=" background-color: black; background-image: linear-gradient(0deg, white, black); ;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
						<li><a>Sản phẩm</a>
							<ul class="sub-menu">
								@foreach($loai_sp as $loai)
								<li><a href="{{route('loai_san_pham',$loai->id)}}">{{$loai->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
						<li><a href="{{route('lien_he')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->