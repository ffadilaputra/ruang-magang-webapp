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
											<h4 class="timeline-title">Verifikasi Berkas</h4>
											<p><small class="text-muted">11 hours ago via Twitter</small></p>
										</div>
										<div class="timeline-body">
                      <p>Status verifikasi berkas anda .</p>
                      <ul>
                        <li>X</li>
                        <li>X</li>
                      </ul>
                    </div>
                    <hr>
                    <a href=""></a>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Ajukan</h4>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <hr>
                      <a class="btn btn-primary" href="">TTTT</a>
									</div>
								</li>
								<li>
									<div class="timeline-badge info"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<hr>
											<div class="btn-group dropdown">
												<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
													<span class="btn-label">
													</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li>
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Something else here</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>

								<li class="timeline-inverted">
									<div class="timeline-badge success"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
      </div>
    </div>
@endsection
