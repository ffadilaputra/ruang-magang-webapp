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
                  <?= form_open('anggota/store') ?>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="dinas">Nim Anggota</label>
                      <input name="nim" type="text" class="form-control" placeholder="Masukkan Nim anggota">
                      {{-- Validasi Field --}}
                      @if($errors->has('nim'))
                        <small class="text-danger">{{ $errors->first('nim') }}</small>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="dinas">Nama</label>
                      <input name="nama_anggota" type="text" class="form-control" placeholder="Masukkan nama anggota">
                      {{-- Validasi Field --}}
                      @if($errors->has('nama_anggota'))
                        <small class="text-danger">{{ $errors->first('nama_anggota') }}</small>
                      @endif
                    </div>
                  </div>
                  <div class="card-action">
                    <input type="submit" class="btn btn-success">
                    <input type="reset" class="btn btn-danger">
                  </div>
                  </form>
                </div>
          </div>
        </div>
      </div>
    </div>
@endsection
