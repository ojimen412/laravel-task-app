<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Laravel Task App</title>
@vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<nav class="bg-white shadow p-4">
<h1 class="text-xl font-bold text-blue-500">My Task App</h1>
</nav>
<main class="p-4">
@yield('content')
</main>
@vite('resources/js/app.js')
</body>
</html>