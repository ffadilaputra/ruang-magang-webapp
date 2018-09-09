@extends('user.template')

@section('content')
<div class="content">
  <div class="container-fluid">
      <div class="page-header">
          <h4 class="page-title">Status Berkas anda</h4>
        </div>
      <div class="row">
        <div class="col-md-8">
          <div class="card card-round">
            <div class="card-body">
              <div class="card-list">
                <div class="item-list">
                  <div class="info-user ml-3">
                  <div class="username">Status Kesbangpol</div>
                    <div class="status">
                      @if($status->status_kesbangpol == 1)
                        <span class="badge badge-count badge-success">Terverifikasi</span>
                      @else
                      <span class="badge badge-count badge-danger">Belum Terverifikasi</span>
                      @endif
                    </div>
                  </div>
                  <a href="#" class="btn btn-add">
                    <i class="flaticon-error"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-round">
              <div class="card-body">
                <div class="card-list">
                  <div class="item-list">
                    <div class="info-user ml-3">
                    <div class="username">Status Dinas</div>
                      <div class="status">
                          @if($status->status_dinas == 1)
                          <span class="badge badge-count badge-success">Terverifikasi</span>
                        @else
                        <span class="badge badge-count badge-danger">Belum Terverifikasi</span>
                        @endif
                    </div>
                    </div>
                    <a href="#" class="btn btn-add">
                      <i class="flaticon-error"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-3">
        </div>
      </div>
  </div>
</div>
@endsection
