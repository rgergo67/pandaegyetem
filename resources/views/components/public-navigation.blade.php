<nav class="bg-white border-b border-gray-100 shadow-md w-full">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <div class="flex col-span-1 w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center w-full justify-between">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/panda-egyetem-mobile-logo.png') }}" class="block h-10 w-auto fill-current text-gray-600" width="230px" height="41px" alt="Panda Egyetem logó" />
                    </a>
                    <div class="hidden md:block md:ml-10 md:pr-4">
                        <a href="{{ route('categories.tanulas') }}" class="font-medium text-gray-500 hover:text-gray-900 h-16 inline-flex items-center px-4">Tanulás</a>
                        <a href="{{ route('categories.penz') }}" class="font-medium text-gray-500 hover:text-gray-900 h-16 inline-flex items-center px-4">Pénz</a>
                        <a href="{{ route('categories.kollegium') }}" class="font-medium text-gray-500 hover:text-gray-900 h-16 inline-flex items-center px-4">Kollégium</a>
                        <a href="{{ route('jobb-jegyek') }}" class="text-yellow-700 hover:bg-yellow-50 h-16 inline-flex items-center px-4">Jobb jegyek</a>
                        <a href="{{ route('beosztom.diak') }}" class="text-green-700 hover:bg-green-50 h-16 inline-flex items-center px-4">Spórolás</a>
                    </div>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center md:hidden col-span-1 justify-end">
                <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden');" aria-label="menu" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div id="mobile-menu" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('categories.tanulas') }}">Tanulás</x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('categories.penz') }}">Pénz</x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('categories.kollegium') }}">Kollégium</x-responsive-nav-link>
        </div>
    </div>
</nav>
