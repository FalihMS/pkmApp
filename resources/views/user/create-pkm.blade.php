@extends('user.app')
@section('main')

<div class="card mb-3">
  <div class="card-body">
  <h5 class="card-title text-center mb-3">Create New PKM</h5>
  <hr>
  <form>
    <div class="form-group row justify-content-center">
      <label for="staticEmail" class="col-sm-2 col-form-label text-right">PKM Title :</label>
      <div class="col-sm-4">
        <input type="text" class="form-control form-control-sm" id="staticEmail" >
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label for="staticEmail" class="col-sm-2 col-form-label text-right">PKM Type :</label>
      <div class="col-sm-4">
        <select class="form-control form-control-sm">
            <option>Select Type</option>
        </select>
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label for="staticEmail" class="col-sm-2 col-form-label text-right">Campus Region :</label>
      <div class="col-sm-4">
        <select class="form-control form-control-sm">
            <option>Select Region</option>
        </select>
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label for="staticEmail" class="col-sm-2 col-form-label text-right">Class :</label>
      <div class="col-sm-4">
        <select class="form-control form-control-sm">
            <option>Select Class</option>
        </select>
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <label for="staticEmail" class="col-sm-2 col-form-label text-right">Lecturer Name:</label>
      <div class="col-sm-4">
      <input type="text" readonly class="pl-2 form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>

    <h5 class="card-title text-center mt-3">Member Information</h5>
    <hr>

    <div class="form-row">
    <div class="col-md-2 mb-3">
      <label for="validationTooltip01">NIM</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="NIM Member 1" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Full name</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Name Member 1" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip02">E-Mail</label>
      <input type="text" class="form-control" id="validationTooltip02"  placeholder="Email Member 1" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip02">Phone Number</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Phone No. Member 1" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>

    <div class="col-md-2 mb-3">
          <input type="text" class="form-control" id="validationTooltip01" placeholder="NIM Member 2" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Name Member 2" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <input type="text" class="form-control" id="validationTooltip02"  placeholder="Email Member 2" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Phone No. Member 2" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>

  </div>
    <div class="d-block text-center">
        <a href="#" class="btn btn-primary my-3">Submit PKM</a>  
    </div>
  </form>
  </div>
</div>
    
@endsection