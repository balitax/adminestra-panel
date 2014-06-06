@extends('panel/header')
@section('content')
<div id="content">
	<div class="container">
		<!--=== Page Header ===-->
		<div class="page-header">
			<div class="page-title">
				<h3>
					@if($status == 'baru')
						Tambah Menu Baru
					@else
						Edit Menu
					@endif
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="widget box">
					<div class="widget-header">
						<h4><i class="icon-reorder"></i> Data Menu Website</h4>
					</div>
					<div class="widget-content">
						<form class="form-horizontal row-border" method="POST" action="{{URL::to('panel/menu/save')}}">
							<input type="hidden" name="kode" value="{{$kode}}">
							<input type="hidden" name="status" value="{{$status}}">

							<div class="form-group">
								<label class="col-md-2 control-label">Nama Menu :</label>
								<div class="col-md-10">
									<input type="text" name="menu_name" value="{{$menu_name}}" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Parent Menu :</label>
								<div class="col-md-10">
									<select class="form-control" name="parent_id">
										<option value="0"> Root</option>
										@foreach ($menus as $m)
										<option value="{{$m->menu_id}}">{{$m->menu_name}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Tipe Menu :</label>
								<div class="col-md-10">
									<select class="form-control" name="view_type">
										<option value="1"> Url</option>
										<option value="2"> Page</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Menu URL :</label>
								<div class="col-md-10">
									<input type="text" placeholder="Kosongi atau Isikan Tanda # Bila Menu Utama" name="content_id" value="{{$content_id}}" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Status :</label>
								<div class="col-md-10">
									<input type="radio" required=""  name="status_menu" value="1" checked /> Publish &nbsp; &nbsp;
									<input type="radio" required=""  name="status_menu" value="0"  /> Draft
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