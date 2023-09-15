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
                    <div class="flex items-baseline ml-10 space-x-4">
                        <a href="#" class="px-3 py-2 text-sm font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">Página Inicial</a>
                        <a href="#" class="px-3 py-2 text-sm font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">Sobre</a>
                        <a href="https://wa.me/15920006658" target="_blank" class="px-3 py-2 text-sm font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">Contato</a>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="open" class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">Página Inicial</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">Sobre</a>
                <a href="https://wa.me/15920006658" target="_blank" class="block px-3 py-2 text-base font-medium text-gray-100 rounded-md hover:bg-red-900 hover:text-white">Contato</a>
            </div>
        </div>
    </nav>
</div>
