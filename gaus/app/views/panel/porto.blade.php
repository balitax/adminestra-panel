@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
<h3>Portofolio Website</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">

<a href="{{URL::to('panel/portofolio/add')}}" class="btn btn-primary">Tambah Portofolio</a>
<br />
<br />
@if(Session::has('sukses'))
{{Session::get('sukses')}}
@endif
<div class="widget box">
<div class="widget-header">
	<h4><i class="icon-reorder"></i> Portofolio</h4>
</div>

<div class="widget-content no-padding">
	<table class="table table-striped table-bordered table-hover table-checkable datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul Portofolio</th>
				<th>Tanggal</th>
				<th>Gambar Portofolio</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$no = 1;
		?>
		@foreach ($porto as $p)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$p->title}}</td>
				<td>{{$p->date}}</td>
				<td><img src="{{URL::to('file/images_portofolio')}}/{{$p->img_porto}}" width="100" height="100" /></td>
				<td class="hidden-xs">{{$p->status}}</td>
				<td>
					<a href="{{URL::to('panel/portofolio/edit')}}/{{$p->id}}"><span class="label label-success">Edit</span></a>
					<a href="{{URL::to('panel/portofolio/del')}}/{{$p->id}}"><span class="label label-danger">Hapus</span></a>
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