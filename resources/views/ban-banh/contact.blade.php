@extends('layouts.front-end.master')
@section('content')
<div id="content" class="space-top-none">
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Liên Hệ với Chúng Tôi</h2>
					<div class="space20">&nbsp;</div>
					<p>Chuỗi cửa hàng Cake Bakery mới mở có tất cả những loại bánh đang được ưa chuộng như tiramisu, hạnh nhân phô mai, trà xanh đến sầu riêng yến mạch hay cả bánh chay. Bên cạnh đó, chuỗi cửa hàng bánh này còn phục vụ cả bánh kem sinh nhật, bánh lạnh và bánh nướng cho tất cả các nhu cầu hàng ngày của khách hàng.</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Họ và Tên">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Email">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Chủ Đề">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Nội Dung"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi Thông Tin <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông Tin</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa Chỉ</h6>
					<p>
						458/3F Nguyen Huu Tho <br> Phuong Tan Hung,Quan 7 <br>TP.Ho Chi Minh
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Đặt Hàng</h6>
					<p>
						Liên hệ với chúng tôi qua số điện thoại: <b>012273743</b> <br>
						<a href="mailto:biz@betadesign.com">Email :biz@betadesign.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Ứng tuyển</h6>
					<p>
						Chúng tôi luôn luôn chào đón bạn gia nhập vào gia đình Cake Bakery. <br>
						<a href="hr@betadesign.com">hr@betadesign.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
@endsection