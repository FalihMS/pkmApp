@extends('admin.app')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Manage Lecturer</h2>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <a href="add-lecturer" class="btn btn-primary"><span data-feather="plus"></span> Add new Lecturer</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>NIDN</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>D1234</td>
                    <td><a href="#" data-toggle="modal" data-target="#exampleModal">Super Admin</a></td>
                    <td>D1234</td>
                   <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="user-minus" class="text-secondary"></span></a>
                        <a href="#" class="ml-3" data-toggle="tooltip" data-placement="right" title="Add Class"><span data-feather="plus-square" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>D2345</td>
                    <td><a href="#" data-toggle="modal" data-target="#exampleModal">Admin</a></td>
                    <td>1234567890</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                      <a href="#" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="user-minus" class="text-secondary"></span></a>
                      <a href="#" class="ml-3" data-toggle="tooltip" data-placement="right" title="Add Class"><span data-feather="plus-square" class="text-secondary"></span></a>
                    </td>
                  </tr>
                  <tr class="text-muted">
                    <td>D2345</td>
                    <td><a href="#" class="text-muted">Willy Kristian</a></td>
                    <td>D2345</td>
                    <td><span>Inactive</span></td>
                    <td></td>
                  </tr>
                  <tr class="text-muted">
                    <td>D4567</td>
                    <td><a href="#" class="text-muted">Billy Joe</a></td>
                    <td>9876543210</td>
                    <td><span>Inactive</span></td>
                    <td></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Detail Lecturer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-3">
        <div class="row mb-2">
          <div class="col-2">Lecturer Code</div>
          <div class="col-1 text-right">:</div>
          <div class="col-md-4">D4567</div>
        </div>
        <div class="row mb-2">
          <div class="col-2">Lecturer NIDN</div>
          <div class="col-1 text-right">:</div>
          <div class="col-md-4">9876543210</div>
        </div>
        <div class="row mb-2">
          <div class="col-2">Lecturer Name</div>
          <div class="col-1 text-right">:</div>
          <div class="col-md-4">Billy Joe</div>
        </div>
        <div class="row mb-2">
          <div class="col-2">Lecturer Class</div>
        </div>
        <div class="row mb-2">
        <div class="col-11 ml-3 table-responsive">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Class Code</th>
                  <th>Class Region</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>LA11</td>
                    <td>Alam Sutera</td>
                    <td><span class="text-success">Inactive</span></td>
                    <td>
                      <a href="#" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="minus-square" class="text-secondary"></span></a>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <button type="button" class="btn btn-primary"><span data-feather="plus-square"></span> Add New Class</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection