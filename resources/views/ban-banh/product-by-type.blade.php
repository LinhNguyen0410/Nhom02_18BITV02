@extends('layouts.front-end.master')
@section('content')
<div class="container">
 <div id="content">
	<div class="main-content">
		<div class="space60">&nbsp;</div>
		<div class="row">
			<div class="col-sm-3">
				<ul class="aside-menu">
					@foreach($type as $item)
					<li><a href="/loai-san-pham/{{$item->id}}">{{$item->name}}</a></li>	
					@endforeach						
				</ul>
			</div>
			<div class="col-sm-9">
				<div class="beta-products-list">
					<h4 style="font-weight: bolder;">{{$get_nameType->name}}</h4>
					<div class="beta-products-details">
						<p class="pull-left">Tìm Thấy {{count($products)}} Sản Phẩm</p>
						<div class="clearfix"></div>
					</div>

					<div class="row">
						@foreach($products as $item)
						<div class="col-sm-4">
							<div class="single-item">
								<div class="single-item-header">
									<a href="/chi-tiet/{{$item->id}}"><img src="{{asset('image/product/' . $item->image)}}" alt="" height="240px" style="padding-top: 10px"></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title" style="font-size: 18px;">{{$item->name}}</p>
										<!-- nếu sp có gia km khác 0 thì in ra 2 giá,còn giá km bằng 0 thì k in -->
									<p class="single-item-price" style="font-size: 12px;">
										@if($item->promotion_price != 0 )
										<span class="flash-del">{{number_format($item->unit_price)}}VND
										</span>
										<span class="flash-sale">{{number_format($item->promotion_price)}} VND
										</span>
										@else
										<span>{{number_format($item->unit_price)}}VND
										</span>
										@endif
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="/them-vao-gio/{{$item->id}}"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" 
									href="/chi-tiet/{{$item->id}}">Chi Tiết <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						@endforeach						
					</div>
				</div> <!-- .beta-products-list -->

				<div class="space50">&nbsp;</div>
			</div>
		</div> <!-- end section with sidebar and main content -->


	</div> <!-- .main-content -->
</div> <!-- #content -->
</div>
@endsection