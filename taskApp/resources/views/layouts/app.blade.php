<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Laravel Task App</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-fuchsia-100 to-sky-100 font-serif">
<nav class="bg-white shadow-md p-4">
<h1 class="text-xl font-bold text-violet-600">My Task App</h1>
</nav>
<main class="p-4">
@yield('content')
</main>
@vite('resources/js/app.js')
</body>
</html>