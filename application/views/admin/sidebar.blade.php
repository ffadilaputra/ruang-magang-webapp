<!-- Sidebar -->
<div class="sidebar">
	<div class="sidebar-background"></div>
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="photo">
					<img src="<?= base_url() ?>assets/backend/img/profile.jpg" alt="image profile">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							{{ $admin['nama'] }}
							<span class="user-level">Admin</span>
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>
					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="#profile">
									<span class="link-collapse">My Profile</span>
								</a>
							</li>
							<li>
								<a href="#edit">
									<span class="link-collapse">Edit Profile</span>
								</a>
							</li>
							<li>
								<a href="#settings">
									<span class="link-collapse">Settings</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<ul class="nav">
				<li class="nav-item active">
          <a href="{{ base_url('admin/dashboard') }}">
            <i class="flaticon-home"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="la la-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Components</h4>
				</li>
				{{-- <li class="nav-item">
					<a data-toggle="collapse" href="#base">
              <i class="flaticon-web"></i>
						<p>Dinas</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="base">
						<ul class="nav nav-collapse">
							<li>
								<a href="{{base_url('dinas')}}">
									<span class="sub-item">Dinas</span>
								</a>
							</li>
							<li>
								<a href="{{base_url('subdinas')}}">
									<span class="sub-item">Sub Dinas</span>
								</a>
							</li>
						</ul>
					</div>
				</li> --}}

				<li class="nav-item">
					<a data-toggle="collapse" href="#baseuser">
              <i class="flaticon-users"></i>
						<p>Pengguna</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="baseuser">
						<ul class="nav nav-collapse">
							<li>
								<a href="{{base_url('Admin')}}">
									<span class="sub-item">Admin</span>
								</a>
							</li>
							<li>
								<a href="{{base_url('Usdinas')}}">
									<span class="sub-item">Pengaju</span>
								</a>
							</li>

							<li>
								<a href="{{base_url('ususer')}}">
									<span class="sub-item">User</span>
								</a>
							</li>
						</ul>
					</div>
        </li>
        <li class="nav-item">
          <a href="{{ base_url('pengajuan') }}">
              <i class="flaticon-agenda-1"></i>
              <p>Verifikasi Magang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ base_url('saran') }}">
                <i class="flaticon-box"></i>
                <p>Kotak Saran</p>
              </a>
            </li>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->
