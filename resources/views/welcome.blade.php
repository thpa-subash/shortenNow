<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shorten Now</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-50">
    <div class="relative">
        <header class="w-full h-14 flex items-center bg-white">
            <div class="container px-2 lg:p-0 w-full mx-auto inline-flex items-center justify-between">
                <div class="text-orange-400 text-2xl font-extrabold">Shorten Now</div>
                <div class="flex gap-5 items-center">
                    <nav class="hidden lg:block text-base">
                        <ul class="flex gap-5">
                            <li>Features</li>
                            <li>Pricing</li>
                            <li>Blog</li>
                            <li>Docs</li>
                        </ul>
                    </nav>
                    <div class="border border-slate-200 rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <circle cx="12" cy="8" r="5" />
                                <path d="M20 21a8 8 0 0 0-16 0" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </header>
        <main class="max-w-7xl mx-auto p-2 lg:p-8">
            <div class="container mx-auto rounded-md text-center bg-white min-h-72 py-10 flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h1 class="text-3xl font-bold">Shorten Your URL Now</h1>
                    <p class="text-lg ">Shorten, share, and track your URLs effortlessly.</p>
                </div>
                <form>
                    <div class="lg:w-3/6 flex flex-col gap-3 justify-center flex-nowrap">
                        <input type="text" placeholder="Enter Url " />
                        <input type="date" />
                        <button>Shorten Now</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
