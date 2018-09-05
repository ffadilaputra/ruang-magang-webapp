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
                {{ $user['nama'] }}
                <span class="user-level">Pengaju</span>
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
          <a href="{{ base_url('pengaju') }}">
              <i class="icon ion-md-clipboard"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="la la-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Menu</h4>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('pengaju/create') ?>">
              <i class="icon ion-md-calendar"></i>
              <p>Pengajuan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('anggota') ?> ">
              <i class="icon ion-md-calendar"></i>
              <p>Anggota</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('berkas') ?>">
              <i class="icon ion-md-calendar"></i>
              <p>Berkas</p>
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
