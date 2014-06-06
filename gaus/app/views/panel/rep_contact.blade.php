@extends('panel/header')
@section('content')
<div id="content">
	<div class="container">
		<!--=== Page Header ===-->
		<div class="page-header">
			<div class="page-title">
				<h3>Balas Pesan Dari <b>{{$nama}} </b></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="widget box">
					<div class="widget-header">
						<h4><i class="icon-reorder"></i> Data Pesan Masuk</h4>
					</div>
					<div class="widget-content">
						<form class="form-horizontal row-border">
							<div class="form-group">
								<label class="col-md-2 control-label">Nama :</label>
								<div class="col-md-10">
									<input type="text" name="nama" value="{{$nama}}" readonly="" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Email :</label>
								<div class="col-md-10">
									<input type="text" name="email" value="{{$email}}" readonly="" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Subjek :</label>
								<div class="col-md-10">
									<input type="text" name="subjek" value="{{$subjek}}" readonly="" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-2 control-label">Pesan :</label>
								<div class="col-md-10">
								<textarea name="pesan" readonly="" class="form-control">{{$pesan}}</textarea>
								</div>
							</div>


							<div class="form-group">
								<label class="col-md-2 control-label"></label>
								<div class="col-md-10">
									<input data-toggle="modal" data-target="#myModal" type="submit" value="Balas Pesan" class="btn btn-primary">
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

<!-- Modal Replay -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Balas Pesan Kepada <b>{{$email}} </b></h4>
      </div>
      <div class="modal-body">
			<div class="widget-content">
				<form class="form-horizontal row-border" method="POST" action="{{URL::to('panel/contact-me/save')}}">

					<div class="form-group">	
						<label class="col-md-2 control-label">Subjek :</label>
						<div class="col-md-10">
							<input type="hidden" name="email_rep" value="{{$email}}" class="form-control">
							<input type="text" name="subjek_rep" placeholder="Isikan Subjek Email" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Pesan :</label>
						<div class="col-md-10">
						<textarea name="pesan_rep" placeholder="Isikan Pesan Anda" class="form-control" style="height:300px"></textarea>
						</div>
					</div>


					<div class="form-group">
						<label class="col-md-2 control-label"></label>
						<div class="col-md-10">
							<input type="submit" value="Balas Pesan" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@stop