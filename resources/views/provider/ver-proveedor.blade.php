<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Provedor</title>
</head>
<body>
    <h1>Informacion del Proveedor</h1>
    <h4>Nombre: {{ $datos_proveedor->name }}</h4>
    <h4>Celular: {{ $datos_proveedor->cellphone }}</h4>
    <h2>Trabaja en</h2>
    <h4>Laboratorio: {{ $datos_proveedor->laboratorio->name }}</h4>
    <h4>Direccion: {{ $datos_proveedor->laboratorio->address }}</h4>
    <h4>Numero de contacto: {{ $datos_proveedor->laboratorio->cellphone }}</h4>
</body>
</html>