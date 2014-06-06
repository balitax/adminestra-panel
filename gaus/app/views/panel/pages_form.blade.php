@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
	<h3>
		@if($status == 'baru')
			Tambah Halaman Website
		@else
			Edit Halaman Website
		@endif
	</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">
	<div class="widget box">
		<div class="widget-header">
			<h4><i class="icon-reorder"></i> Data Halaman Website</h4>
		</div>
		<div class="widget-content">
			<form class="form-horizontal row-border" enctype="multipart/form-data" method="POST" action="{{URL::to('panel/pages/save')}}">
				<input type="hidden" name="id_halaman" value="{{$id_halaman}}">
				<input type="hidden" name="status" value="{{$status}}">
				<div class="form-group">
					<label class="col-md-2 control-label">Judul Halaman :</label>
					<div class="col-md-10">
						<input type="text" name="judul_halaman" value="{{$judul_halaman}}" required="" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Konten Halaman :</label>
					<div class="col-md-10">
						<textarea name="konten_halaman" required="" class="ckeditor">{{$konten_halaman}}</textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Status :</label>
					<div class="col-md-10">
						<select name="status_hal" class="form-control">
							<option value="Y">Aktif</option>
							<option value="T">Tidak Aktif</option>
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