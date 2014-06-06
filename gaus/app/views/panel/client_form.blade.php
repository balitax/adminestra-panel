@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
	<h3>
		@if($status == 'baru')
			Tambah Association Website
		@else
			Edit Association Website
		@endif
	</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">
	<div class="widget box">
		<div class="widget-header">
			<h4><i class="icon-reorder"></i> Data Association Website</h4>
		</div>
		<div class="widget-content">
			<form class="form-horizontal row-border" enctype="multipart/form-data" method="POST" action="{{URL::to('panel/association/save')}}">
				<input type="hidden" name="id" value="{{$id}}">
				<input type="hidden" name="status" value="{{$status}}">
				<div class="form-group">
					<label class="col-md-2 control-label">Nama Perusahaan :</label>
					<div class="col-md-10">
						<input type="text" name="nama_perusahaan" value="{{$nama_perusahaan}}" required="" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Image Perusahaan :</label>
					<div class="col-md-10">
						<input type="file" name="img_perusahaan" 
						@if($status == 'baru')
							{{'required=""'}}
						@endif
						 class="form-control">
						<p> * Kosongkan Jika Tidak Di Ubah </p>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Image Perusahaan :</label>
					<div class="col-md-10">
						@if($status == 'edit')
							<img src ="{{URL::to('file/img_assosiasi')}}/{{$image_perusahaan}}" />
						@endif
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