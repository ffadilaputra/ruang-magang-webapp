@extends('user.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Dashboard Anda</h4>
        </div>
        <div class="row">
						<div class="col-md-12">

							<ul class="timeline">
								<li>
									<div class="timeline-badge">
                    <i class="icon ion-md-calendar"></i>
                  </div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
											<p><small class="text-muted"><i class="icon ion-md-gift"></i> 11 hours ago via Twitter</small></p>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Mussum ipsum cacilds</h4>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-badge info"><i class="icon ion-md-flask"></i></div>
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
														<i class="icon ion-md-git-compare"></i>
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
									<div class="timeline-badge success"><i class="icon ion-ios-cloud-upload"></i></div>
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
