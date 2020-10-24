@extends('layouts.main')

@section('title', 'Dashboard')
@section('css', 'dashboard.css')

@section('root')

<form class="form-horizontal form-material" method="POST" action="{{route('ujicoba.post')}}"
    enctype="multipart/form-data">
    @csrf
    <div class="container mt-4">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="judul_bab">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Mentor</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="mentor">
        </div>
        <select class="form-select" aria-label="Default select example" name="kategori">
            <option selected>Pilih Kategori</option>
            <option value="pertanian">Pertanian</option>
            <option value="perkebunan">Perkebunan</option>
            <option value="hidroponik">Hidroponik</option>
        </select>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">gambar</label>
            <input type="file" class="form-control" id="exampleFormControlInput1" name="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</form>
