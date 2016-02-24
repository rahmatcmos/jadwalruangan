<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Penjadwalan Ruangan Sistem Komputer</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab' >
    <link rel="stylesheet" href="{{ url('plugins/bootstrap-clockpicker/bootstrap-clockpicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <img src="{{ url('images/untan-logo.png')}}" alt="">
            <h3>Aplikasi Penjadwalan Ruangan</h3>
            <h1>Prodi Sistem Komputer UNTAN</h1>
        </div>
    </header>
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>


    <script type="text/javascript" src="{{ url('js/jquery-1.11.3.min.js') }}"></script>
    @yield('script')
</body>
</html>