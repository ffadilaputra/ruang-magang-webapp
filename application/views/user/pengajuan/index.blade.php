@extends('user.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Verifikasi Berkas</h4>
        </div>
        <div class="row">
						<div class="col-md-12">
              <div class="row row-card-no-pd">
                <div class="col-md-4 mt-3 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <p class="fw-mediumbold mt-1">Nama Pengguna</p>
                    <h4 class="text-primary"><b>{{ $user['nama'] }}</b></h4>
                      <a href="#" class="btn btn-primary btn-full text-left mt-3 mb-3"><i class="la la-plus"></i> Berkas</a>
                    </div>
                    <div class="card-footer mt-auto">
                      <ul class="nav">
                        <?= form_open('berkas/submit') ?>
                          <input type="hidden" name="id_pengaju" value="{{ $user['id_user'] }}">
                          <input type="hidden" name="status_kesbangpol" value="0">
                          <input type="hidden" name="status_dinas" value="0">
                          <li class="nav-item"><input type="submit" class="btn btn-default btn-warning"><i class=""></i></li>
                        <?= form_close() ?>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-7 col-md-3">
                    <div class="card card-stats card-round">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-error text-danger"></i>
                            </div>
                          </div>
                          <div class="col-8">
                            <div class="numbers">
                              <p class="card-category">Verifikasi</p>
                              <h4 class="card-title">Kesbangpol</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
              <div class="col-sm-5 col-md-3">
                  <div class="card card-stats card-round">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-5">
                          <div class="icon-big text-center">
                            <i class="flaticon-error text-danger"></i>
                          </div>
                        </div>
                        <div class="col-7 col-stats">
                          <div class="numbers">
                            <p class="card-category">Verifikasi</p>
                            <h4 class="card-title">Dinas</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
					</div>
      </div>
    </div>
@endsection
