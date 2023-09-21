<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 and Vue 3 CRUD Application - LaravelTuts.com</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('BackEnd/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('BackEnd/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <title>Multi Vendor</title>
    <!-- Vendor CSS Files -->
    <link href="{{asset('BackEnd/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('BackEnd/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('BackEnd/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('BackEnd/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('BackEnd/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('BackEnd/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('BackEnd/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('BackEnd/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('common.css') }}" rel="stylesheet">

    @vite(['resources/js/app.js'])
</head>

<body class="animsition">
    <div class="page-wrapper"></div>

    <!-- <script src="{{ asset('BackEnd/assets/vendor/apexcharts/apexcharts.min.js') }}"></script> -->
    <script src="{{ asset('BackEnd/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('BackEnd/assets/vendor/chart.js/chart.js') }}"></script> -->
    <script src="{{ asset('BackEnd/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('BackEnd/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('BackEnd/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('BackEnd/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('BackEnd/assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('BackEnd/assets/js/main.js') }}"></script>

</body>

</html>

