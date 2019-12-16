<header class="header1">
	<!-- Header desktop -->
	<div class="container-menu-header">
	

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
			<div class="aa-input-container" id="aa-input-container">
				<form method="post" action="{{route('search')}}">
					@csrf
					<input type='search' id="aa-search-input" class="aa-input-search"
						placeholder="Search with algolia..." name="search" autocomplete="off" />
					<svg class="aa-input-icon" viewBox="654 -372 1664 1664">
						<path
							d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
					</svg>
				</form>

			</div>
			<!-- Header Icon -->
			<div class="header-icons">
				<div class="dropdown show">
					<span class="btn  span1" href="#" role="button" id="dropdownMenuLink"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					</span>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						@if(Auth::check())
						<a class="dropdown-item" href="{{route('cntk')}}">Cập nhật tài khoản</a>
						<a class="dropdown-item"  href="{{route('doi_mk')}}">Đổi mật khẩu</a>
						<a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
						@else
						<li><a class="dropdown-item" href="{{route('login')}}">Đăng nhập</a></li>
						@endif
					</div>
				</div>
				<div class="header-wrapicon2">
					<img src="{{asset('client/images/icons/icon-header-02.png')}}"
						class="header-icon1 js-show-header-dropdown" alt="ICON">
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
								<a href="{{route('viewcart')}}"
									class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									View Cart
								</a>
							</div>

							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="{{route('dathang')}}"
									class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Check Out
								</a>
							</div>
						</div>
						@endif
					</div>
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
					<img src="{{asset('client/images/icons/icon-header-02.png')}}"
						class="header-icon1 js-show-header-dropdown" alt="ICON">
					<span class="header-icons-noti">
						{{-- @if(Session('cart')->totalQty>0){{Session('cart')->totalQty}}
						@else
						0
						@endif --}}
					</span>

					<!-- Header cart noti -->
					{{-- <div class="header-cart header-dropdown">
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
			</div> --}}
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