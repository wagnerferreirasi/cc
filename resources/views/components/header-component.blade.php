<div>
    <div class="my-8 text-center">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-32 mx-auto mb-6 rounded-full">
        <h1 class="text-3xl font-bold text-red-950">
            {{ config('app.name') }}
        </h1>
        <p class="text-sm italic text-gray-400">
            Faça seu pedido de forma rápida e segura.
        </p>
    </div>
    <hr class="my-8">
    <div class="px-4">
        {{ $slot }}
    </div>
</div>
