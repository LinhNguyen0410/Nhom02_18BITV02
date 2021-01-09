@extends('layouts.front-end.master')
@section('content')
<div class="fullwidthbanner-container" >
	<div class="fullwidthbanner" >
		<div class="bannercontainer">
			<div class="banner">

				<ul>
					@foreach($slide as $sl)
					<!-- THE FIRST SLIDE -->
					<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
							<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="image/slide/{{$sl->image}}" data-src="image/slide/{{$sl->image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
							</div>
						</div>

					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="tp-bannertimer"></div>
	</div>
</div>
<!--slider-->
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>Sản Phẩm Mới</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm Thấy {{count($new_products)}} Sản Phẩm Mới Nhất</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							<!-- in 4 sản phẩm mới nhất -->
							@foreach($new_products as $key => $value)
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="/chi-tiet/{{$value->id}}"><img src="image/product/{{$value->image}}" alt=""height="240px"  style="padding-top: 10px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"style="font-size: 18px;">{{$value->name}}</p>
										<p class="single-item-price" style="font-size: 12px;">
											<!-- nếu sp có gia km khác 0 thì in ra 2 giá,còn giá km bằng 0 thì k in -->
											@if($value->promotion_price != 0 )
											<span class="flash-del">{{number_format($value->unit_price)}}VND
											</span>
											<span class="flash-sale">{{number_format($value->promotion_price)}} VND
											</span>
											@else
											<span>{{number_format($value->unit_price)}}VND
											</span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="/them-vao-gio/{{$value->id}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="/chi-tiet/{{$value->id}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>	
							@endforeach
							<!-- phương thức phân trang -->
							<div class="row">{{$new_products->links()}}</div>			
						</div>


					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Sản Phẩm Khuyến Mãi</h4>
						<div class="beta-products-details">
							<!-- <p class="pull-left">Tìm Thấy {{count($new_products)}} Sản Phẩm Khuyến Mãi</p> -->
							<div class="clearfix"></div>
						</div>
						<div class="row">
							<!-- in 8 san pham khuyen mai -->
							@foreach($sanpham_km as $key => $value)
							<div class="col-sm-3">
								<div class="single-item">
									<div class="single-item-header">
										<a href="/chi-tiet/{{$value->id}}"><img src="image/product/{{$value->image}}" alt=""height="240px" style="padding-top: 10px"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"style="font-size: 18px;">{{$value->name}}</p>
										<p class="single-item-price"style="font-size: 12px;">
											<span class="flash-del">{{number_format($value->unit_price)}}VND
											</span>
											<span class="flash-sale">{{number_format($value->promotion_price)}} VND
											</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="/them-vao-gio/{{$value->id}}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="/chi-tiet/{{$value->id}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach	
						</div>
						<div class="row">{{$sanpham_km->links()}}</div>

					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div>
@endsection