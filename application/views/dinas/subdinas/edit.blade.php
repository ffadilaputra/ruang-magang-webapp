@extends('admin.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Halaman Dinas</h4>
        </div>
        <div class="row">
          <div class="col-sm-8">
              <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form Dinas</div>
                  </div>
                  <form action="{{ base_url('subdinas/update/'.$subdinas->id_sub_bidang) }}" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="dinas">Nama Dinas</label>
                      <input value="{{ $subdinas->nama_dinas }}" name="nama_dinas" type="text" class="form-control" placeholder="Nama Dinas">

                      {{-- Validasi Field --}}
                      @if($errors->has('nama_dinas'))
                        <small class="text-danger">{{ $errors->first('nama_dinas') }}</small>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="dinas">Nama Sub bidang</label>
                      <input value="{{ $subdinas->nama_sub_bidang }}" name="nama_sub_bidang" type="text" class="form-control" placeholder="Nama Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('nama_sub_bidang'))
                        <small class="text-danger">{{ $errors->first('nama_sub_bidang') }}</small>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="dinas">Kuota</label>
                      <input value="{{ $subdinas->kuota }}" name="kuota" type="text" class="form-control" placeholder="Nama Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('kuota'))
                        <small class="text-danger">{{ $errors->first('kuota') }}</small>
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
