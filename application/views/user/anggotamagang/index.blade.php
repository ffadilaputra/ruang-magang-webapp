@extends('user.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Dashboard Anggota Magang</h4>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <div class="form-group">
              <a href="{{ base_url('anggotamagang/create') }}" class="btn btn-primary">
                <i class="icon ion-md-add-circle"></i>
              Anggota Magang</a>
          </div>
          <div class="card">
            <br>
            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id Anggota</th>
                         <th>Nim</th>
                         <th>Nama</th>
                         <th>Universitas</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($anggotamagang as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                         <td>{{ $data->nim }}</td>
                          <td>{{ $data->nama }}</td>
                           <td>{{ $data->universitas }}</td>
                        <td>
                          <a href="{{ base_url('anggotamagang/edit/'.$data->id_anggota) }}" class="btn btn-success"><i class="icon ion-md-create"></i></a>
                          <a href="{{ base_url('anggotamagang/delete/'.$data->id_anggota)}}" class="btn btn-danger"><i class="icon ion-md-trash"></i></a>
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
