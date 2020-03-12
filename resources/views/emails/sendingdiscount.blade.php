<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laila Frank | Shoes</title>
</head>
<body>
    <style>
        .message-box{
            text-align: center;
            padding: 3em;
            background-color: #e3e3e3;
            border: 1px solid #363638;
            font-family: Arial, Helvetica, sans-serif;
        }

        .my-3{
            margin-top:1em;
            margin-bottom:1em;
        }

        .discount{
            background-color: #ffffff;
            padding: 1em;
            border: 1px solid #363638;
            box-sizing: content-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
    <div class="message-box">
        <img class="img-fluid" src="https://lailafrank.com/img/logo.png" style="max-width: 85px!important">
        <h2 class="my-3">Gracias {{$datos['fullname']}} por responder nuestra encuesta!</h2>
        <h4 class="my-3">Te obsequiamos un cupón de descuento para tu futura compra</h4>
        <div class="my-3 discount">{{$discount}}</div>
        <h3 class="my-3">Válido por un 10% del total de la compra.</h3>
    </div>
</body>
</html>