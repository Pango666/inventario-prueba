<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $laboratorio->name }}</title>

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
    </style>
</head>
<body>
    <h1>Laboratorio Seleccionado: {{ $laboratorio->name }}</h1>
    <h1>NIT: {{ $laboratorio->nit }}</h1>
    <h2>DIRECCION: {{ $laboratorio->address }}</h2>
    <h3>CELULAR: {{ $laboratorio->cellphone }}</h3>
    
    <h4>Productos</h4>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>CODIGO SKU</th>
            <th>CANTIDAD</th>
            <th>IMAGEN</th>
            <th>PRESENTACION</th>
        </thead>
        <tbody>
            @foreach ($laboratorio->products as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->name }}</td>
                    <td>{{ $producto->price }} <strong>Bs.</strong></td>
                    <td>{{ $producto->sku }}</td>
                    <td>{{ $producto->quantity }}</td>
                    <td>
                        <img src="{{ $producto->image }}" width="200 px" alt="{{ $producto->name }}">
                    </td>
                    <td>{{ $producto->presentacion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>