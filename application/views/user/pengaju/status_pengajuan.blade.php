@extends('user.template')

@section('content')
<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
							<div class="card card-invoice">
								<div class="card-header">
									<div class="invoice-header">
                      <h4 class="page-title">Data Pengajuan anda</h4>
										<div class="invoice-logo">
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
											<h5 class="sub">Ketua</h5>
                      <p>{{ $status['nama_pengaju'] }}</p>
										</div>
										<div class="col-md-4 info-invoice">
											<h5 class="sub">Asal Instansi</h5>
											<p>{{ $status['asal_instansi'] }}</p>
										</div>
										<div class="col-md-4 info-invoice">
											<h5 class="sub">Tanggal Pengajuan</h5>
											<p>
												{{ $status['created_at'] }}
											</p>
                    </div>
                    <div class="col-md-4 info-invoice">
                        <h5 class="sub">Tanggal Diverifikasi</h5>
                        <p>
                          {{ $status['updated_at'] }}
                        </p>
                      </div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="invoice-detail">
												<div class="invoice-top">
													<h4 class="title">Anggota</h4>
												</div>
												<div class="invoice-item">
													<div class="table-responsive">
														<table class="table table-striped">
															<thead>
																<tr>
																	<td><strong>NIM</strong></td>
																	<td class="text-center"><strong>Nama Lengkap</strong></td>
																	</tr>
															</thead>
															<tbody>
                                @foreach($anggota as $data)
																<tr>
																	<td>{{ $data->nim }}</td>
                                <td class="text-center">{{ $data->nama_anggota }}</td>
																	<td></td>
																	<td></td>
                                </tr>
                                @endforeach
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="seperator-solid  mb-3"></div>
										</div>
                  </div>
                  <div class="row">
                      <div class="col-md-4 info-invoice">
                        <h5 class="sub">Dinas Tujuan</h5>
                        <p>{{ $get_dinas['nama_dinas'] }}</p>
                      </div>
                      <div class="col-md-4 info-invoice">
                        <h5 class="sub">Sub Dinas</h5>
                        <p>{{ $get_sub_dinas['nama_sub_bidang'] }}</p>
                      </div>
                    </div>
								</div>
							</div>
						</div>
      </div>
  </div>
</div>
@endsection
