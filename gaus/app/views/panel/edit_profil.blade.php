@extends('panel/header')
@section('content')
<div id="content">
	<div class="container">
		<!--=== Page Header ===-->
		<div class="page-header">
			<div class="page-title">
				<h3>Edit Profil</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="widget box">
					<div class="widget-header">
						<h4><i class="icon-reorder"></i> Perbarui Data Profil Anda</h4>
					</div>
					<div class="widget-content">
						<form class="form-horizontal row-border" method="POST" action="{{URL::to('panel/edit_profil/save')}}">
							@if(Session::has('sukses'))
								{{Session::get('sukses')}}
							@endif
							<input type="hidden" name="id" value="{{$id}}">
							<div class="form-group">
								<label class="col-md-2 control-label">Nama :</label>
								<div class="col-md-10">
									<input type="text" name="nama" value="{{$nama}}" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Username:</label>
								<div class="col-md-10">
									<input class="form-control" value="{{$username}}" type="text" name="username">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Password:</label>
								<div class="col-md-10">
									<input class="form-control" type="text" name="password">
									<p>* Kosongkan jika tidak di perbarui</p>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Email:</label>
								<div class="col-md-10">
									<input class="form-control" value="{{$email}}" type="text" name="email">
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