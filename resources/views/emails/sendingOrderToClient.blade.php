<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laila Frank Shoes</title>
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

        table{
            margin:0 auto;
        }

        .cell{
            background-color: white;
            color: black;
            padding: 1em;
        }

        ul{
            list-style-type: none;
        }

        ul li{
            margin: 0.5em auto;
        }
    </style>
    <div class="message-box">
        <img class="img-fluid" src="https://lailafrank.com/img/logo.png" style="max-width: 85px!important">
        <h2 class="my-3">Hemos registrado tu pago con éxito!</h2>
        
        <table  cellpadding="2">
            <tbody>
                <tr>
                    <td class="cell"><strong>Id de pedido</strong></td>
                    <td class="cell">{{$data['payment_id']}}</td>
                </tr>
                <tr>
                    <td class="cell"><strong>Detalle</strong></td>
                    <td class="cell">
                        <ul>
                            @foreach ($data['shoes'] as $shoe)
                                <li>- {{$shoe}}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="cell"><strong>Total</strong></td>
                    <td class="cell">$ {{$data['total']}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>