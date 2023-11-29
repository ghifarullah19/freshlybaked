<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- TailwindCSS & Flowbite --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>FreshlyBaked</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container">
        @yield('container')
    </div>
</body>
</html>