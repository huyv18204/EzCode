<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{route('/assets/css/admin.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>
@include('layouts.sidebar')
<section id="content">
    @include('layouts.navbar')
    @yield('content')
</section>
</body>
@if(isset($_SESSION['success']))
    <script>
        swal("Thao tác thành công", "", "success").then(function () {
            location.reload();
        });
    </script>
    @php
        unset($_SESSION['success']);

    @endphp
@elseif(isset($_SESSION['error']))
    <script>
        swal("Thao tác thất bại", "", "error").then(function () {
            location.reload();
        });
    </script>
    @php
        unset($_SESSION['error']);

    @endphp
@endif
<script src="{{route('/assets/javascript/admin.js')}}"></script>
</html>