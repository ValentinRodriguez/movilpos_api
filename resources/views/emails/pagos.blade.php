<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TABLA DE PRODUCTOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
    <header>
        <br>
        <p><strong>Recordatorio de pago</strong></p>
    </header>
    <main>

        @foreach ($data as $pago)      
            <tr>
                <td>Saludos Sr/a <strong>{{strtoupper($pago->nombre)}}</strong> el pago referente a la factura <strong>{{strtoupper($pago->aplica_a)}}</strong> vence el <strong>{{strtoupper($pago->fecha_ven)}}</strong></td>
                <td>la misma presenta un balance pendiente de <strong>{{'$RD'.' '. number_format($pago->deuda, 2)}}</strong> favor pasar a realizar el pago antes de la fecha especificada.</strong></td>
            </tr>   
        @endforeach
    </main>
</body>
</html>