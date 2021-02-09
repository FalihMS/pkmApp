@extends('admin.app')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Add New Lecturer</h2>
    </div>
    <form>
    <div class="form-group">
            <label for="admin-namme">Lecturer Code</label>
            <input type="text" class="form-control" id="admin-name" name="admin-name">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Lecturer Doesn't Have NIDN</label>
        </div>
        <div class="form-group">
            <label for="admin-email">Lecturer NIDN</label>
            <input type="email" class="form-control" id="admin-email" name="admin-email">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="admin-email">Lecturer Name</label>
            <input type="email" class="form-control" id="admin-email" name="admin-email">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="admin-email">Lecturer Class</label>
        </div>    

    <form class="needs-validation" novalidate>
  <div class="form-row ">
    <div class="col-md-2 mb-3">
      <input type="text" class="form-control" id="validationCustom01" value="LA11" readonly>
    </div>
    <div class="col-md-2 mb-3">
        <select class="form-control" disabled>
            <option>Select Region</option>
            <option selected>Alam Sutera</option>
            <option>Kemanggisan</option>
            <option>Bekasi</option>
            <option>Bandung</option>
       </select>
    </div>
  </div>
  <div class="form-row ">
    <div class="col-md-2 mb-3">
      <input type="text" class="form-control" id="validationCustom01" placeholder="Class Code">
    </div>
    <div class="col-md-2 mb-3">
        <select class="form-control">
            <option>Select Region</option>
            <option>Alam Sutera</option>
            <option>Kemanggisan</option>
            <option>Bekasi</option>
            <option>Bandung</option>
       </select>
    </div>
    <div class="col-md-3 mb-3">
        <button class="btn btn-primary" type="submit">Add New Class</button>
    </div>  
  </div>
</form>
<button type="submit" class="btn btn-primary">Submit</button>
    </div>    
    </form>
  @endsection
