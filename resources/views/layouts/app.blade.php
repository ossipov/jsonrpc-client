<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  @stack('meta')
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  @stack('styles') 
</head>
<body class="bg-gray-200 py-10">
  
  <h1 class="text-center text-3xl font-semibold mb-5">
    <a class="hover:underline" href="/">🧼 JSON-RPC Client</a>
  </h1>

  @yield('content')

  <footer class="text-gray-600 text-center text-xs mt-20">
    <a class="hover:underline" href="https://ossipov.me">ossipov.me</a>
  </footer>
  @stack('js')
</body>
</html>