<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>

    <!-- BASIC PAGE NEEDS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Default Title')</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>


    <!-- FAVICONS -->
    <link rel="icon" href="{{ asset('images/icons/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('misc/site.webmanifest') }}">

    <!-- IMPORTS -->
    @vite('resources/css/auth.css')

</head>




<!-- BODY START -->
<body class="h-full">
    {{ $slot }}
</body>


</html>