<div>
    <nav x-data="{ open: false }" class="fixed top-0 z-10 w-full bg-red-950">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-lg font-semibold text-white">
                        <img src="img/logo.png" alt="Família Grill Delivery" class="w-12 rounded">
                    </a>
                </div>

                <div class="flex md:hidden">
                    <button x-on:click="open = !open" class="text-gray-100 hover:text-white focus:outline-none focus:text-white">
                        <svg x-show="!open" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h16v2H4v-2z"></path>
                        </svg>
                        <svg x-show="open" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 18L18 6l-1.41-1.41L4 16.17V18h2zm-1.41-2.59L17.17 4H16L4 15.83v.01L5.59 17.4zm4.82-2.43L6 9.17V8h12v1.17l-4.41 4.42z"></path>
                        </svg>
                    </button>
                </div>

                <div class="hidden md:block">
                    <div class="flex items-center ml-10 space-x-3">
                        <a href="/" class="px-3 py-2 text-sm font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">
                            Página Inicial
                        </a>
                        <a href="#" class="px-3 py-2 text-sm font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">
                            Sobre
                        </a>
                        <a href="https://wa.me/15920006658" target="_blank" class="px-3 py-2 text-sm font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">
                            Contato
                        </a>
                        <a href="{{ route('cart') }}" class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            @if (Cart::count() > 0)
                                <div class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white border-2 rounded-full border-amber-200 bg-amber-600 -top-2 -right-2">{{ \Cart::count()}}</div>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="open" class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="block px-3 py-2 text-base font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">
                    Página Inicial
                </a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">
                    Sobre
                </a>
                <a href="https://wa.me/15920006658" target="_blank" class="block px-3 py-2 text-base font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">
                    Contato
                </a>
                <a href="{{ route('cart') }}" class="block px-3 py-2 text-base font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>
</div>
