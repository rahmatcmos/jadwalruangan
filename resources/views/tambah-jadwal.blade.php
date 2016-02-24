@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="box-form">
		<form action="" method="POST" role="form">
			<a href="{{url('/dashboard')}}" class="link-back">Kembali</a>
			<legend>Tambah Jadwal</legend>
			<div class="form-group">
				<label for="">Mata Kuliah</label>
				<input type="text" class="form-control" name="matakuliah" placeholder="Input Mata Kuliah">
			</div>
			<div class="form-group">
				<label for="">Dosen</label>
				<input type="text" class="form-control" name="dosen" placeholder="Nama Dosen">
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Hari</label>
						<select name="hari" id="input" class="form-control" required="required">
							<option value="senin">Senin</option>
							<option value="selasa">Selasa</option>
							<option value="rabu">Rabu</option>
							<option value="kamis">Kamis</option>
							<option value="jum'at">Jum'at</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Ruangan</label>
						<select name="ruangan" id="input" class="form-control" required="required">
							<option value="siskom-1">Siskom 1</option>
							<option value="siskom-2">Siskom 2</option>
							<option value="siskom-3">Siskom 3</option>
							<option value="laboratorium-a">Laboratorium A</option>
							<option value="laboratorium-b">Laboratorium B</option>
							<option value="workshop">Workshop</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Mulai</label>
						<input type="text" class="form-control clockpicker" name="mulai" placeholder="09:00">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Selesai</label>
						<input type="text" class="form-control clockpicker" name="selesai" placeholder="10:00">
					</div>
				</div>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<button type="submit" class="btn btn-add" style="float: none;">Submit</button>
		</form>
	</div>
</div>

@endsection

@section('script')

<script type="text/javascript" src="plugins/bootstrap-clockpicker/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
	$('.clockpicker').clockpicker({
		donetext: 'Done',
		placement: 'top',
	});
</script>

@endsection