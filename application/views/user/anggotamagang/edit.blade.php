@extends('user.template')

@section('content')
    <div class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-8">
              <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form Anggota Magang</div>
                  </div>
                   <?= form_open('anggota/update/'.$anggotamagang->id_anggota) ?>
                    <div class="card-body">
                    <div class="form-group">
                      <label for="dinas">Nama Anggota</label>
                      <input value="{{ $anggotamagang->nama_anggota }}" name="nama_anggota" type="text" class="form-control" placeholder="Nama Anggota">
                      {{-- Validasi Field --}}
                      @if($errors->has('nama_anggota'))
                        <small class="text-danger">{{ $errors->first('nama_anggota') }}</small>
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
