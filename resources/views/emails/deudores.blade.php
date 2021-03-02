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
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
        .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-dvpl{border-color:inherit;text-align:right;vertical-align:top}
    </style>
</head>
<body>
    <header>
        <p><strong>Recordatorio de pago</strong></p>
    </header>
    <main>
        <table class="tg">
            <thead>
              <tr>
                <th><strong>NOMBRE</strong> </th>
                <th><strong>TELEFONO</strong> </th>
                <th><strong>CELULAR</strong> </th>
                <th><strong>EMAIL</strong> </th>
                <th><strong>FACTURA</strong> </th>
                <th><strong>MONTO</strong> </th>
                <th><strong>FECHA PAGO</strong> </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $pago)      
                    <tr>
                        <td>{{strtoupper($pago->nombre)}}</td>
                        <td>{{strtoupper($pago->telefono_casa)}}</td>
                        <td>{{strtoupper($pago->celular)}}</td>
                        <td>{{strtoupper($pago->email)}}</td>
                        <td>{{strtoupper($pago->aplica_a)}}</td>
                        <td>{{'$RD'.' '. number_format($pago->deuda, 2)}}</td>
                        <td>{{strtoupper($pago->fecha_ven)}}</td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
    </main>
</body>
</html>