@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
<h3>Artikel Website</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">

<a href="{{URL::to('panel/news/add')}}" class="btn btn-primary">Tambah Artikel</a>
<br />
<br />
@if(Session::has('sukses'))
{{Session::get('sukses')}}
@endif
<div class="widget box">
<div class="widget-header">
	<h4><i class="icon-reorder"></i> News and Events</h4>
</div>

<div class="widget-content no-padding">
	<table class="table table-striped table-bordered table-hover table-checkable datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul Artikel</th>
				<th>Tanggal</th>
				<th>Kategori</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$no = 1;
		?>
		@foreach ($news as $n)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$n->title}}</td>
				<td>{{$n->date}}</td>
				<td>{{$n->category}}</td>
				<td class="hidden-xs">{{$n->status}}</td>
				<td>
					<a href="{{URL::to('panel/news/edit')}}/{{$n->id}}"><span class="label label-success">Edit</span></a>
					<a href="{{URL::to('panel/news/del')}}/{{$n->id}}"><span class="label label-danger">Hapus</span></a>
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