<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail recibido en el sitio web</title>
</head>
<body>
    <h3> Mensaje recibido de: {{$datos['name']}} {{$datos['surname']}} - {{$datos['email']}}</h3>
    <p><strong>Asunto: </strong> {{$datos['about']}} </p>
    <p><strong>Teléfono: </strong> {{$datos['phone']}} </p>
    <p><strong>Mensaje: </strong> {{$datos['description']}} </p>
</body>
</html>