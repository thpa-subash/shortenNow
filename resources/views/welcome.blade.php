<x-front-layout>
    <main class="max-w-7xl mx-auto my-2 lg:p-8">
        <div class="container mx-auto lg:rounded-md text-center bg-white px-2 lg:px-0 py-10 flex flex-col gap-6">
            <div class="flex flex-col gap-1">
                <h1 class="text-3xl font-bold">Shorten Your URL Now</h1>
                <p class="text-lg ">Shorten, share, and track your URLs effortlessly.</p>
            </div>
            <form action="{{ route('home') }}" method="post">
                @csrf
                <div class="w-full lg:w-3/6 flex flex-col gap-4 justify-center text-left flex-nowrap">
                    <div class="flex flex-col gap-1">
                        <label for="originalUrl">Enter the URL to be shortened</label>
                        <input id="originalUrl" class="@error('original_url') error @enderror" name="original_url"
                            type="text" value="{{ old('original_url') }}" placeholder="https://shikshasanjal.com " />
                        @error('original_url')
                            <p class="errorMessage">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="expiresAt">Expiration Time<span class="italic text-xs">(Optional)</span></label>
                        <input id="expiresAt" class="@error('expires_at') error @enderror" name="expires_at"
                            type="datetime-local" value="{{ old('expires_at') }}" />
                        @error('expires_at')
                            <p class="errorMessage">{{ $message }}</p>
                        @enderror
                    </div>
                    <button>Shorten Now</button>
                </div>
            </form>
            @if (session()->has('shortURL'))
                <div class="w-full flex justify-center">
                    <div class="lg:w-3/6 bg-green-500 py-2 lg:px-10 rounded-md">
                        <p class="text-white">Your Shortened URL is: <a class="underline" target="_blank"
                                href="{{ route('redirectUrlTo', ['url' => session()->get('shortURL')]) }}">{{ route('redirectUrlTo', ['url' => session()->get('shortURL')]) }}</a>
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </main>
</x-front-layout>
