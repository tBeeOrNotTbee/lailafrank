<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
</head>
<body>
    <h3> Mensaje recibido de: {{$datos['fullName']}} - {{$datos['mail']}}</h3>
    <p><strong>Teléfono: </strong> {{$datos['cellphone']}} </p>
    <p><strong>Modelo: </strong> {{$datos['model']}} </p>
    <p><strong>Sugerencia: </strong> {{$datos['suggestion']}} </p>
</body>
</html>