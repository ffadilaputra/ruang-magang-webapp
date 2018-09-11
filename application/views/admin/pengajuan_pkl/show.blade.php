@extends('admin.template')

@section('content')
  <div class="content">
      <div class="col-md-12">
          <div class="card card-invoice">
            <div class="card-header">
              <div class="invoice-header">
                <h3 class="invoice-title">
                  Data Pengaju Praktek Kerja Lapangan
                </h3>
                <div class="invoice-logo">
                  {{-- <img src="../assets/img/invoiceexp.png" alt="company logo"> --}}
                </div>
              </div>
              <div class="invoice-desc">
                  Jl. Panglima Sudirman No.507, Pesanggrahan, Kec. Batu, Kota Batu, Jawa Timur 65313
              </div>
            </div>
            <div class="card-body">
              <div class="seperator-solid"></div>
              <div class="row">
                <div class="col-md-4 info-invoice">
                  <h5 class="sub">Tanggal Pengajuan</h5>
                  <p>{{ $pengajuan_pkl->created_at }}</p>
                </div>
                <div class="col-md-4 info-invoice">
                  <h5 class="sub">Perwakilan Pengaju</h5>
                <p>{{ $pengajuan_pkl->detailPengaju->nama_pengaju }}</p>
                </div>
                <div class="col-md-4 info-invoice">
                  <h5 class="sub">Asal Instansi</h5>
                  <p>
                      {{ $pengajuan_pkl->detailPengaju->asal_instansi }}
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="invoice-detail">
                    <div class="invoice-top">
                      <h3 class="title"><strong>Detail Pengaju</strong></h3>
                    </div>
                    <div class="invoice-item">
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <td><strong>Verifikasi Berkas</strong></td>
                              <td class="text-center"><strong>Status</strong></td>
                              <td class="text-center"><strong>Tanggal Pengajuan</strong></td>
                              <td class="text-right"><strong>Tanggal Verifikasi</strong></td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Kesbangpol</td>
                              @if($pengajuan_pkl->status_kesbangpol == 0)
                              <td class="text-center"><span class="badge badge-count badge-danger">Belum Terverifikasi</span></td>
                              @else()
                              <td class="text-center"><span class="badge badge-count badge-success">Terverifikasi</span></td>
                              @endif
                              <td class="text-center">{{ $pengajuan_pkl->created_at }}</td>
                              <td class="text-center">{{ $pengajuan_pkl->updated_at }}</td>
                            </tr>
                            <tr>
                              <td>Dinas</td>
                              @if($pengajuan_pkl->status_dinas == 0)
                              <td class="text-center"><span class="badge badge-count badge-danger">Belum Terverifikasi</span></td>
                              @else()
                              <td class="text-center"><span class="badge badge-count badge-success">Terverifikasi</span></td>
                              @endif
                              <td class="text-center"></td>
                              <td class="text-right"></td>
                            </tr>
                            <tr>
                              <td>BS-1000</td>
                              <td class="text-center"></td>
                              <td class="text-center"></td>
                              <td class="text-right"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="seperator-solid  mb-3"></div>
                </div>
              </div>
            </div>
            <div class="card-footer">

            </div>
          </div>
        </div>
  </div>
@endsection
