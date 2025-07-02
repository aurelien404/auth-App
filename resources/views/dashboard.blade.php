<x-layout>

    <div class="flex flex-col justify-center items-center gap-4">
        <h1>Welcome {{ Auth::user()->name }} to the private dashboard
        </h1>
        <p>Your application is up and running.</p>

        <form action="{{ route('login') }}">
            <button type="submit" class="w-full">Logout</button>
        </form>
    </div>

</x-layout>
