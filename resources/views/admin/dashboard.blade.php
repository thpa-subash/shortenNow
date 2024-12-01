<x-admin-layout>
    <div class="flex gap-1 px-2 lg:px-0 text-sm">
        <span>Home</span>><span>Dashboard</span>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 px-2 lg:px-0 py-4">
        <div class="bg-blue-100 min-h-14 flex gap-3 py-3 px-3 rounded-lg">
            <div class="p-2 bg-blue-200 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 24 24">
                    <g fill="none" class="stroke-blue-500" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2">
                        <circle cx="12" cy="8" r="5" />
                        <path d="M20 21a8 8 0 0 0-16 0" />
                    </g>
                </svg>
            </div>
            <div>
                <h3 class="text-lg font-bold">{{ $totalUser ?? 0 }}</h3>
                <p>Total Users</p>
            </div>
        </div>
        <div class="bg-orange-100 min-h-14 flex gap-3 py-3 px-3 rounded-lg">
            <div class="p-2 bg-orange-200 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 24 24">
                    <g fill="none" class="stroke-orange-500" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2">
                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                    </g>
                </svg>
            </div>
            <div>
                <h3 class="text-lg font-bold">{{ $totalURL ?? 0 }}</h3>
                <p>Total URL</p>
            </div>
        </div>
        <div class="bg-green-100 min-h-14 flex gap-3 py-3 px-3 rounded-lg">
            <div class="p-2 bg-green-200 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 shrink-0" viewBox="0 0 24 24">
                    <path fill="none" class="stroke-green-500" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        d="M12 2v20m5-17H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                </svg>
            </div>
            <div>
                <h3 class="text-lg font-bold">$550</h3>
                <p>Total Income</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-6 gap-5 lg:gap-4">
        <div class="lg:col-span-4 ">
            <div class="p-2">
                <h3 class="font-bold text-lg">Latest URL</h3>
            </div>
            <table class="w-full table-fixed text-left bg-white border rounded-lg overflow-hidden">
                <thead class="">
                    <tr class="p-2">
                        <th class="w-20">Short Code</th>
                        <th>Short Link</th>
                        <th>Expires At</th>
                        <th class="text-nowrap">Total Clicks</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($latestURLs as $latestURL)
                        <tr class="p-2">
                            <td>{{ $latestURL->short_code }}</td>
                            <td class="text-wrap"><a class="underline" target="_blank"
                                    href="{{ route('redirectUrlTo', $latestURL->short_code) }}">{{ route('redirectUrlTo', $latestURL->short_code) }}</a>
                            </td>
                            <td>{{ $latestURL->expires_at }}</td>
                            <td>{{ $latestURL->no_of_clicks }}</td>
                            <td>{{ $latestURL->created_at->diffForHumans() }}</td>
                        </tr>

                    @empty
                        <tr>
                            <td>Not data found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="topLinks lg:col-span-2 bg-white rounded-lg divide-y divide-slate-100">
            <div>
                <h3 class="text-lg font-semibold p-2">Top Links</h3>
            </div>
            <div>
                <ul class="divide-y divide-slate-100">
                    @forelse($topURLs as $topURL)
                        <li class="flex justify-between"><a
                                href="{{ route('redirectUrlTo', $topURL->short_code) }}">{{ route('redirectUrlTo', $topURL->short_code) }}</a>
                            <span>{{ $topURL->no_of_clicks }}</span>
                        </li>
                    @empty
                        <li>URLs not found</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-admin-layout>
