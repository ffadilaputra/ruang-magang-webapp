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
              <a href="{{ base_url('Usdinas/create') }}" class="btn btn-primary">
                <i class="icon ion-md-add-circle"></i>
              User Dinas</a>
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
                    @foreach($usdinas as $data)
                    <tr>
                        <td>{{ $data->id_admin }}</td>
                         <td>{{ $data->nama }}</td>
                          <td>{{ $data->email }}</td>
                       
                        <td>
                          <a href="{{ base_url('Usdinas/edit/'.$data->id_admin) }}" class="btn btn-success"><i class="icon ion-md-create"></i></a>
                          <a href="{{ base_url('Usdinas/delete/'.$data->id_admin)}}" class="btn btn-danger"><i class="icon ion-md-trash"></i></a>
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