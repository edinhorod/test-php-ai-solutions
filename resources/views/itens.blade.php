<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="antialiased">
    <div class="container mt-5 ml-5">
        <a href="{{ url('send-job') }}" class="btn btn-success">Salvar dados</a>
    </div>
    <div class="container mt-5 ml-5">
        @if (isset($data) && count($data) > 0)
            <ul>
                @foreach ($data as $item)
                    <li>
                        <strong>
                            Categoria: {{ $item->categoria }} <br>
                            Título: {{ $item->titulo }} <br>
                        </strong>
                        Conteúdo: {{ $item->conteúdo }} <br>
                    </li> <br>
                @endforeach
            </ul>
        @endif
    </div>
</body>

</html>
