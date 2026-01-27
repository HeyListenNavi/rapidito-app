<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">

    <!-- Boxicons CSS -->
    <link href='https://cdn.boxicons.com/3.0.8/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/3.0.8/fonts/filled/boxicons-filled.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/3.0.8/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="flex h-screen flex-col overflow-hidden bg-gray-200 font-sans text-gray-800">

    <main class="no-scrollbar relative flex-1 overflow-y-auto pb-20">
        {{ $slot }}
    </main>


    @livewireScripts
</body>

</html>
