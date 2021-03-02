<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    <title>Modulo administrativo</title>
</head>
<body>
    <script src="{{ asset("js/app.js") }}"></script>
<form action="{{ route('invtransacciones.store') }}" method="POST">
    <div class="form-group">
       <LABel for="id_tipomov">Codigo Movimiento</LABEL>
       <input class="form-control" type="numeric" name="id_tipomov">
     </div>
     <div class="form-group">
        <LABel for="conduce_no">Conduce</LABEL>
        <input class="form-control" type="numeric" name="conduce_no">
      </div>
      <div class="form-group">
        <LABel for="tipo_Cliente">TipoCliente</LABEL>
        <input class="form-control" type="numeric" name="tipo_cliente">
      </div>
      <div class="form-group">
        <LABel for="Sec_cliente">SecCliente</LABEL>
        <input class="form-control" type="numeric" name="sec_cliente">
      </div>
      <div class="form-group">
        <LABel for="departamento">Departamento</LABEL>
        <input class="form-control" type="numeric" name="departamento">
      </div>
      <div class="form-group">
        <LABel for="num_oc">Orden</LABEL>
        <input class="form-control" type="numeric" name='num_oc'>
      </div>
    
    
      <div class="form-group">
        <LABel for="usuario_creador">Usuario Creador</LABEL>
        <input class="form-control" type="text" name="usuario_creador">
      </div>
     <div class="form-group">
         <label for="comentario">comentario</LABel>
         <input class="form-control" type="text" name="comentario">
     </div>
     <div class="form-group">
        <LABEL for="estado">estado</label>
        <input class="form-control" type="text" name="estado">
     </div>
     <div class="form-group">
         <LABEL for="id_bodega">Bodega</label>
         <input class="form-control" type="numeric" name="id_bodega">
     <table class="table">
         <thead>
              <tr>
                  <td>
                     Producto
                  </td>
                  <td>
                    Titulo
                  </td>
                  <td>
                    UnidadMed
                  </td>
            <td>
                Area
            </td>
            <td>
               Cantidad1
            </td>
            <td>
                Cantidad
            </td>
            <td>
                precio
            </td>
            <td>
                costo
            </td>
            <td>
                margen
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="numeric" name="codigo">
            </td>
            <td>
                <input type="text" name="titulo_producto">
            </td>
            <td>
                <input type="text" name="unidadmed">
            </td>
            <td>
                <input type="numeric" name="area">
            </td>
            <td>
                <input type="numeric" name="cantidad1" >
            </td>
            <td>
                <input type="numeric" name="cantidad" >
            </td>
            <td>
                <input type="numeric" name="precio" >
            </td>
            <td>
                <input type="numeric" name="costo" >
            </td>
            <td>
                <input type="numeric" name="margen" >
            </td>
        </tr>
 
    </tbody>
  </table>
  <input type="submit" value="Enviar" class="btn btn-primary">
</form>
</body>
