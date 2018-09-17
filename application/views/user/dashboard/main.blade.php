@extends('user.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Timeline magang anda</h4>
        </div>
        <div class="row">
						<div class="col-md-12">

							<ul class="timeline">
								<li>
									<div class="timeline-badge">
                  </div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Ajukan data anda</h4>
											</div>
										<div class="timeline-body">
                      <p>Ajukan data pengajuan magang anda dengan cara diwakilkan oleh ketua kelompok, dengan cara melakukan klik pada link dibawah</p>
                      <ul>
                        <li><a href="{{ base_url('pengaju/create') }}">Pengajuan</a></li>
                      </ul>
                    </div>
                    <hr>
                    <a href=""></a>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Verifikasi Berkas</h4>
										</div>
										<div class="timeline-body">
											<p>Lakukan submit berkas kemudian kumpulkan berkas melalui admin kesbangpol di kantor dinas.</p>
                    </div>
                    <hr>
                    <a class="btn btn-primary" href="{{ base_url('berkas') }}">Submit Berkas</a>
									</div>
								</li>
								<li>
									<div class="timeline-badge info"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Pantau</h4>
										</div>
										<div class="timeline-body">
											<p>Lakukan pemantauan secara berkas kamu pada tautan dibawah</p>
											<hr>
											<div class="btn-group dropdown">
                          <a class="btn btn-primary" href="{{ base_url('berkas') }}">Pantau Berkas</a>
											</div>
										</div>
									</div>
								</li>

								<li class="timeline-inverted">
									<div class="timeline-badge success"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Magang pun dimulai</h4>
										</div>
										<div class="timeline-body">
											<p>Setelah semua proses selesai,kamu bisa magang di bidang yang kamu inginkan.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
      </div>
    </div>
@endsection
