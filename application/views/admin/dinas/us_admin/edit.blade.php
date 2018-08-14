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
                    <div class="card-title">Form Admin</div>
                  </div>
                  <form action="{{ base_url('Admin/update/'.$Admin->id_admin) }}" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="dinas">Username</label>
                      <input value="{{ $Admin->nama }}" name="nama" type="text" class="form-control" placeholder="Nama Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('nama'))
                        <small class="text-danger">{{ $errors->first('nama') }}</small>
                      @endif
                    </div>

                 <!--    <div class="form-group">
                      <label for="dinas">Passsword Lama</label>
                      <input  name="nama_sub_bidang" type="Passsword" class="form-control" placeholder="Nama Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('password_lama'))
                        <small class="text-danger">{{ $errors->first('password_lama') }}</small>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="dinas">Passsword Baru</label>
                      <input  name="nama_sub_bidang" type="Passsword" class="form-control" placeholder="Nama Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('Password_baru'))
                        <small class="text-danger">{{ $errors->first('Password_baru') }}</small>
                      @endif
                    </div> -->

                    <div class="form-group">
                      <label for="dinas">Email</label>
                      <input value="{{ $Admin->email }}" name="email" type="text" class="form-control" placeholder="Nama Dinas">
                      {{-- Validasi Field --}}
                      @if($errors->has('email'))
                        <small class="text-danger">{{ $errors->first('email') }}</small>
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
