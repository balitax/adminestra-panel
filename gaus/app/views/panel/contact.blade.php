@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
<h3>Menu Website</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">

<a href="{{URL::to('panel/menu/add')}}" class="btn btn-primary">Tambah Menu</a>
<br />
<br />
@if(Session::has('sukses'))
{{Session::get('sukses')}}
@endif
<div class="widget box">
<div class="widget-header">
	<h4><i class="icon-reorder"></i> Menu Website</h4>
</div>

<div class="widget-content no-padding">
	<table class="table table-striped table-bordered table-hover table-checkable datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Subjek</th>
				<th>Pesan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$no = 1;
		?>
		@foreach ($contact as $c)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$c->nama}}</td>
				<td>{{$c->email}}</td>
				<td>{{$c->subjek}}</td>
				<td>{{$c->pesan}}</td>
				<td>
					<a href="{{URL::to('panel/contact-me/replay')}}/{{$c->id}}"><span class="label label-success">Balas</span></a>
					<a href="{{URL::to('panel/contact-me/del/'.$c->id)}}"><span class="label label-danger">Hapus</span></a>
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