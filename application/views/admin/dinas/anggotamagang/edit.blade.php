@extends('admin.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Halaman Anggota Magang</h4>
        </div>
        <div class="row">
          <div class="col-sm-8">
              <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form Anggota Magang</div>
                  </div>
                  <form action="{{ base_url('anggotamagang/update/'.$anggotamagang->id_anggota) }}" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="dinas">Nama Anggota</label>
                      <input value="{{ $anggotamagang->nama }}" name="nama" type="text" class="form-control" placeholder="Nama Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('nama'))
                        <small class="text-danger">{{ $errors->first('nama') }}</small>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="dinas">Nim</label>
                      <input value="{{ $anggotamagang->nim }}" name="nim" type="text" class="form-control" placeholder="Nama Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('nim'))
                        <small class="text-danger">{{ $errors->first('nim') }}</small>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="dinas">Universitas</label>
                      <input value="{{ $anggotamagang->universitas }}" name="universitas" type="text" class="form-control" placeholder="Nama Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('universitas'))
                        <small class="text-danger">{{ $errors->first('universitas') }}</small>
                      @endif
                    </div>

                 
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                  </div>
                  </form>
                </div>
          </div>
        </div>
      </div>
    </div>
@endsection
