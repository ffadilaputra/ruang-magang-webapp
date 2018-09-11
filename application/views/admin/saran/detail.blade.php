@extends('admin.template')

@section('content')
  <div class="content">
      <div class="col-md-12">
          <div class="card card-invoice">
            <div class="card-header">
              <div class="invoice-header">
                <h3 class="invoice-title">
                  Data Saran
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
                  <p>{{ $satan->nama }}</p>
                </div>
                <div class="col-md-4 info-invoice">
                  <h5 class="sub">Email </h5>
                <p>{{ $satan->email }}</p>
                <p></p>
                </div>
                <div class="col-md-4 info-invoice">
                  <h5 class="sub">Diajukan pada</h5>
                  <p>
                    {{ $satan->created_at }}
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="invoice-detail">
                    <div class="invoice-top">
                      <h3 class="title"><strong>Keterangan</strong></h3>
                    </div>
                    <div class="invoice-item">
                    <p>{{ $satan->keterangan }}</p>
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
