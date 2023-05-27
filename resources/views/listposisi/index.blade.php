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
          <th>#</th>
          <th>Jabatan</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($jabatan as $row)
            <tr>
              <th scope="row">{{ $row->kode_jabatan }}</th>
              <td>{{$row->jabatan}}</td>
              <td>{{$row->deskripsi}}</td>
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
          @endforeach
        <a href ="{{url('/listposisi/create')}}" class="btn btn-success">Tambah Jabatan +</a>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection