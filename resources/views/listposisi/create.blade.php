@extends('layout.master')
@section('title','Tambah Jabatan')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Tambahkan Jabatan untuk Pelamar</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form>

            <div class="card-body">
                <form action="{{ url('admin/listposisi') }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label>Kode Jabatan</label>
                        <input type="text" name="kode_jabatan" class="form-control @error('kode_jabatan') is-invalid @enderror" value="{{ old('kode_jabatan', $jabatan->kode_jabatan) }}">
                    </div>
                    <div class="form-group">
                        <label>Nama Jabatan</label>
                        <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan', $jabatan->jabatan) }}">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi"  placeholder="Masukan deskripsi atau syarat jabatan" class="form-control @error('desikripsi') is-invalid @enderror">{{ old('deskripsi',$jabatan->deskripsi) }}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection