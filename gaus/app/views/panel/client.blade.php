@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
<h3>Association</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">

<a href="{{URL::to('panel/association/add')}}" class="btn btn-primary">Tambah Association</a>
<br />
<br />
@if(Session::has('sukses'))
{{Session::get('sukses')}}
@endif
<div class="widget box">
<div class="widget-header">
	<h4><i class="icon-reorder"></i> Association</h4>
</div>

<div class="widget-content no-padding">
	<table class="table table-striped table-bordered table-hover table-checkable datatable">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Perusahaan</th>
				<th>Gambar</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$no = 1;
		?>
		@foreach ($association as $a)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$a->nama_perusahaan}}</td>
				<td><img src="{{URL::to('file/img_assosiasi')}}/{{$a->image_perusahaan}}" width="100" height="100" /></td>
				<td>
					<a href="{{URL::to('panel/association/edit')}}/{{$a->id}}"><span class="label label-success">Edit</span></a>
					<a href="{{URL::to('panel/association/del')}}/{{$a->id}}"><span class="label label-danger">Hapus</span></a>
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