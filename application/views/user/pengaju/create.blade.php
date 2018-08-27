@extends('user.template')

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
                    <div class="card-title">Form Sub Bidang Dinas</div>
                  </div>
                  <?= form_open('pengaju/store') ?>
                 <div class="card-body">

                        <input name="id_user" type="hidden" value="{{ $user['id_user'] }}">
                      <div class="form-group">
                        <label for="dinas">Nama Lengkap</label>
                        <input type="text" name="nama_pengaju" class="form-control" placeholder="Nama Lengkap">
                        {{-- Validasi Field --}}
                        @if($errors->has('nama_pengaju'))
                          <small class="text-danger">{{ $errors->first('nama_pengaju') }}</small>
                        @endif
                      </div>
                    <div class="form-group">
                      <label for="dinas">Nama Dinas Tujuan</label>
                      <select class="form-control" name="dinas_tujuan" id="">
                          <option value="0">-- Pilih --</option>
                          @foreach($dinas as $list)
                            <option  value="{{ $list->id_dinas }}">{{ $list->nama_dinas }}</option>
                          @endforeach
                      </select>
                      {{-- Validasi Field --}}
                      @if($errors->has('dinas_tujuan'))
                        <small class="text-danger">{{ $errors->first('dinas_tujuan') }}</small>
                      @endif
                    </div>
                    <div class="form-group">
                        <label for="asal_instansi">Asal Instasi</label>
                        <input name="asal_instansi" type="text" class="form-control" placeholder="Masukkan nama sub bidang">
                        {{-- Validasi Field --}}
                        @if($errors->has('asal_instansi'))
                          <small class="text-danger">{{ $errors->first('asal_instansi') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="jml_pengaju">Jumlah Anggota</label>
                        <input name="jml_pengaju" type="text" class="form-control" placeholder="Masukkan nama sub bidang">
                        {{-- Validasi Field --}}
                        @if($errors->has('jml_pengaju'))
                          <small class="text-danger">{{ $errors->first('jml_pengaju') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                      <label for="dinas">Sub Dinas</label>
                      <select class="form-control" name="sub_dinas_tujuan" id="">
                          <option value="0">-- Pilih --</option>
                          @foreach($sub as $list)
                            <option  value="{{ $list->id_sub_bidang }}">{{ $list->nama_sub_bidang }}</option>
                          @endforeach
                      </select>
                      {{-- Validasi Field --}}
                      @if($errors->has('dinas_tujuan'))
                        <small class="text-danger">{{ $errors->first('dinas_tujuan') }}</small>
                      @endif
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                  </div>
                  <?= form_close() ?>
                </div>
          </div>
        </div>
      </div>
    </div>
@endsection
