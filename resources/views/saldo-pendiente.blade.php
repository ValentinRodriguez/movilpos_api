@extends('layouts.saldo-pendiente')

@section('titulo')
  Orden de Compra
@endsection

@section('company-info')
   <div style="font-size: 14px;"> 
    <strong></strong>
  </div>
  <div ><strong>Cuentas Por Pagar</strong></div>
  <div ><strong>Saldo Pendiente</strong></div>
  
@endsection

@section('title-info')
<div style="float: right;"> </div>
 
@endsection

@section('items')
  <table cellpadding="0" cellspacing="0">  
    <thead>
      <tr>
        <th colspan="3"></th>
        <th>Suplidor</th>
        <th>De 1 a 30</th>
        <th>De 31 a 60</th>
        <th>De 61 a 90</th>
        <th>De 91 a 120</th>
        <th>Mas de 120</th>
        <th>Total</th>
      </tr>
    </thead>          
    <tbody>
    
      @foreach ($resultado as $proveedor) 

        <tr data-iterate="item">
          <td colspan="3"></td>
          <td>{{$proveedor['proveedor']}}</td>
          <td>${{number_format($proveedor['de0a30'], 2, '.', ',')}}</td>
          <td>${{number_format($proveedor['de31a60'], 2, '.', ',')}}</td>
          <td>${{number_format($proveedor['de61a90'], 2, '.', ',')}}</td>
          <td>${{number_format($proveedor['de91a120'], 2, '.', ',')}}</td>
          <td>${{number_format($proveedor['mas120'], 2, '.', ',')}}</td>
          <td>${{number_format($proveedor['pendiente'], 2, '.', ',')}}</td>
        </tr>
      @endforeach
    </tbody>    
  </table>
@endsection

@section('totales')
  <div style="float: right;">

    <div>
      <span></span>
      <span></span>
    </div>
  </div>
@endsection

@section('footer')
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
 
  </table>
@endsection --}}