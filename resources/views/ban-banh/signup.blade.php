@extends('layouts.front-end.master')
@section('content')
<!--form login-->
<div id="content">

	<form action="\dang-ki" method="POST" class="beta-form-checkout">
		<!-- thêm token n ms chiu chạy  -->
		<input type="hidden" name="token" value="{{csrf_token()}}">
		@csrf
		<div class="row">
			<div class="col-sm-3"></div>
			<!-- error lon hon 0,tuc la co loi ms in ra thong bao -->
			@if(count($errors)>0)
			@foreach($errors->all() as $error)
			<div class="alert alert-danger">
				{{$error}}
				<!-- <div class="error">{{$error}}</div> -->

			</div>
			@endforeach
			@endif

			@if(Session::has('thanhcong'))
			<div class="alert alert-success">
				{{Session::get('thanhcong')}} <a href="/dang-nhap" style="font-weight: bolder;color: blue">Đăng nhập ngay.</a>
			</div>
			@endif
			<div class="col-sm-6">
				<h4>Đăng kí</h4>
				<div class="space20">&nbsp;</div>


				<div class="form-block">
					<label for="email"> Email <span style="color: red">*</span></label>
					<input type="email" id="email" name="email" required>
				</div>

				<div class="form-block">
					<label for="your_last_name">Họ Và Tên<span style="color: red">*</span></label>
					<input type="text" id="your_last_name" name="full_name" required>
				</div>

				<div class="form-block">
					<label for="adress">Địa Chỉ<span style="color: red">*</span></label>
					<input type="text" id="adress" name="address" value="Street Address" required>
				</div>


				<div class="form-block">
					<label for="phone">Số Điện Thoại<span style="color: red">*</span></label>
					<input type="text" id="phone" name="phone" required>
				</div>
				<div class="form-block">
					<label for="phone">Mật Khẩu<span style="color: red">*</span></label>
					<input type="password" id="phone" name="password" required>
				</div>
				<div class="form-block">
					<label for="phone">Nhập Lại Mật Khẩu<span style="color: red">*</span></label>
					<input type="password" id="phone" name="re_password" required>
				</div>
				<div class="form-block">
					<button type="submit" class="btn btn-primary">Đăng Ký</button>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</form>
</div> <!-- #content -->
@endsection