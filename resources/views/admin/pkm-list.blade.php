@extends('admin.app')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Submitted PKM List</h2>
      </div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
      <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-success">Download All PKM</button>
            <button type="button" class="btn btn-sm btn-outline-success">Export As Excel</button>
          </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle mx-auto">
            <span data-feather="calendar"></span>
            2019/2020 - Genap
          </button>
        </div>
        </div>
      <div class="table-responsive">
        <table class="table table-striped ">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Leader Name</th>
              <th>Deadline Session</th>
              <th>Region</th>
              <th>Class</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>1</td>
                <td><a href="#" data-toggle="modal" data-target="#exampleModal">Analisa Perancangan Sistem Informasi</a></td>
                <td>Fakhri Albari</td>
                <td>Pengumpulan PKM KC</td>
                <td>ALS</td>
                <td>LA11</td>                
                <td>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="download"><span data-feather="download" class="text-secondary"></span></a>
                </td>
        </tr>
            <tr>
                <td>2</td>
                <td><a href="#" data-toggle="modal" data-target="#exampleModal">Desain dan Perancangan Sistem Informasi</a></td>
                <td>Randy Steven</td>
                <td>Pengumpulan PKM KC</td>
                <td>ALS</td>
                <td>LA11</td>
                
                <td>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="download"><span data-feather="download" class="text-secondary"></span></a>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
      
          
@endsection
@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail PKM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-3">
        <div class="row mb-2">
          <div class="col-2">PKM Title</div>
          <div class="col-1 text-right">:</div>
          <div class="col-md-4">Analisa Perancangan Sistem Informasi</div>
        </div>
        <div class="row mb-2">
          <div class="col-2">Class</div>
          <div class="col-1 text-right">:</div>
          <div class="col-md-4">LA11</div>
        </div>
        <div class="row mb-2">
          <div class="col-2">Lecturer Name</div>
          <div class="col-1 text-right">:</div>
          <div class="col-md-4">Billy Joe</div>
        </div>
        <div class="row mb-2">
          <div class="col-2">Upload Session</div>
          <div class="col-1 text-right">:</div>
          <div class="col-md-4">Pengumpulan PKM KC</div>
        </div>
        <div class="row mb-2">
          <div class="col-2">Leader Data</div>
          <div class="col-1 text-right">:</div>
          <div class="col-md-2 text-center">2201801443</div>
          <div class="col-1 text-center">-</div>
          <div class="col-md-2 text-center">Fakhri Albari</div>
          <div class="col-1 text-center">-</div>
          <div class="col-md-2 text-center">f.albari@user.com</div>  
        </div>
        <div class="row mb-2">
          <div class="col-2">Member 1 Data</div>
          <div class="col-1 text-right">:</div>
          <div class="col-md-2 text-center">2101701443</div>
          <div class="col-1 text-center">-</div>
          <div class="col-md-2 text-center">John Doe</div>
          <div class="col-1 text-center">-</div>
          <div class="col-md-2 text-center">d.john@user.com</div>  
        </div>
        <div class="row mb-2">
          <div class="col-2">Member 2 Data</div>
          <div class="col-1 text-right">:</div>
          <div class="col-md-2 text-center">2201701223</div>
          <div class="col-1 text-center">-</div>
          <div class="col-md-2 text-center">Jane Doe</div>
          <div class="col-1 text-center">-</div>
          <div class="col-md-2 text-center">d.jane@user.com</div>  
        </div>
        <button type="button" class="btn btn-primary"><span data-feather="download"></span> Download PKM</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection