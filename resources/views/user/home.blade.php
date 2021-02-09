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
  <div class="card-body text-center">
  <h5 class="card-title mb-3">Member Information</h5>
  <hr>
  <table class="table table-sm table-striped table-borderless">

    <tbody>
      <tr>
        <td class="font-weight-bold" scope="row">Leader</th>
        <td class="font-weight-bold">2101620213</td>
        <td class="font-weight-bold">Misalnya ini Ketuanya</td>
        <td class="font-weight-bold">ketua@user.com</td>
        <td class="font-weight-bold">02155523045</td>
      </tr>
      <tr>
        <td scope="row">Member 1</th>
        <td>2101620213</td>
        <td>Ini Member nomor satu</td>
        <td>member1@user.com</td>
        <td>02155523045</td>
      </tr>
      <tr>
        <td scope="row">Member 2</th>
        <td>2101620213</td>
        <td>Ini Member nomor dua</td>
        <td>member2@user.com</td>
        <td>02155523045</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
<div class="card mb-3">
  <div class="card-body">
  <h5 class="card-title mb-3 text-center">Upload Session</h5>
  <hr>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Session Info</th>
        <th scope="col">Deadline</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Pengumpulan Final PKM GT <span class="badge badge-success ml-2">Uploaded</span></td>
        <td>14/02/2021 23:59</td>
        <td>
        <a href="upload" data-toggle="tooltip" data-placement="bottom" title="upload file"><span data-feather="upload" class="text-primary"></span></a>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="download file"><span data-feather="download" class="text-primary"></span></a>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Pengumpulan Final PKM GT (Khusus Aslab)</td>
        <td>14/02/2021 23:59</td>
        <td>
        <a href="#" data-toggle="tooltip" data-placement="bottom" title="upload file"><span data-feather="upload" class="text-primary"></span></a>
        </td>
      </tr>
    </tbody>
  </table>

  </div>
</div>
@endsection