<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>

    <script>
        tailwind.config = {
            fontFamily: {
                sans: ['Poppins', 'sans-serif'],
            },
        }
    </script>
</head>

<body class="">
    @include('landing.header')
    @yield('content')
    
    @include('landing.about')

    @include('landing.services')

    @yield('scripts')
</body>

</html>
