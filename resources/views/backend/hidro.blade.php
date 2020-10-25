@extends('dashboard')
@section('table')
<div class="row mt-4">
    <div class="col-md-6 col-sm-6 text-left">
        <h2>Bab Hidroponik</h2>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Bab</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/dashboard/kelas/hidroponik" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="judul" class="form-label">Judul Bab</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                    <label for="mentor" class="form-label mt-3">Mentor</label>
                    <input type="text" class="form-control" id="mentor" name="mentor">
                    <label for="thumb" class="form-label mt-3">Thumbnail</label>
                    <input type="file" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-success">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection