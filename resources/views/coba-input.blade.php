@extends('layouts.main')

@section('title', 'Dashboard')
@section('css', 'dashboard.css')

@section('root')
<div class="container">
    <h3>Input Bab</h3>
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
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mentor</label>
                <select class="form-select" aria-label="Default select example" name="kategori">
                    <option selected>Pilih Kategori</option>
                    <option value="pertanian">Pertanian</option>
                    <option value="perkebunan">Perkebunan</option>
                    <option value="hidroponik">Hidroponik</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">gambar</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
</div>
<div class="container">
    <h3>Input Materi</h3>
    <form class="form-horizontal form-material" method="POST" action="{{route('Tambah.materi')}}"
        enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mentor</label>
                <select class="form-select" aria-label="Default select example" name="kategori">
                    <option selected>Pilih Kategori</option>
                    <option value="pertanian">Pertanian</option>
                    <option value="perkebunan">Perkebunan</option>
                    <option value="hidroponik">Hidroponik</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Bab</label>
                <select class="form-select" aria-label="Default select example" name="bab">
                    <option selected>Pilih Bab</option>
                    @foreach ($bab as $bab)
                        <option value="{{$bab->judul_bab}}">{{$bab->judul_bab}}</option>
                    @endforeach
                </select>
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
                <label for="exampleFormControlInput1" class="form-label">Youtube</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="youtube">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ringkasan</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="ringkasan">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </form>
</div>
