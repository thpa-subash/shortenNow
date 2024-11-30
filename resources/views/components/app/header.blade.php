<header class="w-full h-14 flex items-center bg-white">
    <div class="container px-2 lg:p-0 w-full mx-auto inline-flex items-center justify-between">
        <div class="text-orange-400 text-2xl font-extrabold"><a href="{{ route('home') }}">Shorten Now</a></div>
        <div class="flex gap-5 items-center">
            <nav class="hidden lg:block text-base">
                <ul class="flex gap-5">
                    <li>Features</li>
                    <li>Pricing</li>
                    <li>Blog</li>
                    <li>Docs</li>
                </ul>
            </nav>
            <div class="relative border border-slate-200 rounded-full p-2" x-data="{ open: false }">
                <svg x-on:click="open = ! open" xmlns="http://www.w3.org/2000/svg"
                    class="w-5 cursor-pointer h-5 shrink-0" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2">
                        <circle cx="12" cy="8" r="5" />
                        <path d="M20 21a8 8 0 0 0-16 0" />
                    </g>
                </svg>
                <div x-cloak x-show="open" x-transition.scale.origin.top
                    class="absolute top-10 right-0 rounded-md bg-white min-w-20 border border-slate-100">
                    <ul class="divide-y">
                        @auth
                            <li>
                                <a class="flex items-center gap-2 px-3 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="m3 12l2-2m0 0l7-7l7 7M5 10v10a1 1 0 0 0 1 1h3m10-11l2 2m-2-2v10a1 1 0 0 1-1 1h-3m-6 0a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1m-6 0h6" />
                                    </svg>Dashboard</a>
                            </li>
                        @endauth
                        @auth
                            <li>
                                <a class="flex text-nowrap items-center gap-2 px-3 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 1 1-8 0a4 4 0 0 1 8 0m-4 7a7 7 0 0 0-7 7h14a7 7 0 0 0-7-7" />
                                    </svg>My Account</a>
                            </li>
                        @endauth
                        @guest
                            <li>
                                <a href="{{ route('login') }}" class="flex items-center gap-2 px-3 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="m11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h7a3 3 0 0 1 3 3v1" />
                                    </svg>Login</a>
                            </li>
                        @endguest
                        @guest
                            <li>
                                <a class="flex text-nowrap items-center gap-2 px-3 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 1 1-8 0a4 4 0 0 1 8 0M3 20a6 6 0 0 1 12 0v1H3z" />
                                    </svg>Sign Up</a>
                            </li>
                        @endguest
                        @auth
                            <li>
                                <a href="{{ route('admin.logout') }}" class="flex items-center gap-2 px-3 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 shrink-0" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2"
                                            d="m17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1" />
                                    </svg>Logout</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
