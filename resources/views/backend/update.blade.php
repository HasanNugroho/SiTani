@extends('dashboard')
@section('table')
<div class="container">
    <div class="mt-4 mb-3">
        <h3>Edit Materi {{$edit->judul}}</h3>
    </div>
    <form method="POST" action="{{route('materi.update')}}"
        enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container mt-4">
            <input type="hidden" value="{{$edit->id}}" name="id">
            <input type="hidden" value="{{$edit->kategori}}" name="kategori">
            <input type="hidden" value="{{$edit->bab}}" name="bab">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Materi Ke</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$edit->materi_ke}}" name="materi_ke">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$edit->judul}}" name="judul">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mentor</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$edit->mentor}}" name="mentor">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Link youtube</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$edit->youtube}}" name="youtube">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ringkasan matei</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" value="{{ Storage::url($edit->ringkasan) }}" name="ringkasan">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection