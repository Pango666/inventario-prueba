<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Laboratorio</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }

        .container{
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        h1{
            color: #333;
            margin-bottom: 10px;
        }

        .subtitle{
            color: #666;
            margin-bottom: 30px;
        }

        .form-group{
            margin-bottom: 20px;
        }

        label{
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"]{
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="number"]:focus{
            outline: none;
            border-color: #4CAF50;
        }

        .button-group{
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }

        button{
            flex: 1;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit{
            background-color: #4CAF50;
            color: white;
        }

        .btn-submit:hover{
            background-color: #45a049;
        }

        .btn-cancel{
            background-color: #f44336;
            color: white;
        }

        .btn-cancel:hover{
            background-color: #da190b;
        }

        .back-link{
            display: inline-block;
            margin-bottom: 20px;
            color: #4CAF50;
            text-decoration: none;
        }

        .back-link:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('dashboard_laboratorios') }}" class="back-link">← Volver a Laboratorios</a>
        
        <h1>Crear Nuevo Laboratorio</h1>
        <p class="subtitle">Complete todos los campos para registrar un nuevo laboratorio</p>

        <form action="{{ route('laboratorio_guardar') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name">Nombre del Laboratorio *</label>
                <input type="text" id="name" name="name" required placeholder="Ingrese el nombre del laboratorio">
            </div>

            <div class="form-group">
                <label for="nit">NIT *</label>
                <input type="text" id="nit" name="nit" required placeholder="Ingrese el NIT">
            </div>

            <div class="form-group">
                <label for="address">Dirección *</label>
                <input type="text" id="address" name="address" required placeholder="Ingrese la dirección">
            </div>

            <div class="form-group">
                <label for="cellphone">Celular *</label>
                <input type="text" id="cellphone" name="cellphone" required placeholder="Ingrese el número de celular">
            </div>

            <div class="button-group">
                <button type="submit" class="btn-submit">Guardar Laboratorio</button>
                <button type="button" class="btn-cancel" onclick="window.location.href='{{ route('dashboard_laboratorios') }}'">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>

