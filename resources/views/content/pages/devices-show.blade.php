@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Crear Device')
@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bloodhound/bloodhound.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('js/forms-selects.js')}}"></script>
<script src="{{asset('js/forms-tagify.js')}}"></script>
<script src="{{asset('js/forms-typeahead.js')}}"></script>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Editar device</h5> 
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('pages-devices-update') }}" enctype="multipart/form-data" > 
                @csrf
                <input type="hidden" name="device_id" value="{{ $device->id }}">
                <img src="{{ $device->image_url }}" alt=""> 
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Imagen</label>
                  <input type="file" name="fileLogo" class="form-control" id="basic-default-fullname"  />
                </div>
              
                <div class="mb-3">
                  <label for="selectpickerIcons" class="form-label">Tipo de dispositivo</label>
                  
                  <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" >
                      @forelse ($types as $type)
                      <option data-icon="bx bx-{{$type->icon}}" @if($type->id == $device->type_id) selected @endif value="{{$type->id}}">{{$type->name}}</option>
                      @empty
                      @endforelse
                  </select>
              </div>
              <div class="mb-3">
                  <label for="selectpickerIcons2" class="form-label">Sistema Operativo</label>
                  <select class="selectpicker w-100 show-tick" id="selectpickerIcons2" data-icon-base="bx" data-tick-icon="">
                      @forelse ($sos as $so)
                      <option value="{{$so->id}}" @if($so->id == $device->sos_id) selected @endif>{{$so->name}}</option>
                      @empty
                      @endforelse
                  </select>
              </div>
                               
              <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Nombre</label>
                  <input type="text" name="name" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->name }}" required/>
                </div>
              <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Descripción</label>
                  <input type="text" name="description" class="form-control" id="basic-default-fullname" placeholder="Categoria de Monitores" value="{{ $device->description }}" required/>
                </div>  
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Numero de serie</label>
                  <input type="text" name="serial_number" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->serial_number }}" required/>
                </div>      
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Mac</label>
                  <input type="text" name="mac_address" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->mac_address }}" required/>
                </div>     
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Dirección Ip</label>
                  <input type="text" name="ip_address" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->ip_address }}" required/>
                </div>  
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Modelo</label>
                  <input type="text" name="model" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->model }}" required/>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Fabrica</label>
                  <input type="text" name="manufacturer" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->manufacturer }}" required/>
                </div> 
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Firmware</label>
                  <input type="text" name="firmware" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->firmware }}" required/>
                </div> 
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Stock</label>
                  <input type="text" name="stock" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->stock }}" required/>
                </div>  
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Disco Duro</label>
                  <input type="text" name="hdd" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->hdd }}" required/>
                </div> <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Memoria Ram</label>
                  <input type="text" name="ram" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->ram }}" required/>
                </div> 
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Cpu</label>
                  <input type="text" name="cpu" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->cpu }}" required/>
                </div> 
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Tarjeta grafica</label>
                  <input type="text" name="gpu" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->gpu }}" required/>
                </div>   
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Slots totales</label>
                  <input type="text" name="total_slots" class="form-control" id="basic-default-fullname" placeholder="" value="{{ $device->total_slots }}" required/>
                </div> 
                <div class="mb-3">
                  <label class="form-label" for="FormControlTextarea1">Histórico</label>
                  <input type="text" name="history" class="form-control" id="basic-default-fullname" placeholder=""  required/>
                </div> 
                     
                       
                                               
                  
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection