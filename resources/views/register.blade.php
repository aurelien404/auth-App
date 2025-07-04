<x-layout>
    <h1 class="mb-10">Register.</h1>
    <form method="POST" action="{{ route('register.store') }}">
        @csrf
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="text" name="name" placeholder="Name" />
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="password" />
        <button type="submit" class="w-2/4">Register</button>
    </form>
</x-layout>
