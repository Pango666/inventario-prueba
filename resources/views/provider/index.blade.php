<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
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
    <h1>Dashboard de Proveedores</h1>
    <h2>Proveedores de Laboratorio</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Laboratorio</th>
                <th>Dir. Laboratorio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos_los_proveedores as $provedor)
                <tr>
                    <td>{{ $provedor->id }}</td>
                    <td>{{ $provedor->name }}</td>
                    <td>{{ $provedor->cellphone }}</td>
                    <td>{{ $provedor->laboratorio->name }}</td>
                    <td>{{ $provedor->laboratorio->address }}</td>
                    <td>
                        <a href="{{ route('proveedor_ver',$provedor->id) }}">Ver</a>
                        <a href="{{ route('proveedor_eliminar',$provedor->id) }}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>