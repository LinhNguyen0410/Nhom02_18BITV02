@extends('layouts.front-end.master')
@section('content')
<div id="content">
	<div class="row">
		<div class="col-sm-9">
			<div class="row">
				<div class="col-sm-4">
					<img src="{{asset('/image/product/' . $product->image)}}" alt="">
				</div>
				<div class="col-sm-8">
					<div class="single-item-body">
						<p class="single-item-title" style="font-weight: bolder;font-size: 19px;text-transform: uppercase;">{{$product->name}}</p>
						<p class="single-item-price" style="font-size: 12px;">
							<!-- nếu sp có gia km khác 0 thì in ra 2 giá,còn giá km bằng 0 thì k in -->
							@if($product->promotion_price != 0 )
							<span class="flash-del">{{number_format($product->unit_price)}}VND
							</span>
							<span class="flash-sale">{{number_format($product->promotion_price)}} VND
							</span>
							@else
							<span>{{number_format($product->unit_price)}}VND
							</span>
							@endif
						</p>
					</div>

					<div class="clearfix"></div>
					<div class="space20">&nbsp;</div>

				<!-- 	<div class="single-item-desc">
						<p>{{$product->description}}</p>
					</div> -->
					<div class="space20">&nbsp;</div>

					<p>Lựa Chọn:</p>
					<div class="single-item-options">
				<!-- 		<select class="wc-select" name="size">
							<option>Size</option>
							<option value="XS">XS</option>
							<option value="S">S</option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="XL">XL</option>
						</select> -->
						<select class="wc-select" name="color">
							<option>Topping</option>
							<option value="Red">Jelly</option>
							<option value="Green">Fruit</option>
							<option value="Yellow">Chocolate</option>
							<option value="Black">Foam</option>
							<option value="White">Candle</option>
						</select>
						<select class="wc-select" name="color">
							<option>Số Lượng</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
						<a class="add-to-cart" href="/them-vao-gio/{{$product->id}}"><i class="fa fa-shopping-cart"></i></a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<div class="space40">&nbsp;</div>
			<div class="woocommerce-tabs">
				<ul class="tabs">
					<li><a href="#tab-description">Mô Tả</a></li>
					<li><a href="#tab-reviews">Đánh Giá (0)</a></li>
				</ul>

				<div class="panel" id="tab-description">
					<p>{{$product->description}}</p>
				</div>
				<div class="panel" id="tab-reviews">
					<p>Không có đánh giá nào cả.</p>
				</div>
			</div>
			<div class="space50">&nbsp;</div>
			<div class="beta-products-list">
				<h4>Sản Phẩm Liên Quan</h4>
				<div class="row">
					@foreach($sp_lienquan as $splq)
					<div class="col-sm-4">
						<div class="single-item">
							<div class="single-item-header">
								<a href="/chi-tiet/{{$splq -> id}}"><img src="{{asset('image/product/' . $splq->image)}}" alt="" height="250px" style="padding-top: 10px"></a>
							</div>
							<div class="single-item-body">
								<p class="single-item-title">{{$splq -> name}}</p>
								<p class="single-item-price" style="font-size: 12px;">
									@if($splq->promotion_price != 0 )
									<span class="flash-del">{{number_format($splq->unit_price)}}VND
									</span>
									<span class="flash-sale">{{number_format($splq->promotion_price)}} VND
									</span>
									@else
									<span>{{number_format($splq->unit_price)}}VND
									</span>
									@endif
								</p>
							</div>
							<div class="single-item-caption">
								<a class="add-to-cart pull-left" href="/them-vao-gio/{{$splq -> id}}"><i class="fa fa-shopping-cart"></i></a>
								<a class="beta-btn primary" href="/chi-tiet/{{$splq -> id}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					@endforeach
					<div class="row">{{$sp_lienquan->links()}}</div>	
				</div>
			</div> <!-- .beta-products-list -->
		</div>
		<div class="col-sm-3 aside">
			<div class="widget">
				<!-- new product -->
				<h3 class="widget-title">Sản Phẩm Mới</h3>
				<div class="widget-body">
					@foreach($new_pro_detail as $new_products)
					<div class="beta-sales beta-lists">
						<div class="media beta-sales-item">
							<a class="pull-left" href="/chi-tiet/{{$new_products->id}}">
								<img src="{{asset('image/product/' . $new_products->image)}}" alt=""></a>
								<div class="media-body">
									{{$new_products->name}}					
									<p class="single-item-price" style="font-size: 10px;">
										@if($new_products->promotion_price != 0 )
										<span class="flash-del">{{number_format($new_products->unit_price)}}VND
										</span>
										<span class="flash-sale">{{number_format($new_products->promotion_price)}} VND
										</span>
										@else
										<span>{{number_format($new_products->unit_price)}}VND
										</span>
										@endif
									</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div> 



				<div class="widget">
					<!-- best favorite widget -->
					<h3 class="widget-title">Sản Phẩm Yêu Thích</h3>
					<div class="widget-body">
						@foreach($favorite_product as $fav_pro)
						<div class="beta-sales beta-lists">
							<div class="media beta-sales-item">
								<a class="pull-left" href="/chi-tiet/{{$fav_pro->id}}"><img src="{{asset('image/product/' . $fav_pro->image)}}" alt=""></a>
								<div class="media-body">
									{{$fav_pro->name}}
									<p class="single-item-price" style="font-size: 12px;">
										<span class="flash-sale">{{number_format($fav_pro->unit_price)}}VND
										</span>
									</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div> 	<!-- best favorite widget -->
			</div>


		</div>
	</div> <!-- #content -->
	@endsection