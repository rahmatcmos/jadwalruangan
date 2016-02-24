@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
	<div class="box-form">
		<form action="{{ url('/edit-jadwal') }}" method="POST" role="form">
			<a href="{{url('/dashboard')}}" class="link-back">Kembali</a>
			<legend>Tambah Jadwal</legend>
			<div class="form-group">
				<label for="">Mata Kuliah</label>
				<input type="text" class="form-control" name="matakuliah" value="{{$jadwal->matakuliah}}">
			</div>
			<div class="form-group">
				<label for="">Dosen</label>
				<input type="text" class="form-control" name="dosen" value="{{$jadwal->dosen}}">
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Hari</label>
						<select name="hari" id="input" class="form-control" required="required">
							<option @if($jadwal->hari == 'senin') selected @endif value="senin">Senin</option>
							<option @if($jadwal->hari == 'selasa') selected @endif value="selasa">Selasa</option>
							<option @if($jadwal->hari == 'rabu') selected @endif value="rabu">Rabu</option>
							<option @if($jadwal->hari == 'kamis') selected @endif value="kamis">Kamis</option>
							<option @if($jadwal->hari == "jum'at") selected @endif value="jum'at">Jum'at</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Ruangan</label>
						<select name="ruangan" id="input" class="form-control" required="required">
							<option @if($jadwal->ruangan == 'siskom-1') selected @endif value="siskom-1">Siskom 1</option>
							<option @if($jadwal->ruangan == 'siskom-2') selected @endif value="siskom-2">Siskom 2</option>
							<option @if($jadwal->ruangan == 'siskom-3') selected @endif value="siskom-3">Siskom 3</option>
							<option @if($jadwal->ruangan == 'laboratorium-a') selected @endif value="laboratorium-a">Laboratorium A</option>
							<option @if($jadwal->ruangan == 'laboratorium-b') selected @endif value="laboratorium-b">Laboratorium B</option>
							<option @if($jadwal->ruangan == 'workshop') selected @endif value="workshop">Workshop</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Mulai</label>
						<input type="text" class="form-control clockpicker" name="mulai" value="{{substr($jadwal->mulai, 0, -3)}}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Selesai</label>
						<input type="text" class="form-control clockpicker" name="selesai" value="{{substr($jadwal->selesai, 0, -3)}}">
					</div>
				</div>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="id" value="{{ $jadwal->id }}">
			<button type="submit" class="btn btn-add" style="float: none;">Submit</button>
		</form>
	</div>
</div>

@endsection

@section('script')

<script type="text/javascript" src="{{url('plugins/bootstrap-clockpicker/bootstrap-clockpicker.min.js')}}"></script>
<script type="text/javascript">
	$('.clockpicker').clockpicker({
		donetext: 'Done',
		placement: 'top',
	});
</script>

@endsection