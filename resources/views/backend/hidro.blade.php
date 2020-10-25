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
        <?php $i = 1 ?>
        @foreach ($bab as $key => $bab)
        <tr>
            <td scope="col">{{$i}}</td>
            <td scope="col">{{$bab->judul_bab}}</th>
            <td scope="col"><img class="show-img" src="{{ Storage::url($bab->gambar)}}" alt="{{$bab->gambar}}"></th>
            <td scope="col">{{$bab->mentor}}</th>
            <td scope="col">{{$bab->slug}}</td>
            <td scope="col">
                <a href="/dashboard/kelas/materi/{{$bab->slug}}" class="btn btn-sm btn-outline-success">Show</a>
            </td>
        </tr>
        <?php $i++ ?>
        @endforeach
    </tbody>
</table>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Bab Hidroponik</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal form-material" method="POST" action="{{route('bab.post')}}" enctype="multipart/form-data">
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
                            {{-- <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                            <select  class="form-select" aria-label="Default select example" name="kategori">
                                <option selected>Pilih Kategori</option>
                                <option value="pertanian">Pertanian</option>
                                <option value="perkebunan">Perkebunan</option>
                                <option value="hidroponik">Hidroponik</option>
                            </select> --}}
                            <input type="hidden" value="hidroponik" name="kategori">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">gambar</label>
                            <input type="file" class="form-control" id="exampleFormControlInput1" name="gambar">
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