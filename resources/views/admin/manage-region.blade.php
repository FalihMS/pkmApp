@extends('admin.app')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Manage Region</h2>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <a href="add-region" class="btn btn-primary"><span data-feather="plus"></span> Add new Region</a>
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
                    <td>ALS</td>
                    <td>Alam Sutera</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>KMG</td>
                    <td>Kemanggisan</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>BKS</td>
                    <td>Bekasi</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>BDG</td>
                    <td>Bandung</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
          
@endsection
