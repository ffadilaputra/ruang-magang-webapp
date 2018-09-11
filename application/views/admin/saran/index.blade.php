@extends('admin.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Dashboard Saran</h4>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <div class="form-group">

          </div>
          <div class="card">
            <br>
            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id Admin</th>
                         <th>Username</th>
                         <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                    @foreach($saran as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                         <td>{{ $data->nama }}</td>
                          <td>{{ $data->email }}</td>

                        <td>
                          <a href="{{ base_url('saran/detail/'.$data->id_saran) }}" class="btn btn-success"><i class="flaticon-interface"></i></a>
                          <a href="{{ base_url('saran/delete/'.$data->id_saran)}}" class="btn btn-danger"><i class="flaticon-cross"></i></a>
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
