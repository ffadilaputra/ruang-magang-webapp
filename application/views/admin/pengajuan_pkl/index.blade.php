@extends('admin.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Dashboard Pengajuan PKL</h4>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <div class="card">
            <br>
            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ketua</th>
                        <th>Status Kesbangpol</th>
                        <th>Status Dinas</th>
                        <th>Verifikasi</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                    @foreach($pengajuan_pkl as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->detailPengaju->nama_pengaju }}</td>
                        <td> @if($data->status_kesbangpol == 0)
                          {{'Belum'}}
                        @elseif ($data->status_kesbangpol == 1)
                          {{'Sudah'}}
                        @endif</td>
                        <td>@if($data->status_dinas == 0)
                          {{'Belum'}}
                        @elseif ($data->status_dinas == 1)
                          {{'Sudah'}}
                        @endif</td>
                        @if($data->status_kesbangpol == 0 || $data->status_dinas == 0)
                        <td>
                          @if($data->status_kesbangpol != 1)
                            <a href="{{ base_url('pengajuan/verifKesbangpol/'.$data->id_pengajuan) }}" class="btn btn-success"><i class="icon ion-md-checkmark"></i>&nbsp;Kesbangpol</a>
                          @else
                            <a href="{{ base_url('pengajuan/verifKesbangpol/'.$data->id_pengajuan) }}" class="disabled btn btn-success"><i class="icon ion-md-checkmark"></i>&nbsp;Terverifikasi</a>
                          @endif
                          @if($data->status_dinas != 1)
                            <a href="{{ base_url('pengajuan/verifDinas/'.$data->id_pengajuan) }}" class="btn btn-primary"><i class="icon ion-md-checkmark">&nbsp;Dinas</i></a>
                          @else
                            <a href="{{ base_url('pengajuan/verifDinas/'.$data->id_pengajuan) }}" class="btn btn-primary disabled"><i class="icon ion-md-checkmark">&nbsp;Terverifikasi</i></>
                          @endif
                        </td>
                        @else()
                        <td>
                          <span class="badge badge-count badge-primary">Terferifikasi</span>
                        </td>
                        @endif
                        <td>
                          <a href="{{ base_url('pengajuan/detail/'.$data->id_pengajuan)}}" class="btn btn-warning"><i class="icon ion-md-eye"></i></a>
                          <a href="{{ base_url('pengajuan/delete/'.$data->id_pengajuan)}}" class="btn btn-danger"><i class="icon ion-md-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
    </div>
@endsection


