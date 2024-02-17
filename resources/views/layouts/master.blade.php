<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
     @vite('resources/css/app.css')
    @stack('styles')
</head>

<body class="bg-background">
    <section class="container ">
        @yield('content')
    </section>

    @stack('scripts')
</body>

</html>
