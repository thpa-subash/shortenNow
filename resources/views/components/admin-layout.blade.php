<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shorten Now</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="antialiased bg-gray-50 admin">
    <x-app.header />
    <div class="w-full container mx-auto my-4">
        <ul class="header bg-white border border-slate-100 px-4 flex items-center gap-5 text-base rounded-md">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'activeLinks' : '' }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('admin.shortUrl') }}"
                    class="{{ request()->routeIs('admin.shortUrl') ? 'activeLinks' : '' }}">URL</a>
            </li>
        </ul>
        <div class="py-4">
            {{ $slot }}
        </div>
    </div>
    @livewireScripts
</body>

</html>
