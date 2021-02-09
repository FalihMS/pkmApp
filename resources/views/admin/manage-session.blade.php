@extends('admin.app')
@section('main')
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2>Manage Deadline Upload</h2>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <a href="add-session" class="btn btn-primary"><span data-feather="plus"></span> Add new Deadline</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Deadline</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>Pengumpulan PKM-GT - 2019/2020 - Genap</td>
                    <td>2020-06-30 23:59:59</td>
                    <td>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Edit"><span data-feather="edit-3" class="text-secondary"></span></a>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Delete"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pengumpulan PKM-GT (Khusus Aslab) - 2019/2020 - Genap</td>
                    <td>2020-06-30 23:59:59</td>
                    <td>
                        <a href="#" data-toggle="tooltip" data-placement="right" title="Edit"><span data-feather="edit-3" class="text-secondary"></span></a>
                        <a href="#" class="pl-3" data-toggle="tooltip" data-placement="right" title="Delete"><span data-feather="trash-2" class="text-secondary"></span></a>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
@endsection
