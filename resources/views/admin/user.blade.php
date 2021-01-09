@extends('layouts.admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
	    User
	    <small>List</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">User</li>
	  </ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<table class="table table-responsive table-bordered table-stripped">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Phone</th>
						<th> Address</th>
					</tr>
				</thead>
				<tbody>
					@foreach($user as $k => $item)
					<tr>
						<td>{{($k + 1)}}</td>
						<td>{{$item->full_name}}</td>
						<td>{{$item->email}}</td>
						<td>{{$item->password}}</td>
						<td>{{$item->phone}}</td>
						<td>{{$item->address}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>	
</div>
@endsection