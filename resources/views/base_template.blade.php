<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
</head>
<body>
    <hr>
    <div class="container">
        @include('alert')
        <div class="card">
            @yield('container')
        </div>
    </div>
</body>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</html>