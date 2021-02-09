@extends('admin.app')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Manage Major</h2>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <a href="add-major" class="btn btn-primary"><span data-feather="plus"></span> Add new Major</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Key</th>
                  <th>Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>SI</td>
                    <td>Sistem Informasi</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>MM-SI</td>
                    <td>Magister Manajemen Sistem Informasi</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>SI-AK</td>
                    <td>Sistem Informasi Akuntansi</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>SI-A</td>
                    <td>Sistem Informasi Audit</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
          
@endsection
