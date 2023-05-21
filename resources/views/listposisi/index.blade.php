@extends('layout.master')
@section('title','List Posisi')
@section('content')

<!-- /.card -->
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title" >List Posisi / Jabatan yang dilamar</h3>
    </div>    
    <!-- /.card-header -->
    <div class="card-body text-left">
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Jabatan</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Rig Superintendent</td>
          <td>Sertifikat LSP "PPT MIGAS" Sertifikasi (APPS) No.1 & 2</td>
        </td>
        <td class="project-actions">
            <a class="btn btn-info btn-sm" href="#">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
            </a>
            <a class="btn btn-danger btn-sm" href="#">
                <i class="fas fa-trash">
                </i>
                Delete
            </a>
        </td>
        </tr>
        <tr>
          <td>Tool Pusher</td>
          <td>Sertifikat LSP "PPT MIGAS" Sertifikasi (OUPS) No.3
          </td>
        </td>
        <td class="project-actions">
            <a class="btn btn-info btn-sm" href="#">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
            </a>
            <a class="btn btn-danger btn-sm" href="#">
                <i class="fas fa-trash">
                </i>
                Delete
            </a>
        </td>
        </tr>
        <tr>
          <td>Driller</td>
          <td>Sertifikat LSP "PPT MIGAS" Sertifikasi (OMPS)
          </td>
        </td>
        <td class="project-actions">
            <a class="btn btn-info btn-sm" href="#">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
            </a>
            <a class="btn btn-danger btn-sm" href="#">
                <i class="fas fa-trash">
                </i>
                Delete
            </a>
        </td>
        </tr>
        <tr>
          <td>Derrickman</td>
          <td>Sertifikat LSP "PPT MIGAS" Sertifikasi (OLPS) No.5
          </td>
        </td>
        <td class="project-actions">
            <a class="btn btn-info btn-sm" href="#">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
            </a>
            <a class="btn btn-danger btn-sm" href="#">
                <i class="fas fa-trash">
                </i>
                Delete
            </a>
        </td>
        </tr>
        <tr>
          <td>HSE Officer</td>
          <td>Sertifikasi Operator Pesawat Angkat Min Kelas B No.7
          </td>
        </td>
        <td class="project-actions">
            <a class="btn btn-info btn-sm" href="#">
                <i class="fas fa-pencil-alt">
                </i>
                Edit
            </a>
            <a class="btn btn-danger btn-sm" href="#">
                <i class="fas fa-trash">
                </i>
                Delete
            </a>
        </td>
        </tr>
        <a href ="#" class="btn btn-success">Tambah Jabatan +</a>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection