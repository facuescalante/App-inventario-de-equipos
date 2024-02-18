@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Backups: Disaster Recovery')

@section('content')
<h4>Backups: Disaster Recovery</h4>
<a href="{{ route('pages-sos-create')}}" class="btn btn-primary" style="margin-bottom: 15px">Crear nueno Backup</a>
<div class="card">
    
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Estado</th>
            <th>Creado en</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
           {{-- @foreach ($sos as $so)
          <tr>
                <td>{{ $so->id }}</td>
                <td>{{ $so->name }}</td>
                <td>{{ $so->version }}</td>
                <td>
                  @if ($so->active)
                  <a href="{{ route('pages-sos-switch', $so->id) }} ">
                  <span class="badge bg-label-success">Activo</span></a>
                  @else
                  <a href="{{ route('pages-sos-switch', $so->id) }} ">
                  <span class="badge bg-label-danger">Inactivo</span></a>
                                         
                  @endif                                        
                </td>
                <td>{{ $so->created_at }}</td>
                <td><a href="{{ route('pages-sos-show', $so->id) }}" >Editar </a> | <a href="{{ route('pages-sos-destroy', $so->id) }}" >Borrar </a></td>
          </tr>
          @endforeach--}}
         </tbody>
      </table>
    </div>
  </div>


@endsection