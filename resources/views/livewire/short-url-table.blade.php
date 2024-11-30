<div class="flex flex-col gap-2 my-2">

    <div class="flex justify-end">
        <div class="flex items-center bg-slate-100 px-2 divide-x">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 shrink-0 pr-2 " viewBox="0 0 24 24">
                <g fill="none" class="stroke-slate-400" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21l-4.3-4.3" />
                </g>
            </svg>
            <input wire:model.live.debounce.250ms="search" type="text" placeholder="Search by long URL" />
        </div>
    </div>
    <table class=" w-full table-fixed text-left bg-white border rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="w-14">#</th>
                <th class="w-36">Short Code</th>
                <th>Original URL</th>
                <th>Expires At</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @forelse($shortUrls as $shortUrl)
                <tr class="p-2" wire:key="{{ $shortUrl->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $shortUrl->short_code }}</td>
                    <td>{{ $shortUrl->original_url }}</td>
                    <td>{{ $shortUrl->expires_at }}</td>
                    <td>
                        @if (isset($shortUrl->deleted_at))
                            <span class="text-red-500 text-xs bg-red-100 px-5 py-1 rounded-sm">Deleted</span>
                        @else
                            <span class="text-green-500 text-xs bg-green-100 px-5 py-1 rounded-sm">Active</span>
                        @endif
                    </td>
                    <td>
                        <button type="button" wire:click="delete('{{ $shortUrl->short_code }}')"
                            wire:confirm="Are you sure you want to delete this URL?">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="m19 7l-.867 12.142A2 2 0 0 1 16.138 21H7.862a2 2 0 0 1-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </td>
                </tr>
            @empty
                <tr class="h-32">
                    <td colspan="6" class="border text-center">No data available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    @if ($shortUrls->isNotEmpty() && $shortUrls->hasPages())
        <div class="border bg-white px-4 py-2 rounded-lg text-red-900">
            {{ $shortUrls->links() }}
        </div>
    @endif
</div>
