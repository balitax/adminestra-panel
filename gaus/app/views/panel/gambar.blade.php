@extends('panel/header')
@section('content')
<div id="content">
<div class="container">
<!--=== Page Header ===-->
<div class="page-header">
<div class="page-title">
	<h3>Gambar Website</h3>
</div>
</div>
<div class="row">
<div class="col-md-12">
	<div class="widget box">
		<div class="widget-header">
			<h4><i class="icon-reorder"></i> Data Portofolio Website</h4>
		</div>
		<div class="widget-content">
			<form class="form-horizontal row-border" enctype="multipart/form-data" method="POST" action="{{URL::to('panel/gambar_webs/save')}}">

				@if(Session::has('sukses'))
					{{Session::get('sukses')}}
				@endif
				<input t
				
				<input type="hidden" name="id" value="{{$id}}" class="form-control">
				<div class="form-group">
					<label class="col-md-2 control-label">Logo Website:</label>
					<div class="col-md-10">
						<input type="file" name="logo_webs" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label"></label>
					<div class="col-md-10">
						<img src="{{URL::to('file/images')}}/{{$logo_webs}}" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label">Background Website:</label>
					<div class="col-md-10">
						<input type="file" name="bg_webs" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-2 control-label"></label>
					<div class="col-md-10">
						<img src="{{URL::to('file/images')}}/{{$bg_webs}}" />
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