<x-layout>
    <h1 class="mb-10">Login.</h1>
    <form method="POST" action="{{ route('login.attemp') }}">
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

        <input type="email" name="email" placeholder="email" />
        <input type="password" name="password" placeholder="password" />
        <button class="w-2/4" >Submit</button>
    </form>
</x-layout>
