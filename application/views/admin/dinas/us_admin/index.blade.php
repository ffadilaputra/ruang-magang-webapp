@extends('admin.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Dashboard Dinas</h4>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <div class="form-group">
              <a href="{{ base_url('Admin/create') }}" class="btn btn-primary">
                <i class="flaticon-add-user"></i>
              Admin</a>
          </div>
          <div class="card">
            <br>
            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                         <th>Username</th>
                         <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                    @foreach($Admin as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                          <a href="{{ base_url('Admin/edit/'.$data->id_admin) }}" class="btn btn-success"><i class="flaticon-pencil"></i></a>
                          <a href="{{ base_url('Admin/delete/'.$data->id_admin)}}" class="btn btn-danger"><i class="flaticon-cross"></i></a>
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
