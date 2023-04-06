<nav class="fixed inset-x-0 z-50 bg-ash-800" x-data="{ open: false, atTop: true }" @scroll.window="atTop = (window.pageYOffset > 100) ? false : true" @load.window="atTop = (window.pageYOffset > 100) ? false : true">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex-1 flex items-center justify-between">
                <a href="{{route('home')}}" class="flex-shrink-0 flex items-center">
                    <img class="block h-12 w-auto" src="{{ asset('img/logo-white.png') }}" alt="Foris Labs">
                </a>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <x-nav-link route="home">Home</x-nav-link>
                        <x-nav-link route="simulations">Simulations</x-nav-link>
                        <x-nav-link route="pricing">Pricing</x-nav-link>
                        <x-nav-link route="blog">Blog</x-nav-link>
                        <x-nav-link route="contact-us">Contact Us</x-nav-link>

                        <a href="{{route('login')}}" class="bg-orange-500 text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                    </div>
                </div>
                <div class="flex items-center sm:hidden">
                    <button type="button" @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-ash-400 hover:text-white hover:bg-ash-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" :class="{'hidden': open, 'block': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" :class="{'block': open, 'hidden': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" x-show="open" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-400" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" id="mobile-menu" @click.away="open = false">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <x-nav-link route="home" class="block">Home</x-nav-link>
            <x-nav-link route="simulations" class="block">Simulations</x-nav-link>
            <x-nav-link route="pricing" class="block">Pricing</x-nav-link>
            <x-nav-link route="blog" class="block">Blog</x-nav-link>
            <x-nav-link route="contact-us" class="block">Contact Us</x-nav-link>
        </div>
        <div class="flex justify-center mb-4">
            <a href="{{route('login')}}" class="bg-orange-500 text-white inline px-8 py-2 rounded-md text-base font-medium">Login</a>
        </div>
    </div>

    <div class="fixed bottom-4 md:bottom-16 right-4 z-20 transition-opacity duration-500" :class="{ 'opacity-0' : atTop, 'opacity-100' : !atTop}">
        <button @click="$scroll(0)" :disabled="atTop" class="bg-ash-800 hover:bg-orange-500 text-lg w-14 h-14 flex items-center justify-center text-white rounded-full"><i class="fa fa-arrow-up"></i></button>
    </div>
</nav>