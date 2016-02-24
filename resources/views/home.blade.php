@extends('layouts.app')

@section('content')

<div class="box-day">
    <a href="?hari=senin" @if($hari == 'senin') class="day-active" @endif>Senin</a>
    <a href="?hari=selasa" @if($hari == 'selasa') class="day-active" @endif>Selasa</a>
    <!-- <span class="day-active">Rabu</span> -->
    <a href="?hari=rabu" @if($hari == 'rabu') class="day-active" @endif>Rabu</a>
    <a href="?hari=kamis" @if($hari == 'kamis') class="day-active" @endif>Kamis</a>
    <a href="?hari=jum'at" @if($hari == "jum'at") class="day-active" @endif>Jum'at</a>
    <!-- <a class="btn btn-add">Tambah Jadwal</button> -->
    <a href="{{ url('tambah-jadwal') }}" class="btn btn-add">Tambah Jadwal</a>
    <div class="row">
        <?php
            $hitung = count($jadwal);
            if($hitung == 0){
                echo "<h2>Jadwal tidak Ditemukan</h2>";
            }
        ?>
        @foreach($jadwal as $key=>$value)
        <div class="col-md-4">
            <div class="box-jadwal">
                <h3 class="jadwal-title">{{$value->matakuliah}}</h3>
                <p class="jadwal-lecture">{{$value->dosen}}</p>
                <p class="jadwal-time">{{substr($value->mulai, 0, -3) .' - '.substr($value->selesai,0,-3).' WIB'}}</p>
                <p class="jadwal-place">{{ucwords(str_replace('-', ' ', $value->ruangan))}}</p>
                <div class="box-action">
                    <a href="{{url('/hapus-jadwal/'.$value->id)}}" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                    <a href="{{url('/edit-jadwal/'.$value->id)}}" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
