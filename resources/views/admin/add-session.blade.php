@extends('admin.app')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Add New Deadline</h2>
    </div>
    <form>
    <div class="form-group">
            <label for="admin-namme">Session Title</label>
            <input type="text" class="form-control" id="admin-name" name="admin-name">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="admin-password">Session Term</label>
            <select class="form-control">
                <option>Select Term</option>
                <option>2019/2020 - Ganjil</option>
                <option>2019/2020 - Genap</option>
            </select>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="admin-password">PKM Type</label>
            <select class="form-control">
                <option>Select PKM Type</option>
                <option>PKM GT</option>
                <option>PKM KC</option>
                <option>PKM GFK</option>
            </select>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="admin-email">Session Deadline</label>
            <input type="email" class="form-control" id="admin-email" name="admin-email">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  @endsection
