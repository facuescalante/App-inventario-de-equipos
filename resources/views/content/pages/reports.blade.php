@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Reportes en PDF')

@section('content')
<h4>Reportes en PDF</h4>
<a href="{{ route('pages-reports-create')}}" class="btn btn-primary" style="margin-bottom: 15px">Crear nuevo Reporte</a>
<div class="card">
    
    <div class="table text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Creado en</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
           @foreach ($reports as $report)
          <tr>
                <td>{{ $report->id }}</td>
                <td>{{ $report->created_at }}</td>
                                 
                <td>

                    <a href="/storage/pdf/{{ $report->url }}" target="_blank">Descargar</a> | <a href="{{ route('pages-reports-delete', $report->id) }}" >Borrar </a></td>
          </tr>
          @endforeach
         </tbody>
      </table>
    </div>
  </div>


@endsection