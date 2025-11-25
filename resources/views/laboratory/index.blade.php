<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratorios</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table{
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td{
            padding: 10px;
            text-align: left;
        }

        th{
            font-weight: bold;
        }

        .header-container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn-crear{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn-crear:hover{
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="header-container">
        <h1>Modulo de laboratorios</h1>
        <a href="{{ route('laboratorio_crear') }}" class="btn-crear">+ Crear Nuevo Laboratorio</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nit</th>
                <th>Direccion</th>
                <th>Celular</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            {{-- ACA SE VUELVE DINAMICO --}}
            @foreach ( $todos_laboratorios as $laboratorio)
                <tr>
                    <td>{{ $laboratorio->id }}</td>
                    <td>{{ $laboratorio->name }}</td>
                    <td>{{ $laboratorio->nit }}</td>
                    <td>{{ $laboratorio->address }}</td>
                    <td>{{ $laboratorio->cellphone }}</td>
                    @if ($laboratorio->active == 0)
                        <td>Inactivo</td>
                    @else
                        <td>Activo</td>
                    @endif
                    <td>
                        <a href="{{ route('laboratorio_x',$laboratorio->name) }}">Ver</a>
                        @if ($laboratorio->active == 0)
                            <a href="{{ route('laboratorio_activar',$laboratorio->id) }}">Activar</a>
                        @else
                            <a href="{{ route('laboratorio_eliminar', $laboratorio->id) }}">Desactivar</a>
                        @endif
                    </td>
                </tr>
            @endforeach

            {{-- <tr>
                <td>Labotorio de prueba 1</td>
                <td>Nit de prueba de prueba 1</td>
                <td>Direccion de prueba1</td>
                <td>Celular de prueba1</td>
            </tr>
            <tr>
                <td>Labotorio de prueba 2</td>
                <td>Nit de prueba de prueba 2</td>
                <td>Direccion de prueba2</td>
                <td>Celular de prueba2</td>
            </tr> --}}
        </tbody>
    </table>


    {{-- <p>
        {{ $todos_laboratorios }}
    </p> --}}
</body>
</html>