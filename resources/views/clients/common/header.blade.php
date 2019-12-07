	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Free shipping for standard order over $100
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
							<option>EUR</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="{{Route('trang-chu')}}" class="logo">
					<img src="{{asset('client/images/icons/logo.png')}}" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li><a href="{{Route('trang-chu')}}">Trang chủ</a></li>
							<li><a href="{{Route('trang-chu')}}">Danh mục</a>
								<ul class="sub_menu">
									@foreach($loai_sp as $loai)
									<li><a href="{{route('loai_san_pham',$loai->id)}}">{{$loai->name}}</a></li>
									@endforeach
								</ul>
							</li>
							<li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
							<li><a href="{{route('lien_he')}}">Liên hệ</a></li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<img src="{{asset('client/images/icons/icon-header-01.png')}}" class="header-icon1 js-show-header-dropdown1" alt="ICON">
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="{{asset('client/images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						@if(Session::has('cart'))
						<span class="header-icons-noti">
							@if(Session('cart')->totalQty>0){{Session('cart')->totalQty}}
							@else
								0
							@endif
						</span>

						<!-- Header cart noti -->
						
						<div class="header-cart header-dropdown">
							@foreach($product_cart as $product)
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="{{asset('client/images/'.$product['item']['image'] )}}" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											{{$product['item']['name']}}
										</a>

										<span class="header-cart-item-info">
											{{$product['qty']}} * <span>{{number_format($product['item']['unit_price'])}}
										</span>
									</div>
								</li>
							</ul>
							@endforeach

							<div class="header-cart-total">
								Total: {{number_format(Session('cart')->totalPrice)}}
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('viewcart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('dathang')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
							@endif
						</div>

						<!-- Header cart noti -->
						@if(Auth::check())
						<div class="header-cart header-dropdown1">
							<u>
								<li><a href="{{route('cntk')}}">Cập nhật tài khoản</a></li>
								<li><a href="{{route('doi_mk')}}">Đổi mật khẩu</a></li>
								<li><a href="#">Lịch sử đặt hàng</a></li>
								<li><a href="{{route('logout')}}">Đăng xuất</a></li>
							</u>	
						</div>
						@else
						<li><a href="{{route('login')}}">Đăng nhập</a></li>
						@endif

					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="{{asset('client/images/icons/logo.png')}}" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="{{asset('client/images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="{{asset('client/images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">
								@if(Session('cart')->totalQty>0){{Session('cart')->totalQty}}
								@else
									0
								@endif
							</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							@foreach($product_cart as $product)
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
											<img src="{{asset('client/images/'.$product['item']['image'] )}}" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											{{$product['item']['name']}}
										</a>

										<span class="header-cart-item-info">
											{{$product['qty']}} * <span>{{number_format($product['item']['unit_price'])}}
										</span>
									</div>
								</li>
							</ul>
							@endforeach

							<div class="header-cart-total">
								Total: {{number_format(Session('cart')->totalPrice)}}
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('viewcart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('dathang')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Home</a>
						<ul class="sub-menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.html">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>