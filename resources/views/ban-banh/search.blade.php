@extends('layouts.front-end.master')
@section('content')
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>Tìm Kiếm</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm Thấy {{count($product)}} Sản Phẩm Theo Yêu Cầu.</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							<!-- in 4 sản phẩm mới nhất -->
							@foreach($product as $key => $value)
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
						</div>


					</div> 
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div>


@endsection
