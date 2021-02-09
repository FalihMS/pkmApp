@extends('admin.app')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Manage Term</h2>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <a href="#" class="btn btn-primary"><span data-feather="plus"></span> Add new Term</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Term</th>
                  <th>Semester</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>2019/2020</td>
                    <td>Ganjil</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2019/2020</td>
                    <td>Genap</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr class="text-muted">
                    <td>1</td>
                    <td>2018/2019</td>
                    <td>Ganjil</td>
                    <td>Inactive</td>
                    <td></td>
                </tr>
                <tr class="text-muted">
                    <td>1</td>
                    <td>2019/2020</td>
                    <td>Genap</td>
                    <td>Inactive</td>
                    <td></td>
                </tr>
              </tbody>
            </table>
          </div>
@endsection
