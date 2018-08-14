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
                        <th>No Pengaju</th>
                        <th>Status Kesbangpol</th>
                        <th>Status Dinas</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengajuan_pkl as $data)
                    <tr>
                        <td>{{ $data->id_pengaju }}</td>
                         
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

                        <td>
                 

                          <a href="{{ base_url('pengajuan/index/'.$data->id_pengajuan) }}" class="btn btn-success"><i class="icon ion-md-checkmark"></i></a>



                          <a href="{{ base_url('pengajuan/delete/'.$data->id_pengajuan)}}" class="btn btn-warning"><i class="icon ion-md-eye"></i></a>


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


