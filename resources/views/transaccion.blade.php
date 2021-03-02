@extends('layouts.transacciones')

@section('titulo')
  Reporte de transacciones
@endsection

@section('company-info')
  <div> <strong>{{strtoupper($datos->empresa->nombre)}}</strong></div>
  <div style="font-size: 14px;"><strong>Reporte de Transacciones de Inventario</strong></div>
  <div style="font-size: 14px;"><strong>({{$datos->id_tipomov}}) {{strtoupper($datos->titulo_mov)}}</strong></div>
@endsection

@section('title-info')
  <div style="float: right;"><strong>{{$datos->created_at}}</strong> </div>
  <div><strong>No. {{$datos->numerosecuencia}}</strong></div>
@endsection

@section('invoice-info')
  <div>
    <span>ALMACEN ORIGEN:</span> <span>{{$datos->bodega_origen}}</span>
  </div>
  <div>
    <span>ALMACEN DESTINO:</span> <span>{{$datos->bodega_destino}}</span>
  </div>
  <div>
    <span>CLIENTE:</span> <span>{{$datos->veclientes_nombre}}({{$datos->tipo_cliente.'-'.$datos->sec_cliente}})</span>
  </div>
  <div>
    <span>TELEFONO 1:</span> <span>{{$datos->veclientes_telefono_casa}}</span>
  </div>
  <div>
    <span>TELEFONO 2:</span> <span>{{$datos->veclientes_telefono_oficina}}</span>
  </div>
  <div>
    <span>CELULAR:</span> <span>{{$datos->veclientes_celular}}</span>
  </div>
@endsection

@section('invoice-info2')
  <div style="float: right;">
    <div>
      <span>VENDEDOR:</span> <span>{{ucwords($datos->vendedor_primernombre.' '.$datos->vendedor_primerapellido)}}</span>
    </div>
    <div>
      <span>ENTRADA:</span> <span>*******</span>
    </div>
    <div>
      <span>ORDEN:</span> <span>{{$datos->num_doc}}</span>
    </div>
    <div>
      <span>COTIZACION:</span> <span>{{$datos->cotizacion_no}}</span>
    </div>
    <div>
      <span>DEPARTAMENTO:</span> <span>{{$datos->nodepartamento_titulo}}</span>
    </div>
  </div>
@endsection

@section('items')
  <table cellpadding="0" cellspacing="0">  
    <thead>
      <tr>
        <th colspan="3">Producto/s</th>
        <th>Unidades</th>
        <th>Cantidad a Despachar</th>
        <th>Cantidad Pendiente</th>
      </tr>
    </thead>          
    <tbody>
      @foreach ($datos->productos as $data) 
        <tr data-iterate="item">
          <td colspan="3">{{($data->codigo).' '.ucwords($data->marca.' '.$data->categoria)}}</td>
          <td>{{$data->cantidad1}}</td>
          <td></td>
          <td></td>
        </tr>
      @endforeach
    </tbody>    
  </table>
@endsection

@section('footer')
  <div><strong>OBSERVACIONES:</strong>{{$datos->comentario}} Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis modi ut necessitatibus delectus assumenda amet unde porro quis nobis</div>
  <div><strong>TRANSPORTISTA:</strong> {{$datos->transportista_nombre}}</div>
  <div><strong>TELEFONO:</strong> {{$datos->transportista_telefono}}</div>
  <div><strong>PLACA:</strong>{{$datos->placa}}</div>
@endsection

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
@endsection