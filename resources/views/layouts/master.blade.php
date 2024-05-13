<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Movie App</title>
</head>
<body class="font-sans bg-gray-900 text-white">
    @include('layouts.navigation')

    @yield('content')
    <footer class="border border-t mt-10 border-gray-800">
        <div class="container mx-auto text-sm px-4 py-6 text-center">
            Powered by <a href="https://www.sajadhamidi.ir" class="underline hover:text-gray-300">sajadhamidi</a>
        </div>
    </footer>
</body>
</html>
