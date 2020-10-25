@extends('dashboard')
@section('table')
<div class="row mt-4">
  <div class="col-md-6 col-sm-6 text-left">
    {{-- @foreach ($bab as $bab)
      <h2>Bab {{$bab->judul_bab}}</h2>
    @endforeach --}}
  </div>
  <div class="col-md-6 col-sm-6 text-right">
    <a type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#exampleModal">
      Tambah Materi
    </a>
  </div>
</div>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Materi ke</th>
      <th scope="col">Judul Materi</th>
      <th scope="col">Mentor</th>
      <th scope="col">Youtube</th>
      <th scope="col">Slug</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($materi as $m)
    <tr>
        <td scope="col"></td>
        <td scope="col">{{$m->materi_ke}}</th>
        <td scope="col">{{$m->judul}}</th>
        <td scope="col">{{$m->mentor}}</th>
        <td scope="col">{{$m->youtube}}</th>
        <td scope="col">{{$m->slug}}</td>
        <td scope="col">
            {{-- <a href="{{route('materi')}}" class="btn btn-outline-success">Show</a> --}}
        </td>
    </tr>
  @endforeach
  </tbody>
</table>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form class="form-horizontal form-material" method="POST" action="{{route('materi.post')}}"
                  enctype="multipart/form-data">
                  @csrf
                  <div class="container mt-4">
                    @foreach ($bab as $bab)
                    <input type="hidden" value="{{$bab->kategori}}" name="kategori">
                    <input type="hidden" value="{{$bab->judul_bab}}" name="bab">
                    @endforeach
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Materi Ke</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="materi_ke">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Judul</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="judul">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Mentor</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="mentor">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Link youtube</label>
                          <input type="text" class="form-control" id="exampleFormControlInput1" name="youtube">
                      </div>
                      {{-- <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                          <select  class="form-select" aria-label="Default select example" name="kategori">
                              <option selected>Pilih Kategori</option>
                              <option value="pertanian">Pertanian</option>
                              <option value="perkebunan">Perkebunan</option>
                              <option value="hidroponik">Hidroponik</option>
                          </select>
                          <input type="hidden" value="perkebunan" name="kategori">
                      </div> --}}
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Ringkasan matei</label>
                          <input type="file" class="form-control" id="exampleFormControlInput1" name="ringkasan">
                      </div>
                  </div>
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Kirim</button>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
