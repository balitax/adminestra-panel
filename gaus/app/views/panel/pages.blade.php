@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
	<h3>Halaman Website</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">

	<a href="{{URL::to('panel/pages/add')}}" class="btn btn-primary">Tambah Halaman Baru</a>
	<br />
	<br />
	@if(Session::has('sukses'))
		{{Session::get('sukses')}}
	@endif
	<div class="widget box">
		<div class="widget-header">
			<h4><i class="icon-reorder"></i> Halaman Website Anda</h4>
		</div>

		<div class="widget-content no-padding">
			<table class="table table-striped table-bordered table-hover table-checkable datatable">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul Halaman</th>
						<th>Url Halaman</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$no = 1;
				?>
				@foreach ($pages as $p)
					<tr>
						<td>{{$no++}}</td>
						<td>{{$p->title}}</td>
						<td>
							<a target="_blank" href="{{URL::to('pages')}}/{{$p->slug_pages}}">
							{{$p->slug_pages}}
							</a>
						</td>
						<td class="hidden-xs">{{$p->status}}</td>
						<td>
							<a href="{{URL::to('panel/pages/edit')}}/{{$p->id}}"><span class="label label-success">Edit</span></a>
							<a href="{{URL::to('panel/pages/del')}}/{{$p->id}}"><span class="label label-danger">Hapus</span></a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
<!-- /.container -->

</div>
@stop