@extends('layout-home.app')

@section('title' , 'Sitani | Perkebunan')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center">
            <div class="col-md-6">
                <img class="pengembangan-img" src="/image/landing/pengembangan.png">
            </div>
            <div class="col-md-6">
                <div class="notfound">404 NOT FOUND</div>
                <h2 class="about-big">Kelas masih dalam pengembangan nih</h2>
                <p class="about-small">
                    Sayangnya, untuk saat ini, kelas yang ingin kamu ikuti sedang dalam 
                    pengembangan. Mohon untuk cek secara berkala untuk mengetahui 
                    update dari kami ya
                </p>
                <a class="btn btn-light jumbo-button-1" href="/" role="button">KEMBALI</a>
                <a class="btn btn-outline-light about-button-3" href="/#kategori" role="button">BUKA KATEGORI KELAS </a>
            </div>
        </div>
    </div>
@endsection