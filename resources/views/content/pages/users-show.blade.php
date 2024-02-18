@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Editar usuario')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Editar usuario</h5> 
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('pages-users-update') }}" > 
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname">Nombre completo</label>
                  <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="basic-default-fullname" placeholder="Juan Perez" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-email">Email</label>
                    <div class="input-group input-group-merge">
                      <input type="text" name="email" value="{{ $user->email }}" id="basic-default-email" class="form-control" placeholder="juan.perez" aria-label="juan.perez" aria-describedby="basic-default-email2" />
                      <span class="input-group-text" id="basic-default-email">@example.com</span>                      
                    </div>
                    <br>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Password Nuevo</label>
                    <input type="password" name="new_password"  class="form-control" id="basic-default-password" placeholder="Secret Password" />
                  </div>
                
                  
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection