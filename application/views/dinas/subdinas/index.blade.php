@extends('dinas.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="page-header">
          <h4 class="page-title">Dashboard Dinas</h4>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <div class="form-group">
              <a href="{{ base_url('subdinas/create') }}" class="btn btn-primary">
                <i class="flaticon-add"></i>
              Sub Dinas</a>
          </div>
          <div class="card">
            <br>
            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id Sub Bidang</th>
                         <th>Nama Dinas</th>
                         <th>Nama Sub Bidang</th>
                         <th>Kuota</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($subdinas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                         <td>{{ $data->nama_dinas }}</td>
                          <td>{{ $data->nama_sub_bidang }}</td>
                           <td>{{ $data->kuota }}</td>
                        <td>
                          <a href="{{ base_url('subdinas/edit/'.$data->id_sub_bidang) }}" class="btn btn-success"><i class="flaticon-pencil"></i></a>
                          <a href="{{ base_url('subdinas/delete/'.$data->id_sub_bidang)}}" class="btn btn-danger"><i class="flaticon-interface-5"></i></a>
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
