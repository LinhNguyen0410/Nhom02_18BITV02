@extends('layouts.admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
	    Customer
	    <small>List</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Customer</li>
	  </ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<table class="table table-responsive table-bordered table-stripped">
				<thead>
					<tr>
						<th>#</th>
						<th>Họ và Tên</th>
						<th>Giới Tính</th>
						<th>Email</th>
						<th> Địa Chỉ</th>
						<th>Số Điện Thoại</th>
						<th>Ghi Chú</th>
					</tr>
				</thead>
				<tbody>
					@foreach($customer as $k => $item)
					<tr>
						<td>{{($k + 1)}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->gender}}</td>
						<td>{{$item->email}}</td>
						<td>{{$item->address}}</td>
						<td>{{$item->phone_number}}</td>
						<td>{{$item->note}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>	
</div>
@endsection