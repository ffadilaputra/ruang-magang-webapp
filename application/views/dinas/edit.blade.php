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
                  <form action="{{ base_url('dinas/update/'.$dinas->id_dinas) }}" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="dinas">Nama Dinas</label>
                      <input value="{{ $dinas->nama_dinas }}" name="nama_dinas" type="text" class="form-control" placeholder="Nama Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('nama_dinas'))
                        <small class="text-danger">{{ $errors->first('nama_dinas') }}</small>
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
