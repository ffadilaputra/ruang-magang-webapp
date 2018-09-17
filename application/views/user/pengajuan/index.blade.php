  @extends('user.template')

  @section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="card card-space">
                    <div class="card-header">
                      <h4 class="card-title">Verifikasi berkas</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-9">
                          <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade active show" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                              <div class="accordion accordion-secondary">
                                <div class="card">
                                  <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" role="button">
                                    <div class="span-icon">
                                      <div class="flaticon-box-1"></div>
                                    </div>
                                    <div class="span-title">
                                    Berkas <b>{{ $user['nama'] }}</b>
                                    </div>
                                    <div class="span-mode"></div>
                                  </div>
                                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <div class="card-body">
                                      Klik tombol dibawah untuk melakukan pengumpulan.
                                      <br>
                                      <?= form_open('berkas/submit') ?>
                                      <input type="hidden" name="id_pengaju" value="{{ $user['id_user'] }}">
                                      <input type="hidden" name="status_kesbangpol" value="0">
                                      <input type="hidden" name="status_dinas" value="0">
                                      <input type="submit" class="btn btn-default btn-warning">
                                    <?= form_close() ?>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
      </div>
  @endsection
