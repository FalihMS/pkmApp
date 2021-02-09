@extends('user.app')
@section('main')

<div class="card mb-3">
  <div class="card-body text-center">
  <h5 class="card-title mb-3">PKM Detail Information</h5>
  <hr>
  <div class="container">
    <div class="row mb-2 justify-content-center">
        <div class="col-2 font-weight-bold text-right">PKM Title :</div>
        <div class="col-3 text-left text-uppercase">Ini Ceritanya Judul PKM</div>
      </div>
      <div class="row mb-2 justify-content-center">
        <div class="col-2 font-weight-bold text-right">PKM Type :</div>
        <div class="col-3 text-left">PKM Gagasan Tertulis</div>
      </div>
      <div class="row mb-2 justify-content-center">
        <div class="col-2 font-weight-bold text-right">Lecturer :</div>
        <div class="col-3 text-left">D1234 - Willy Kristian</div>
      </div>
      <div class="row mb-2 justify-content-center">
        <div class="col-2 font-weight-bold text-right">Class :</div>
        <div class="col-3 text-left">KMG - LA11</div>
      </div>
    </div>
    <a href="edit-title" class="btn btn-primary my-3">Edit PKM Title</a>  

  </div>
</div>

<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title text-center mb-3">Upload Session Information</h5>
    <hr>
    <div class="container">
        <div class="row mb-2 justify-content-center">
            <div class="col-2 font-weight-bold text-right">Session Information :</div>
            <div class="col-3 text-left text-uppercase">Pengumpulan Final PKM GT</div>
        </div>
        <div class="row mb-2 justify-content-center">
            <div class="col-2 font-weight-bold text-right">Deadline :</div>
            <div class="col-3 text-left">PKM Gagasan Tertulis</div>
        </div>
    </div>
  </div>
</div>
<div class="card mb-3">
  <div class="card-body text-center">
  <h5 class="card-title mb-3">Upload Form</h5>
  <hr>
  <div class="container">
  <form>
    <div class="form-group row justify-content-center">
      <label for="staticEmail" class="col-sm-2 col-form-label text-right">PKM Files :</label>
      <div class="col-sm-3">
        <div class="custom-file text-left">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
      </div>
    </div>
  </form>
  <div class="row">
    <div class="col-5 offset-4 pl-5">
        <p class="text-left text-danger">
            Notes:<br>
            1. PKM Yang diupload adalah yang sudah final dan sudah direvisi<br>
            2. Extension file menggunakan .doc atau .docx<br>
            3. Ukuran file maksimal adalah 5MB<br>
            4. Pastikan detail PKM yang ditampilkan sudah sesuai<br>
            5. File hanya dapat diunggah sebanyak lima kali<br>
        </p>
    </div>  
</div>  
  <a href="home" class="btn btn-outline-danger my-3">Back To Home</a>  
  <a href="#" class="btn btn-primary my-3">Edit PKM Title</a>  

  </div>
</div>
@endsection