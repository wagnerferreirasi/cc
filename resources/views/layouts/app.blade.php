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

    {{ $slot }}

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
        Swal.fire(
            event.detail.text,
            'Deseja adicionar o ' + event.detail.text + ' ao carrinho?',
            'question'
        ).then(result => {
            if (result.value) {
                axios.post('{{ route("add") }}', {
                        product_id: event.detail.product_id,
                        quantity: event.detail.quantity,
                    }, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(response => {
                        console.log(response.data);
                        Toast.fire(
                            'Sucesso!',
                            response.data.message, // Use a mensagem do servidor aqui
                            'success'
                        );
                    })
                    .catch(error => {
                        Toast.fire(
                            'Ops!',
                            error.response.data.message, // Use a mensagem do servidor aqui
                            'error'
                        );
                    });
            }
        });
    });
    </script>
</body>

</html>
