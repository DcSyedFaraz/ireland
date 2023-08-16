<!-- Header -->
<div class="w-full text-gray-700 dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <div x-data="{ open: false }"
        class="flex flex-col container px-2 mx-auto lg:items-center lg:justify-between lg:flex-row">
        <div class="px-4 flex flex-row items-center justify-between">
            <a class="flex items-center py-4 px-2" href="{{ route('home') }}">
                <img src="{{ asset('imgs/logo.png') }}" alt="{{config('app.name')}}" class="h-16 mt-3" />
            </a>
            <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" style="display: none"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 lg:pb-0 hidden lg:flex lg:justify-end lg:flex-row">
            <a href="{{ route('home') }}" class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

            <a href="{{ route('about') }}" class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>

            {{-- @if (count($services) > 0)
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="block font-semibold py-2 px-4 hover:text-primary-one text-primary-two">
                        <span>Services</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform rotate-0">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 md:mt-4 origin-top-right rounded-md shadow-lg md:w-48 z-50 hidden " :class="{'hidden': !open}" style="display: none;">
                        <div class="px-2 py-2 bg-primary-one rounded-md shadow">
                            @foreach ($services as $service)
                                <a class="block px-4 py-2 mt-2 text-sm text-white font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-200 focus:text-gray-300 " href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif --}}

            @if (Route::has('blogs'))
                <a href="{{ route('blogs') }}" class="nav-item {{ request()->routeIs('blogs') ? 'active' : '' }}">Blogs</a>
            @endif

            <a href="{{ route('contact') }}" class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>

            <a href="{{ route('reviews') }}" class="nav-item {{ request()->routeIs('reviews') ? 'active' : '' }}">Reviews</a>

            <div class="flex flex-col md:flex-row items-center my-3 mx-3 lg:my-0 md:space-x-1 space-y-2 md:space-y-0">
                <a href="{{ route('order') }}" class="btn-primary animate-wiggle mx-10 md:mx-0">
                    Order
                </a>

                <a href="{{ route('login') }}" class="btn-primary  mx-10 md:mx-0 ">Login</a>
                <span class="relative inline-flex">
                    <img class="h-12 md:pl-4 " src="{{asset('imgs/open-hour.png')}}" alt="{{config('app.name')}}">
                    <div type="button" class="absolute animate-ping top-2 h-8 rounded-full bg-gray-300 py-3 px-5" style=" right: 0.8rem; width: 5rem;" disabled=""> </div>
                </span>

            </div>

        </nav>
    </div>
</div>

<script>
    // Grab HTML Elements
    const btn = document.getElementById("mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");
</script>
