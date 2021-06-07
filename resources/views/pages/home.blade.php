@extends('layouts.app')
@section('title')
  Pemetaan Daerah Rawan Longsor
@endsection

@section('content')
<main>
  <div class="container content">

    <div class="row">
      <div class="col-12">
        <div class="card header-card text-white shadow">
          <div class="card-body">
            <h1><i class="fad fa-map-marked-alt mr-2"></i> Peta Zona Rawan</h1>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-12">
        <div class="card map-card shadow-sm">
          <div class="card-body">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13415.65232772802!2d124.84158037631818!3d1.4744423090520349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1622990065385!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-around data-keseluruhan">
      <div class="col-sm-3">
        <h3><i class="fas fa-circle fa-lg text-tinggi mr-2"></i> Rawan Tinggi <span class="float-right">6(12.0%)</span></h3>
      </div>
      <div class="col-sm-3">
        <h3><i class="fas fa-circle fa-lg text-sedang mr-2"></i> Rawan Sedang <span class="float-right">6(12.0%)</span></h3>
      </div>
      <div class="col-sm-3">
        <h3><i class="fas fa-circle fa-lg text-rendah mr-2"></i> Rawan Rendah <span class="float-right">6(12.0%)</span></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card header-card text-white shadow">
          <div class="card-body">
            <h1><i class="fad fa-chart-line mr-2"></i> Data Zona Rawan</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-12">
        <table id="dataTable" class="table table-bordered table-responsive-sm text-center text-nowrap shadow">
          <thead class="thead-light">
            <tr>
              <th scope="col">Kecamatan</th>
              <th scope="col">Jumlah Lokasi</th>
              <th scope="col">Rata - rata</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kecamatan Satu</td>
              <td>12</td>
              <td>
                <span class="status-sedang">Rawan Sedang</span>
              </td>
            </tr>
            <tr>
              <td>Kecamatan Dua</td>
              <td>8</td>
              <td>
                <span class="status-rendah">Rawan Sedang</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</main>
@endsection

@push('addon-style')
  <style>

  </style>
@endpush
@push('addon-script')
  <script>

  </script>
@endpush