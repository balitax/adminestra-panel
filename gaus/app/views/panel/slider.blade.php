@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
	<h3>Slider Website</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">

	<a href="{{URL::to('panel/slider/add')}}" class="btn btn-primary">Tambah Slider Baru</a>
	<br />
	<br />
	@if(Session::has('sukses'))
		{{Session::get('sukses')}}
	@endif
	<div class="widget box">
		<div class="widget-header">
			<h4><i class="icon-reorder"></i> Slider Website Anda</h4>
		</div>

		<div class="widget-content no-padding">
			<table class="table table-striped table-bordered table-hover table-checkable datatable">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul Slider</th>
						<th>Image Slider</th>
						<th>Deskripsi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$no = 1;
				?>
				@foreach ($slider as $s)
					<tr>
						<td>{{$no++}}</td>
						<td>{{$s->nama_slider}}</td>
						<td>
							<img src="{{URL::to('file/images')}}/{{$s->image_slider}}" width="200" height="150" />
						</td>
						<td class="hidden-xs">{{$s->deskripsi}}</td>
						<td>
							<a href="{{URL::to('panel/slider/edit')}}/{{$s->id}}"><span class="label label-success">Edit</span></a>
							<a href="{{URL::to('panel/slider/del')}}/{{$s->id}}"><span class="label label-danger">Hapus</span></a>
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