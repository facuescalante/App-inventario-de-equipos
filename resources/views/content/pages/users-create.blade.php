@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Crear usuario')

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
              <h5 class="mb-0">Crear nuevo usuario</h5> 
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('pages-users-store') }}" > 
                @csrf
                
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Nombre completo</label>
                  <input type="text" name="name" class="form-control" id="basic-default-fullname" placeholder="Juan Perez"  required/>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-email">Email</label>
                    <div class="input-group input-group-merge">
                      <input type="text" name="email" id="basic-default-email" class="form-control" placeholder="juan.perez"  aria-label="juan.perez" aria-describedby="basic-default-email2" required/>
                      <span class="input-group-text" id="basic-default-email">@example.com</span>
                    </div>
                    <br>
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Password</label>
                  <input type="password" name="password" class="form-control" id="basic-default-password" placeholder="Secret Password" required/>
                </div>
                
                  
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection