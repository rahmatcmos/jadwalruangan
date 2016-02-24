@extends('layouts.app')

@section('content')
    <div class="col-md-4">
        <div class="box-ruang" id="siskom-1">
        </div>
    </div>
    <div class="col-md-4">
        <div class="box-ruang" id="siskom-2">
        </div>
    </div>
    <div class="col-md-4">
        <div class="box-ruang" id="siskom-3">
        </div>
    </div>
     <div class="col-md-4">
        <div class="box-ruang" id="laboratorium-a">
        </div>
    </div>
    <div class="col-md-4">
        <div class="box-ruang" id="laboratorium-b">
        </div>
    </div>
    <div class="col-md-4">
        <div class="box-ruang" id="workshop">
        </div>
    </div>
@endsection

@section('script')

<script type="text/javascript">

    function getJadwal() {
        $.get('/get-jadwal', function(data) {

           $.each(data, function(index, value) {
                if(value === null)
                {
                    $('#'+index).empty();
                    $('#'+index).append('<div class="box-empty"><div class="ruang-place">'+toTitleCase(index.replace('-', ' '))+'</div><div class="ruang-title">Tidak ada Jadwal</div></div>');
                } else {
                    $('#'+index).empty();
                    $('#'+index).append('<div class="box-hero"><div class="ruang-place">'+toTitleCase(index.replace('-', ' '))+'</div><div class="ruang-title">'+value.matakuliah+'</div></div><div class="ruang-caption"><span class="ruang-time">'+value.mulai.slice(0, -3)+' - '+value.selesai.slice(0, -3)+ ' WIB </span> <span class="ruang-lecture">'+value.dosen+'</span></div>')
                }
           });
        });
    }

    getJadwal();
    setInterval(getJadwal, 1000 * 60);

    function toTitleCase(str)
    {
        return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
    }
</script>

@endsection