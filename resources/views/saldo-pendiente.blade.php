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
    
     @foreach ($cxp as $data1) 
        <tr data-iterate="item">
          <td colspan="3"></td>
          <td>{{$data1->nom_sp}}</td>
        <!--   @if ($data1->fecha) < 30)
          <td>{{$data1->valor}}</td>
          @endif
         
         
          <td>{{$data1->dia31a60}}</td>
          <td>{{$data1->dia61a90}}</td>
          <td>{{$data1->dia91a120}}</td>
          <td>{{$data1->mas120}}</td>-->
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