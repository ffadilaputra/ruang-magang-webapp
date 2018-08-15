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
                    <div class="card-title">Form user Dinas</div>
                  </div>
                  <form action="{{ base_url('Usdinas/store') }}" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="dinas">Username</label>
                      <input name="nama" type="text" class="form-control" placeholder="Masukkan Username">
                      {{-- Validasi Field --}}
                      @if($errors->has('nama'))
                        <small class="text-danger">{{ $errors->first('nama') }}</small>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="dinas">Password</label>
                      <input name="password" type="Password" class="form-control" placeholder="Masukkan Password Anda">
                      {{-- Validasi Field --}}
                      @if($errors->has('password'))
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="dinas">Email</label>
                      <input name="email" type="text" class="form-control" placeholder="Masukkan Email Anda">
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
