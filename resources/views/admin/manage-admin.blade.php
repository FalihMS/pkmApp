@extends('admin.app')
@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Manage Admin</h2>
        </div>
        <div class
        ="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <a href="add-admin" class="btn btn-primary"><span data-feather="plus"></span> Add new admin  </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>super_admin</td>
                    <td>super_admin@admin.com</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                      <a href="#" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="user-minus" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>admin</td>
                    <td>admin@admin.com</td>
                    <td><span class="text-success">Active</span></td>
                    <td>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Make Inactive"><span data-feather="user-minus" class="text-secondary"></span></a>
                    </td>
                  </tr>
                  <tr class="text-muted">
                    <td>3</td>
                    <td>willy_kristian</td>
                    <td>willy_kristian@admin.com</td>
                    <td><span>Inactive</span></td>
                    <td></td>
                  </tr>
                  <tr class="text-muted">
                    <td>4</td>
                    <td>billy_joe</td>
                    <td>billy_joe@admin.com</td>
                    <td><span>Inactive</span></td>
                    <td></td>
                  </tr>
              </tbody>
            </table>
          </div>
@endsection
