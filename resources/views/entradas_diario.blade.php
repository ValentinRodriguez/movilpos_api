@extends('layouts.entradas_diario')

@section('titulo')
  Orden de Compra
@endsection

@section('company-info')
   <div style="font-size: 14px;"> 
    <strong>{{strtoupper($entrada[0]->empresa->nombre)}}</strong>
  </div>
  <div ><strong>Sistema De Contabilidad</strong></div>
  <div ><strong>Entradas de Diario</strong></div>
  <div ><strong>{{$entrada[0]->fecha}}</strong></div>
  <div ><strong>MONEDA {{$entrada[0]->empresa[0]->moneda}}</strong></div>
  
@endsection

@section('title-info')
<div style="float: right;"> </div>
 
@endsection

@section('invoice-info')
  <div><strong>No. entrada {{$entrada[0]->ref}}</strong></div>
  <div>
      <span>DETALLE:</span> <span>{{ucwords($entrada[0]->detalle_1)}}</span>
    </div>
  </div>
@endsection

@section('items')
  <table cellpadding="0" cellspacing="0">  
    <thead>
      <tr>
        <th colspan="3"></th>
        <th>Cuenta No.</th>
        <th>Departamento</th>
        <th>Ref</th>
        <th>Debe</th>
        <th>Haber</th>
      </tr>
    </thead>          
    <tbody>
    
      @foreach ($entrada as $data) 
        <tr data-iterate="item">
          <td colspan="3"></td>
          <td>{{$data->cuenta_no}}</td>
          <td>{{$data->departamento}}</td>
          <td></td>
          <td>{{$data->debito}}</td>
          <td>{{$data->credito}}</td>
        </tr>
      @endforeach
    </tbody>    
  </table>
@endsection

@section('totales')
  <div style="float: right;">

    <div>
      <span>{{$entrada[0]->tdebito}}</span>
      <span>{{$entrada[0]->tcredito}}</span>
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