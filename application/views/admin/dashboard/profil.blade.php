@extends('admin.template')

@section('content')
<div class="main-panel">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-with-nav">
              <div class="card-header">
                <div class="row">
                  <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                    <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true">Profile</a> </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <div class="row mt-3">
                  <div class="col-md-6">
                    <?= form_open('admin/update_admin/'.$admin['id_admin']) ?>
                    <div class="form-group form-group-default">
                      <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Name" value="{{ $profil['nama'] }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group form-group-default">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Name" value="{{ $profil['email'] }}">
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12">
                    <div class="form-group form-group-default">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password">
                    </div>
                  </div>
                </div>
                <div class="text-right mt-3 mb-3">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                <?= form_close() ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
