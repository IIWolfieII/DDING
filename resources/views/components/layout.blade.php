<!DOCTYPE html>
<html data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>DDING</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-slate-900 overflow-hidden max-h-screen">
  <div class="flex h-screen max-h-screen overflow-hidden">
    <x-sidebar></x-sidebar>
    {{ $slot }}
  </div>
</body>

</html>