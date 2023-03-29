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
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="submit" value="Buscar dados" class="btn btn-success" @if (count($documents) > 0) disabled @endif>
            @if (count($documents) > 0)
                <a href="{{ 'truncate-documents' }}" class="btn btn-danger">Apagar todos os dados</a>
            @endif
        </form>
    </div>
    <div class="container mt-5 ml-5">
        @if (isset($documents) && count($documents) > 0)
            <h3>Dados Gravados</h3>
            <ul>
                @foreach ($documents as $item)
                    <li>
                        <strong>
                            Categoria: {{ $item->category_name }} <br>
                            Título: {{ $item->title }} <br>
                        </strong>
                        Conteúdo: {{ $item->contents }} <br>
                    </li> <br>
                @endforeach
            </ul>
        @endif
    </div>
</body>

</html>
