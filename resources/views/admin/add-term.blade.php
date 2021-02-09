@extends('admin.app')
@section('main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Add New Term</h2>
    </div>
    <form>
    <div class="form-group">
            <label for="admin-namme">Year Term</label>
            <div class="row">
                <div class="col-2">
                <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-1 text-center">
                    <h3>/</h3>
                </div>
                <div class="col-2">
                <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="admin-namme">Semester</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Ganjil</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Genap</label>
            </div>
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  @endsection
