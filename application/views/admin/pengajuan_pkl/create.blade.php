@extends('admin.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Halaman Pengajuan PKl</h4>
        </div>
        <div class="row">
          <div class="col-sm-8">
              <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form Pengajuan PKL</div>
                  </div>
                  <form action="{{ base_url('pengajuan_pkl/store') }}" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="pengajuan_pkl">Id Pengaju</label>
                      <input name="id_pengaju" type="text" class="form-control" placeholder="Id Pengaju">
                      {{-- Validasi Field --}}
                      @if($errors->has('id_pengaju'))
                        <small class="text-danger">{{ $errors->first('id_pengaju') }}</small>
                      @endif
                    </div>

                     <div class="form-group">
                      <label for="pengajuan_pkl">Status Kesbangpol</label>
                      <input name="status_kesbangpol" type="text" class="form-control" placeholder="Status Kesbangpol">
                      {{-- Validasi Field --}}
                      @if($errors->has('status_kesbangpol'))
                        <small class="text-danger">{{ $errors->first('status_kesbangpol') }}</small>
                      @endif
                    </div>
                    
                     <div class="form-group">
                      <label for="pengajuan_pkl"></label>
                      <input name="status_dinas" type="text" class="form-control" placeholder="Status Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('status_dinas'))
                        <small class="text-danger">{{ $errors->first('status_dinas') }}</small>
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
