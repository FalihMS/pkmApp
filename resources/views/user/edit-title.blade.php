@extends('user.app')
@section('main')

<div class="card mb-3">
  <div class="card-body text-center">
  <h5 class="card-title mb-3">Edit PKM Title</h5>
  <hr>
  <div class="container">
  <form>
    <div class="form-group row justify-content-center">
      <label for="staticEmail" class="col-sm-2 col-form-label text-right">Current PKM Title :</label>
      <div class="col-sm-4">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
    <div class="form-group row justify-content-center">
      <label for="staticEmail" class="col-sm-2 col-form-label text-right">New PKM Titlte :</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="staticEmail" >
      </div>
    </div>
  </form>
    
  <a href="home" class="btn btn-outline-danger my-3">Back To Home</a>  
  <a href="#" class="btn btn-primary my-3">Edit PKM Title</a>  

  </div>
</div>
@endsection