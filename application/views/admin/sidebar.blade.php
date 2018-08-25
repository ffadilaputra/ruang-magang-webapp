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
							Hizrian
							<span class="user-level">Administrator</span>
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
					<a href="#">
            <i class="icon ion-md-clipboard"></i>
						<p>Dashboard</p>
						<span class="badge badge-count">5</span>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="la la-ellipsis-h"></i>
					</span>
					<h4 class="text-section">Components</h4>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#base">
              <i class="icon ion-logo-buffer"></i>
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
				</li>

				<li class="nav-item">
					<a data-toggle="collapse" href="#baseuser">
              <i class="icon ion-logo-buffer"></i>
						<p>User</p>
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
									<span class="sub-item">Dinas</span>
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
					<a data-toggle="collapse" href="#basemagang">
              <i class="icon ion-logo-buffer"></i>
						<p>Magang</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="basemagang">
						<ul class="nav nav-collapse">
							<li>
								<a href="{{base_url('AnggotaMagang')}}">
									<span class="sub-item">Anggota</span>
								</a>
							</li>
						</ul>
					</div>
				</li>




				<li class="nav-item">
					<a href="#">
						<i class="icon ion-md-calendar"></i>
						<p>Calendar</p>
						<span class="badge badge-count badge-info">1</span>
					</a>
				</li>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="la la-ellipsis-h"></i>
					</span>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->
