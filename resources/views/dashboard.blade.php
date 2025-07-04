<x-layout>

    <div class="flex flex-col justify-center items-center gap-4">
        <h1 class="mb-10">Welcome {{ Auth::user()->name }} to the private dashboard
        </h1>
        <p>{{ Auth::user()->name }}</p>
        <p>{{ Auth::user()->email }}</p>

        <form action="{{ route('login') }}">
            <button type="submit" class="w-full">Logout</button>
        </form>
    </div>

</x-layout>
