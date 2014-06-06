@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
	<h3>
		@if($status == 'baru')
			Tambah Portofolio Website
		@else
			Edit Portofolio Website
		@endif
	</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">
	<div class="widget box">
		<div class="widget-header">
			<h4><i class="icon-reorder"></i> Data Portofolio Website</h4>
		</div>
		<div class="widget-content">
			<form class="form-horizontal row-border" enctype="multipart/form-data" method="POST" action="{{URL::to('panel/portofolio/save')}}">
				<input type="hidden" name="id" value="{{$id}}">
				<input type="hidden" name="status" value="{{$status}}">
				<div class="form-group">
					<label class="col-md-2 control-label">Judul Portofolio :</label>
					<div class="col-md-10">
						<input type="text" name="judul" value="{{$judul}}" required="" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Image Portofolio :</label>
					<div class="col-md-10">
						<input type="file" name="img_porto" 
						@if($status == 'baru')
							{{'required=""'}}
						@endif
						 class="form-control">
						<p> * Kosongkan Jika Tidak Di Ubah </p>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Deskripsi Portofolio :</label>
					<div class="col-md-10">
					<textarea name="deskripsi" class="ckeditor">{{$deskripsi}}</textarea>
					</div>
				</div>


				<div class="form-group">
					<label class="col-md-2 control-label">Status Portofolio :</label>
					<div class="col-md-10">
						<select name="status_porto" class="form-control">
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