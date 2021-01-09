		<style>
		.sub-menu{background: white !important;}
		.activee:hover {
			background-color: #3a5c83 !important;
		}
		.sub-menu :hover{
			background-color: #FE9A2E !important;
			font-size: 20px !important;
		}
	</style>
	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 458/3F Nguyen Huu Tho, Quận 7</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="\tai-khoan"><i class="fa fa-user"></i>Tài khoản</a></li>
						<!-- hàm Auth::check kt ngta dung dag nhap hay chua -->
						@if(Auth::check())
						<li><a href="\dang-nhap">Chao xìnnnn {{Auth::user()->full_name}}</a></li>

						<li><a href="\dang-xuat">Đăng Xuất</a></li>

						@else
						<li><a href="\dang-ki">Đăng kí</a></li>
						<li><a href="\dang-nhap">Đăng nhập</a></li>
						@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="\" id="logo"><img src="assets/dest/images/logo.png" width="100px" style="margin-top: -11px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" name="key" id="searchform" action="/tim-kiem">
							<input type="text" value="" name="key" id="s" placeholder="Nhập từ khóa..." />
							<button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						@if(Session::has('cart'))
						<div class="cart">
							<div class="beta-select">
								<i class="fa fa-shopping-cart"></i> 
								Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif) <i class="fa fa-chevron-down"></i></div>
								<div class="beta-dropdown cart-body">

									@foreach($product_cart as $pro_cart)
									<div class="cart-item">
										<div class="media">
											<a class="pull-left" href="#"><img src="image/product/{{$pro_cart['item']['image']}}" alt=""></a>

											<div class="media-body">
												<span class="cart-item-title">{{$pro_cart['item']['name']}}</span>
												
												<a href="/xoa-gio-hang/{{$pro_cart['item']['id']}}" style="position: absolute;right: 0px;color: red">Xóa</a>

												<span class="cart-item-amount">
													{{$pro_cart['qty']}}*
													<span>@if($pro_cart['item']['promotion_price']==0)
													{{number_format($pro_cart['item']['unit_price'])}} đồng
													 @else
												{{number_format($pro_cart['item']['promotion_price'])}} đồng @endif</span></span>
												</div>
											</div>
										</div>
										@endforeach
										<div class="cart-caption">
											<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">@if(Session::has('cart')){{number_format($totalPrice)}}@endif đồng</span>
											</div>
											<div class="clearfix"></div>
											<div class="center">
												<div class="space10">&nbsp;</div>
												<a href="/thanh-toan" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
											</div>
										</div>
									</div>
								</div> <!-- .cart -->
							</div>
						</div>
						@endif
						<div class="clearfix"></div>
					</div> <!-- .container -->
				</div> <!-- .header-body -->

				<div class="header-bottom" style="background-color: #FF8000;">
					<div class="container">
						<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
						<div class="visible-xs clearfix"></div>
						<nav class="main-menu">
							<ul class="l-inline ov">
								<li><a href="\"style="background-color: #ff8000" class="activee">Trang chủ</a></li>
								<li><a href="/loai-san-pham/1" style="background-color: #ff8000" class="activee">Sản phẩm</a>
									<ul class="sub-menu">
										@foreach($loai_sp as $loai)
										<li style="background-color: white">
											<a href="/loai-san-pham/{{$loai->id}}"style="background-color: white;
											color:black !important">{{$loai->name}}
										</a></li>
										@endforeach
									</ul>
								</li>
								<li><a href="/gioi-thieu">Giới thiệu</a></li>
								<li><a href="/lien-he">Liên hệ</a></li>
							</ul>
							<div class="clearfix"></div>
						</nav>
					</div> <!-- .container -->
				</div> <!-- .header-bottom -->
	</div> <!-- #header -->