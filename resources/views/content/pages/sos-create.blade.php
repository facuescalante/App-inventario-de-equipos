@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Crear O.S nuevo')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
 @endif
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Crear O.S nuevo</h5> 
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('pages-sos-store') }}" > 
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Nombre</label>
                  <input type="text" name="name" class="form-control" id="basic-default-fullname" placeholder="Windows"  required/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Version</label>
                    <input type="text" name="version" class="form-control" id="basic-default-fullname" placeholder="11"  required/>
                  </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Descripción</label>
                    <input type="text" name="description" class="form-control" id="basic-default-fullname" placeholder="..."  required/>
                  </div>
                    <br>                              
                  
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection