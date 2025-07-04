<x-layout>
    <div class="flex flex-col justify-center items-center gap-4">
        <h1>Welcome to Laravel!</h1>
        <p class="mb-6">Your application is up and running.</p>

        <form action="{{ route('login') }}">
            <button type="submit" class="w-full">Login</button>
        </form>

        <a href="{{ route('register') }}">No account yet? Register.</a>
    </div>
</x-layout>
