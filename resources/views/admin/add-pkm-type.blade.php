@extends('admin.app')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Add New PKM Type</h2>
    </div>
    <form>
    <div class="form-group">
            <label for="admin-namme">PKM Type Key</label>
            <input type="text" class="form-control" id="admin-name" name="admin-name">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="admin-email">PKM Type</label>
            <input type="email" class="form-control" id="admin-email" name="admin-email">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  @endsection
