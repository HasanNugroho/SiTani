@extends('dashboard')
@section('table')
<div class="row mt-4 d-flex container-fluid">
    <h2>Balas Komentar Pengunjung</h2>
    <div class="col-md-1 mt-4">
        <img src="/assets/{{$komen[0]->gambar}}" alt="" class="img-comment" width="50px">
    </div>
    <div class="col-md-11 mt-4">
        <div class="bagian-komentar">
            <p class="nama">{{$komen[0]->email}}</p>
            <p class="tanggal-komen">{{$komen[0]->comment}}</p>
        </div>
    </div>
    <div class="mt-5 pt-5" id="komen">
        <div class="bg-form-comment">
            <form action="/dashboard/komentar/admin" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{$komen[0]->post_id}}">
                <div class="row d-flex align-items-center">

                    <div class="col-md-2">
                        <label for="email" class="col-form-label judul-form">Email</label>
                    </div>
                    <div class="col-md-10">
                        <input type="email" id="email" class="form-control" name="email" value="adminsitani@gmail.com">
                    </div>
                </div>
                <div class="row g-3 d-flex align-items-center mt-2">
                    <div class="col-md-2">
                        <label for="comment" class="col-form-label judul-form">Komentar</label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="komen" id="comment" cols="50" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="text-right mt-2">
                    <button type="submit" class="btn btn-outline-success btn-comment">KIRIM</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection