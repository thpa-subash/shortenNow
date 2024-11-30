<x-front-layout>
    <div class="flex h-[90dvh] justify-center items-center px-2">
        <div class="container mx-auto px-4 py-8 bg-white lg:px-6 w-full lg:max-w-96">
            <h2 class="text-3xl text-center font-semibold">Login</h2>
            <form action="{{ route('authenticate') }}" method="post" class="flex flex-col gap-4">
                @csrf
                <div class="flex flex-col gap-1">
                    <label>Email</label>
                    <input type="email" class="@error('email') error @enderror" name="email" />
                    @error('email')
                        <p class="errorMessage">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-1">
                    <label>Password</label>
                    <input type="password" class="@error('email') error @enderror" name="password" />
                    @error('email')
                        <p class="errorMessage">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex text-sm">
                    <a class="underline text-orange-400">Forget Password?</a>
                </div>
                <button type="submit">Login</button>
            </form>
            <div>
                <p class="text-sm py-3 text-center">Not a member? <a class="text-orange-400">Signup now</a></p>
            </div>
        </div>
    </div>
</x-front-layout>
