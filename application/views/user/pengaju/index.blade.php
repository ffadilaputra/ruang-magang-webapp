@extends('user.template')

@section('content')
    <div class="content">
      <div class="container-fluid">
          <div class="page-header">
              <h4 class="page-title">Halaman Dinas</h4>
            </div>
          <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-3">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Task Progress</h4>
                  </div>
                  <div class="card-body">
                    <div id="task-complete" class="chart-circle mt-4 mb-3"><div class="circles-wrp" style="position: relative; display: inline-block;"><svg xmlns="http://www.w3.org/2000/svg" width="150" height="150"><path fill="transparent" stroke="#eee" stroke-width="7" d="M 74.9854373659358 3.5000014830091857 A 71.5 71.5 0 1 1 74.90068793442788 3.5000689712666 Z" class="circles-maxValueStroke"></path><path fill="transparent" stroke="#177dff" stroke-width="7" d="M 74.9854373659358 3.5000014830091857 A 71.5 71.5 0 1 1 6.9828648746558315 52.956422038591995 " class="circles-valueStroke"></path></svg><div class="circles-text" style="position: absolute; top: 0px; left: 0px; text-align: center; width: 100%; font-size: 52.5px; height: 150px; line-height: 150px;">80%</div></div></div>
                  </div>
                  <div class="card-footer">
                    <div class="legend"><i class="la la-circle text-primary"></i> Completed</div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
@endsection
