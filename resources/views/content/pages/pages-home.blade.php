@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>
<div class="row">
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
      <div class="card">
        <div class="card-body text-center">
          <div class="avatar avatar-md mx-auto mb-3">
            <span class="avatar-initial rounded-circle bg-label-info"><i class='bx bxs-chip' style='color:#beea4b'  ></i></span>
          </div>
          <span class="d-block mb-1 text-nowrap">Sistemas</span>
          <h2 class="mb-0">{{ $n_sos }}</h2>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
      <div class="card">
        <div class="card-body text-center">
          <div class="avatar avatar-md mx-auto mb-3">
            <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-printer' style='color:#1ec8e6'  ></i></span>
          </div>
          <span class="d-block mb-1 text-nowrap">Tipos</span>
          <h2 class="mb-0">{{ $n_types }}</h2>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
      <div class="card">
        <div class="card-body text-center">
          <div class="avatar avatar-md mx-auto mb-3">
            <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bxs-devices' style='color:#e87153'  ></i></i></span>
          </div>
          <span class="d-block mb-1 text-nowrap">Dispositivos</span>
          <h2 class="mb-0">{{ $n_devices }}</h2>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
      <div class="card">
        <div class="card-body text-center">
          <div class="avatar avatar-md mx-auto mb-3">
            <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bxs-report' style='color:#759bd2'  ></i></span>
          </div>
          <span class="d-block mb-1 text-nowrap">Reportes</span>
          <h2 class="mb-0">{{ $n_reports }}</h2>
        </div>
      </div>
    </div>
   
    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
      <div class="card">
        <div class="card-body text-center">
          <div class="avatar avatar-md mx-auto mb-3">
            <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bxs-file-archive' style='color:#84964c'  ></i></span>
          </div>
  
          <span class="d-block mb-1 text-nowrap">Backups</span>
          <h2 class="mb-0">{{ $n_backups }}</h2>
        </div>
      </div>
    </div>
  </div>
@endsection
