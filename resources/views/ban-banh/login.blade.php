@extends('layouts.front-end.master')
@section('content')
<!--form login-->
<div id="content">		
	<form action="/dang-nhap" method="post" class="beta-form-checkout">
		<input type="hidden" name="token" value="{{csrf_token()}}">
		@csrf
		<div class="row">
			<div class="col-sm-3"></div>
			@if(Session::has('thongbao'))
			<div class="alert alert-{{Session::get('color')}}">{{Session::get('thongbao')}}
			</div>
			@endif
			<div class="col-sm-6">
				<h4>Đăng nhập</h4>
				<div class="space20">&nbsp;</div>

				
				<div class="form-block">
					<label for="email">Địa Chỉ Email*</label>
					<input type="email" id="email" name="email" required>
				</div>
				<div class="form-block">
					<label for="phone">Mật Khẩu*</label>
					<input type="password" id="phone" name="password" required>
				</div>
				<div class="form-block">
					<button type="submit" class="btn btn-primary">Đăng Nhập</button>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</form>
</div> <!-- #content -->
@endsection