<div>
    <div class="my-8 text-center">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-32 mx-auto rounded-full">
        <h1 class="text-3xl font-bold text-red-950">
            {{ config('app.name') }}
        </h1>
        <p class="text-sm italic text-gray-400">
            Faça seu pedido de forma rápida e segura.
        </p>
    </div>
    <hr class="my-8">
    <div class="px-4">
        <div class="flex max-w-4xl p-4 mx-auto border border-gray-100 rounded-lg shadow-sm">
            <div class="flex flex-col gap-2 align-baseline">
                <p class="flex text-sm font-bold text-lime-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mx-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>
                        Aberto
                    </span>
                </p>
                <p class="flex text-sm italic">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mx-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <span>
                        Pedido mínimo: <b class="font-semibold">R$ 20,00</b>
                    </span>
                </p>
                <p class="flex text-sm italic">
                    <svg stroke-width="0" stroke="currentColor" class="w-5 h-5 mx-2" fill="currentColor" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                        <g><path fill="none" d="M0 0h24v24H0z"></path><path fill-rule="nonzero" d="M16,1 C16.5522847,1 17,1.44771525 17,2 L17,3 L22,3 L22,9 L19.9813388,9 L22.7270773,16.5438545 C22.9032836,16.9948332 23,17.4856276 23,17.9990113 C23,20.2081503 21.209139,21.9990113 19,21.9990113 C17.1365166,21.9990113 15.5706587,20.7247255 15.1262721,19 L10.8739825,19 C10.4299397,20.7252272 8.86383943,22 7,22 C5.05550552,22 3.43507622,20.612512 3.0747418,18.7735658 C2.43596423,18.4396361 2,17.7707305 2,17 L2,7 C2,6.44771525 2.44771525,6 3,6 L10,6 C10.5522847,6 11,6.44771525 11,7 L11,12 C11,12.5522847 11.4477153,13 12,13 L14,13 C14.5522847,13 15,12.5522847 15,12 L15,3 L12,3 L12,1 L16,1 Z M7,16 C5.8954305,16 5,16.8954305 5,18 C5,19.1045695 5.8954305,20 7,20 C8.1045695,20 9,19.1045695 9,18 C9,16.8954305 8.1045695,16 7,16 Z M19,15.9990113 C17.8954305,15.9990113 17,16.8944418 17,17.9990113 C17,19.1035808 17.8954305,19.9990113 19,19.9990113 C20.1045695,19.9990113 21,19.1035808 21,17.9990113 C21,17.7586785 20.9576092,17.5282466 20.8798967,17.3147849 L20.8635387,17.2714329 C20.5725256,16.5266202 19.8478776,15.9990113 19,15.9990113 Z M17.8529833,9 L16.9999998,9 L16.9999998,12 C16.9999998,13.6568542 15.6568542,15 13.9999998,15 L11.9999998,15 C10.3431458,15 8.99999976,13.6568542 8.99999976,12 L3.99999976,12 L3.99999976,15.3541759 C4.73294422,14.523755 5.80530734,14 6.99999976,14 C8.86383943,14 10.4299397,15.2747728 10.8739825,17 L15.1257631,17 C15.569462,15.2742711 17.1358045,13.9990113 18.9999998,13.9990113 C19.2368134,13.9990113 19.4688203,14.0195905 19.6943299,14.0590581 L17.8529833,9 Z M8.99999976,8 L3.99999976,8 L3.99999976,10 L8.99999976,10 L8.99999976,8 Z M20,5 L17,5 L17,7 L20,7 L20,5 Z"></path></g>
                    </svg>
                    <span>
                        Taxas de entrega calculadas após o envio do pedido.
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="px-4 my-8">
        <div class="flex flex-row max-w-4xl gap-2 mx-auto">
            <button class="px-4 py-2 text-gray-500 border border-gray-100 rounded-md hover:bg-gray-50">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"></path><path d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9-9-4.032-9-9 4.032-9 9-9zm0 16c3.867 0 7-3.133 7-7 0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7zm8.485.071l2.829 2.828-1.415 1.415-2.828-2.829 1.414-1.414z"></path></g></svg>
            </button>
            <select name="" id="" class="w-full px-4 py-2 text-gray-500 border border-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-300">
                <option value="">Selecione uma opção</option>
                <option value="1">Opção 1</option>
                <option value="2">Opção 2</option>
                <option value="3">Opção 3</option>
                <option value="4">Opção 4</option>
            </select>
        </div>
    </div>
    <div class="px-4">
    <div class="max-w-4xl mx-auto">
        @foreach ($categories as $category)
            <div class="category">
                <p class="flex italic font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2 text-red-950">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-xl text-red-950">
                        {{ $category->name }}
                    </span>
                </p>
            </div>

            @foreach ($category->products as $product)
                <div class="max-w-4xl p-4 mx-auto my-4 mt-4 border border-gray-200 rounded-lg">
                    <a href="#" x-data="{ productData: { text: '{{ $product->name }}', product_id: {{ $product->id }}, quantity: 1 } }" @click="$dispatch('addCart', productData)" class="no-underline">
                        <div class="justify-between sm:flex">
                            <div class="mb-4 md:mb-0 md:ml-12 sm:order-2">
                                <img src="{{ asset('img/'.$product->image) }}" alt="{{ $product->name }}" class="rounded-xl sm:w-32 md:w-32">
                            </div>
                            <div class="my-auto sm:order-1">
                                <p class="font-semibold text-1xl">
                                    {{ $product->name }}
                                </p>
                                <p class="text-xs italic text-justify text-gray-300">
                                    {{ $product->description }}
                                </p>
                                <p class="mt-4 font-semibold">
                                    R$ {{ $product->price }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

