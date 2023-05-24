@extends('layout.master')
@section('title','List Pendaftar')
@section('content')

<!-- /.card -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List Calon Pegawai PT. GINTING JAYA ENERGI</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Lengkap</th>
          <th>Jabatan</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>1</td>
          <td>Farrel Favian</td>
          <td>HSE Officer</td>
          <td>Palembang</td>
          <td>18-05-02</td>
          <td>Laki-Laki</td>
          <td>Jalan Sersan Wahab</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Kevin Sanjaya</td>
          <td>Driller</td>
          <td>Jakarta</td>
          <td>20-02-03</td>
          <td>Laki-Laki</td>
          <td>Jalan Talang Keramat</td>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection