<div class="wrapper">
    <div class="main-header">
        <div class="logo-header">
              <a href="{{ base_url('admin/dashboard') }}" class="big-logo">
                  <strong>Ruang Magang</strong>
              </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="la la-bars"></i>
            </span>
            </button>
            <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
        </div>

        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
            <!--
            Tip 1: You can change the background color of the navbar header using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
            -->
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button class="btn btn-minimize btn-rounded">
                      <i class="icon ion-md-menu"></i>
                    </button>
                </div>

                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                            <i class="flaticon-search-1"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="<?= base_url() ?>/assets/backend/img/profile.jpg" alt="image profile" width="36" class="img-circle"></a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <li>
                                <div class="user-box">
                                    <div class="u-img"><img src="<?= base_url() ?>/assets/backend/img/profile.jpg" alt="image profile"></div>
                                    <div class="u-text">
                                        <h4>{{ $admin['nama'] }}</h4>
                                        <p class="text-muted">{{ $admin['email'] }}</p><a href="{{ base_url('admin/profile') }}" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('dinas/logoutProcess') ?>">Logout</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
