@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-chart-bar"></i>
      </span> Data Keseluruhan
    </h3>
  </div>

  <div class="card shadow mb-3">
    <div class="card-header">
      Data Daerah Rawan
    </div>
    <div class="card-body">
      <div class="row justify-content-around">
        <div class="col-3">
          <div class="media">
            <i class="fas fa-circle fa-2x mt-3 mr-3 text-success"></i>
            <div class="media-body">
              <p class="mb-0">Rawan Rendah</p>
              <h1 class="mt-0">9 <span class="small font-weight-normal h5">Lokasi (18.0%)</span></h1>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="media">
            <i class="fas fa-circle fa-2x mt-3 mr-3 text-warning"></i>
            <div class="media-body">
              <p class="mb-0">Rawan Sedang</p>
              <h1 class="mt-0">5 <span class="small font-weight-normal h5">Lokasi (10.0%)</span></h1>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="media">
            <i class="fas fa-circle fa-2x mt-3 mr-3 text-danger"></i>
            <div class="media-body">
              <p class="mb-0">Rawan Tinggi</p>
              <h1 class="mt-0">6 <span class="small font-weight-normal h5">Lokasi (12.0%)</span></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer text-muted text-center">
      <a href="{{ route('admin') }}" class="btn btn-primary rounded-pill btn-sm">Lihat Detail</a>
    </div>
  </div>
  
</div>
@endsection