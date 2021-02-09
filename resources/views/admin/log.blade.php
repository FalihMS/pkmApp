@extends('admin.app')
@section('main')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>List Log</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Account</th>
                  <th>Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>Super Admin</td>
                    <td>2020-06-30 23:59:59</td>
                    <td>Membuat Admin</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Super Admin</td>
                    <td>2020-06-30 23:59:59</td>
                    <td>Membuat Admin</td>
                </tr>
              </tbody>
            </table>
          </div>
@endsection