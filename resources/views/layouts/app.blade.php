<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,800;1,300;1,400;1,600;1,800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <x-navbar-component></x-navbar-component>
    <div class="mt-24">
        {{ $slot }}
    </div>

    <script>
    document.addEventListener('swal', event => {
        var detail = event.detail[0];
        Swal.fire(
            detail.title,
            detail.text,
            detail.icon
        );
    });

    document.addEventListener('addCart', event => {
        Swal.fire({
            title: event.detail.text,
            text: 'Deseja adicionar o ' + event.detail.text + ' ao carrinho?',
            input: 'number',
            inputValue: 1,
            inputAttributes: {
                class: 'w-24 px-2 py-1 text-sm text-gray-500 border border-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-300',
                min: 1,
                value: event.detail.quantity
            },
            inputLabel: 'Quantidade',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#65a30d',
            cancelButtonColor: '#450a0a',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não',
            allowOutsideClick: false
        }).then(result => {
            if (result.isConfirmed) {
                axios.post('{{ route("add") }}', {
                    product_id: event.detail.product_id,
                    quantity: result.value
                }, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(response => {
                    Toast.fire(
                        'Sucesso!',
                        response.data.message,
                        'success'
                    );
                })
                .catch(error => {
                    Toast.fire(
                        'Ops!',
                        error.response.data.message,
                        'error'
                    );
                });
            }
        });
    });
    </script>
</body>

</html>
