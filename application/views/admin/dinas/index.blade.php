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
              <a href="{{ base_url('dinas/create') }}" class="btn btn-primary">
                <i class="icon ion-md-add-circle"></i>
              Dinas</a>
          </div>
          <div class="card">
            <br>
            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Dinas</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dinas as $data)
                    <tr>
                        <td>{{ $data->nama_dinas }}</td>
                        <td>
                          <a href="{{ base_url('dinas/edit/'.$data->id_dinas) }}" class="btn btn-success"><i class="icon ion-md-create"></i></a>
                          <a href="{{ base_url('dinas/delete/'.$data->id_dinas)}}" class="btn btn-danger"><i class="icon ion-md-trash"></i></a>
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
