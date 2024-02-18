@php
$configData = Helper::appClasses();
@endphp

@extends('layouts.layoutMaster') <!-- Asegúrate de que el nombre de la plantilla sea correcto -->

@section('title', 'Dispositivos')


@section('content')
<h4>Dispositivos</h4>
<a href="{{ route('pages-devices-create') }}" class="btn btn-primary" style="margin-bottom: 15px">Añadir nuevo dispositivo</a>
<a href="{{ route('pages-devices-export') }}" class="btn btn-warning" style="margin-bottom: 15px">Exportar lista en excel</a>
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Creado en</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($devices as $device)
                <tr>
                    <td>{{ $device->id }}</td>
                    <td>{{ $device->name }}</td>
                    <td>
                        
                         @if ($device->active)
                              <a href="{{ route('pages-devices-switch', $device->id) }}">
                                  <span class="badge bg-label-success">Activo</span>
                              </a>
                          @else
                              <a href="{{ route('pages-devices-switch', $device->id) }}">
                                  <span class="badge bg-label-danger">Inactivo</span>
                              </a>
                          @endif
                      </td>
                      
                      </td>
                    
                    <td>{{ $device->created_at }}</td>
                    <td>
                        <a href="{{ route('pages-devices-show', $device->id) }}">Editar</a> |
                        <a href="{{ route('pages-devices-destroy', $device->id) }}">Borrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
