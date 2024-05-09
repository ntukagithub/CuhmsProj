<nav class="-mx-3 flex flex-1 justify-end">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
            Dashboard
        </a>

        @else
    <div class="absolute top-2 right-7 flex gap-3">
        <a href="{{ route('login') }}" class="bg-gray-900 py-1.5 px-2 rounded-xl w-[100px] text-center hover:bg-gray-700 ">Register</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="bg-gray-900  py-1.5 px-2  rounded-xl w-[100px] text-center hover:bg-gray-700">Login</a>
    </div>
    @endif
   
    @endauth
</nav>
