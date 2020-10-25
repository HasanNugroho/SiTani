@extends('dashboard')
@section('table')
<div class="container">
    <div class="mt-4 mb-3">
        @foreach ($bab as $bab)
        <h3>Tambah Materi {{$bab->judul_bab}}</h3>
    </div>
    <form class="form-horizontal form-material" method="POST" action="{{route('materi.post')}}"
        enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">
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
@endsection
