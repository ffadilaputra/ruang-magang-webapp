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
                    <div class="card-title">Form Sub Bidang Dinas</div>
                  </div>
                  <?= form_open('subdinas/store') ?>
                    <div class="card-body">
                    <div class="form-group">
                      <label for="dinas">Nama Dinas</label>
                      <select class="form-control" name="nama_dinas" id="">
                          <option value="0">-- Pilih --</option>
                          @foreach($dinas as $list)
                            <option  value="{{ $list->nama_dinas }}">{{ $list->nama_dinas }}</option>
                          @endforeach
                      </select>
                      {{-- Validasi Field --}}
                      @if($errors->has('nama_dinas'))
                        <small class="text-danger">{{ $errors->first('nama_dinas') }}</small>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="dinas">Nama Sub Bidang</label>
                      <input name="nama_sub_bidang" type="text" class="form-control" placeholder="Masukkan nama sub bidang">
                      {{-- Validasi Field --}}
                      @if($errors->has('nama_sub_bidang'))
                        <small class="text-danger">{{ $errors->first('nama_sub_bidang') }}</small>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="dinas">Kuota</label>
                      <input name="kuota" type="text" class="form-control" placeholder="Masukkan Kuota Magang">
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
