@extends('dashboard')
@section('table')
<div class="row mt-4">
  <div class="col-md-6 col-sm-6 text-left">
    <h2>Bab Perkebunan</h2>
  </div>
  <div class="col-md-6 col-sm-6 text-right">
    <a type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#exampleModal">
      Tambah Bab
    </a>
  </div>
</div>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Bab</th>
      <th scope="col">Thumbnail</th>
      <th scope="col">Mentor</th>
      <th scope="col">Slug</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
@endsection