@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
	<h3>Edit Identitas Website</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">
	<div class="widget box">
		<div class="widget-header">
			<h4><i class="icon-reorder"></i> Perbarui Identitas Website Anda</h4>
		</div>
		<div class="widget-content">
			<form class="form-horizontal row-border" method="POST" enctype="multipart/form-data" action="{{URL::to('panel/identitas_webs/save')}}">
				@if(Session::has('sukses'))
					{{Session::get('sukses')}}
				@endif
				<input type="hidden" name="id_identitas" value="{{$id_identitas}}">
				<div class="form-group">
					<label class="col-md-2 control-label">Nama Website :</label>
					<div class="col-md-10">
						<input type="text" name="nama_website" value="{{$nama_website}}" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Email :</label>
					<div class="col-md-10">
						<input class="form-control" value="{{$email}}" type="text" name="email">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Url Website :</label>
					<div class="col-md-10">
						<input class="form-control" value="{{$url_webs}}" type="text" name="url_webs">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Facebook :</label>
					<div class="col-md-10">
						<input class="form-control" value="{{$facebook}}" type="text" name="facebook">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Twitter :</label>
					<div class="col-md-10">
						<input class="form-control" value="{{$twitter}}" type="text" name="twitter">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Alamat :</label>
					<div class="col-md-10">
						<input class="form-control" value="{{$alamat}}" type="text" name="alamat">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Nomor Telepon :</label>
					<div class="col-md-10">
						<input class="form-control" value="{{$no_telp}}" type="text" name="no_telp">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Meta Deskripsi :</label>
					<div class="col-md-10">
						<textarea name="meta_deskripsi" class="form-control">{{$meta_deskripsi}}</textarea>
					</div>
				</div>


				<div class="form-group">
					<label class="col-md-2 control-label">Meta Keywod :</label>
					<div class="col-md-10">
						<textarea name="meta_keyword" class="form-control">{{$meta_keyword}}</textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Favicon :</label>
					<div class="col-md-10">
						<input type="file" name="favicon" class="form-control" >
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Favicon :</label>
					<div class="col-md-10">
						<img src="{{URL::to('')}}/{{$favicon}}">
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