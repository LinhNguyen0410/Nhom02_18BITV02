@extends('layouts.admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
	    Type
	    <small>List</small>
	  </h1>
	  <ol class="breadcrumb">
	    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	    <li class="active">Type</li>
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
						<th>Mô tả</th>

					</tr>
				</thead>
				<tbody>
					@foreach($type as $k => $item)
					<tr>
						<td>{{($k + 1)}}</td>
						<td>{{$item->name}}</td>
						<td>{{$item->description}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>	
</div>
@endsection