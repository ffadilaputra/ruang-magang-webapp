<div class="wrapper">
    <div class="main-header">
        <div class="logo-header">
            <a href="{{ base_url('user') }}" class="big-logo">
                <strong>Ruang Magang</strong>
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                  <i class="la la-bars"></i>
              </span>
            </button>
        </div>
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button class="btn btn-minimize btn-rounded">
                      <i class="icon ion-md-menu"></i>
                    </button>
                </div>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="<?= base_url() ?>/assets/backend/img/profile.jpg" alt="image profile" width="36" class="img-circle"></a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <li>
                                <div class="user-box">
                                    <div class="u-img"><img src="<?= base_url() ?>/assets/backend/img/profile.jpg" alt="image profile"></div>
                                    <div class="u-text">
                                        <h4>{{ $user['nama'] }}</h4>
                                        <p class="text-muted">{{ $user['email'] }}</p><a href="<?= base_url('user/profile') ?>" class="btn btn-rounded btn-danger btn-sm">Edit Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ base_url('login/logoutProcess') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
