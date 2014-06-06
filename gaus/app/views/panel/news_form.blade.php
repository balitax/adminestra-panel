@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
	<h3>
		@if($status == 'baru')
			Tambah Artikel Website
		@else
			Edit Artikel Website
		@endif
	</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">
	<div class="widget box">
		<div class="widget-header">
			<h4><i class="icon-reorder"></i> Data Artikel Website</h4>
		</div>
		<div class="widget-content">
			<form class="form-horizontal row-border" enctype="multipart/form-data" method="POST" action="{{URL::to('panel/news/save')}}">
				<input type="hidden" name="id" value="{{$id}}">
				<input type="hidden" name="status" value="{{$status}}">
				<div class="form-group">
					<label class="col-md-2 control-label">Judul Artikel :</label>
					<div class="col-md-10">
						<input type="text" name="judul" value="{{$judul}}" required="" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Image Header :</label>
					<div class="col-md-10">
						<input type="file" name="img_header" 
						@if($status == 'baru')
							{{'required=""'}}
						@endif
						 class="form-control">
						<p> * Kosongkan Jika Tidak Di Ubah </p>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Konten Artikel :</label>
					<div class="col-md-10">
					<textarea name="konten" class="ckeditor">{{$konten}}</textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Kategori Artikel :</label>
					<div class="col-md-10">
						<select name="kategori" class="form-control">
							<option value="news-events">News and Events</option>
							<option value="news">News</option>
							<option value="other">other</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Status Artikel :</label>
					<div class="col-md-10">
						<select name="status_news" class="form-control">
							<option value="Y">Aktif</option>
							<option value="T">Tidak</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label"></label>
					<div class="col-md-10">
						<input type="submit" value="Simpan Data" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
<!-- /.container -->

</div>
@stop