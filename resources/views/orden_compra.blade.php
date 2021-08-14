@extends('layouts.orden_compra')

@section('titulo')
  Orden de Compra
@endsection

@section('company-info')
<img src="{{asset('image/logo.png') }}" style="width: 220px">
  <div style="font-size: 14px;"><strong>ORDEN DE COMPRA</strong></div>
@endsection

@section('title-info')
  <div style="float: right;"><strong>{{$datos->created_at}}</strong> </div>
  <div> 
    <strong>{{strtoupper($datos->empresa->nombre)}}</strong>
  </div>
@endsection
 
@section('invoice-info')
  <div><strong>No. Orden {{$datos->num_oc}}</strong></div>
  <div>
    <span>DIRECCION:</span> <span>{{ucwords($datos->empresa->direccion)}}</span>
  </div>
  <div>
    <span>RNC:</span> <span>{{$datos->empresa->rnc}}</span>
  </div>
  <div>
    <span>TELEFONO 1:</span> <span>{{$datos->empresa->telefono_empresa}}</span>
  </div>
  <div>
    <span>TELEFONO 2:</span> <span>{{$datos->empresa->telefono_contacto}}</span>
  </div>
  <div>
    <span>PAGINA WEB:</span> <span>{{$datos->empresa->web}}</span>
  </div>
@endsection

@section('invoice-info2')
  <div style="float: right;">
    <div>
      <span>PROVEEDOR:</span> <span>{{ucwords($datos->nombre_proveedor).' '.'('.$datos->cod_sp.'-'.$datos->cod_sp.')'}}</span>
    </div>
    <div>
      <span>TELEFO:</span> <span>{{$datos->telefono_provedor}}</span>
    </div>
    <div>
      <span>EMAIL:</span> <span>{{$datos->email_proveedor}}</span>
    </div>
    <div>
      <span>DIRECCION:</span> <span>{{ucwords($datos->direccion_proveedor)}}</span>
    </div>
  </div>
@endsection

@section('items')
  <table cellpadding="0" cellspacing="0">  
    <thead>
      <tr>
        <th colspan="3">Producto/s</th>
        <th>Codigo</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>% Descuento</th>
        <th>Monto descuento</th>
        <th>ITBIS</th>
        <th>Total</th>
      </tr>
    </thead>          
    <tbody>
      @foreach ($datos->productos as $data) 
        <tr data-iterate="item">
          <td colspan="3">{{ucwords($data->titulo.' '.$data->marca.' '.$data->categoria)}}</td>
          <td>{{$data->codigo}}</td>
          <td>{{$data->cantidad}}</td>
          <td>{{$datos->simbolo.' '.$data->precio}}</td>
          <td>{{$data->porc_desc}}</td>
          <td>{{$datos->simbolo.' '.$data->monto_desc}}</td>
          <td>{{$datos->simbolo.' '.$data->itbis}}</td>
          <td>{{$datos->simbolo.' '.$data->valor_neto}}</td>
        </tr>
      @endforeach
    </tbody>    
  </table>
@endsection

@section('totales')
  <div style="float: right;">
    <div>
      <span></span>
    </div>
   
    <div>
      <span>----------------------------</span>
    </div>
    <div>
      <span>BRUTO:</span> <span>{{}}</span>
    </div>
    <div>
      <span>DESCUENTO:</span> <span>{{}}</span>
    </div>
  
  </div>
@endsection

@section('footer')
 <table cellpadding="0" cellspacing="0">  
    <thead>
      <tr>
        <th>----------------------------</th>
        <th>----------------------------</th>
      </tr>
    </thead>          
    <tbody>
      <tr>        
        <td>ENC. COMPRAS:</td>
        <td>FIRMA AUTORIZADA:</td>
      </tr>
    </tbody>   
  </table>
@endsection
{{-- 




@section('firma')
  <table cellpadding="0" cellspacing="0">  
    <thead>
      <tr>
        <th>----------------------------</th>
        <th>----------------------------</th>
        <th>----------------------------</th>
      </tr>
    </thead>          
    <tbody>
      <tr>        
        <td>Aprobado por:</td>
        <td>Entregado por:</td>
        <td>Recibido por</td>
      </tr>
    </tbody>   
    <tfoot>
      <tr>        
        <td>Original: Contabilidad</td>
        <td>Copia: Vendedor</td>
        <td>Copia: Ventas</td>
        <td>Copia: Almacen</td>
      </tr>
    </tfoot> 
  </table>
@endsection --}}