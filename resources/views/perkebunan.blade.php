@extends('layout-home.app')

@section('title' , 'Sitani | Perkebunan')

@section('content')
{{-- JUMBOTRON --}}
<div class="jumbotron d-flex" style="background-image: url(/image/perkebunan/jumbotron.png);">
    <div class="container m-auto">
        <h3 class="ktkls mt-5">KATEGORI KELAS</h3>
        <h1 class="jumbo-big mt-3">Pertanian
        </h1>
        <p class="jumbo-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus tortor libero, vel mauris adipiscing suspendisse id risus vitae. Bibendum integer metus, sed tristique.</p>
        <p class="lead mt-5 d-flex">
            <a class="btn btn-light jumbo-button-1" href="#" role="button">LIHAT DAFTAR KELAS</a>
        </p>
    </div>
</div>
{{-- JUMBOTRON END --}}
{{-- ABOUT --}}
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <img src="/image/perkebunan/perkebunan.png" class="about-img" alt="">
        </div>
        <div class="col-md-6">
            <h2 class="about-big">Mengapa harus belajar Perkebunan?</h2>
            <p class="about-small mt-3">
                Perkebunan adalah usaha-usaha di bidang pertanian dengan mengelola dan memasarkan hasil produksi yang biasanya tidak disertai dengan produksi. Keadaan seperti ini sangat mudah ditemukan dalam kehidupan.
            </p>
            <p class="about-small mt-3">
                Perkebunan dapat memberikan lapangan pekerjaan masyarakat, khususnya petani-petani di Indonesia. Hal ini sangatlah wajar mengingat untuk Indonesia sendiri adalah negara agraris (pertanian) yang didukung dengan tingkat kesuburan tanah yang tinggi.
                Yuk ikut serta menjadi #pahlawanpangan, Berkebun itu asyik loh!
            </p>
        </div>
    </div>
</div>
{{-- ABOUT END --}}
{{-- KATEGORI KELAS --}}
<div class="category">
    <div class="container">
        <div class="title-category">
            <h3 class="category-title">Pilih  Kelas</h3>
            <p class="category-description">Yuk, pilih kelas yang ingin kamu ikuti, jangan lupa siapkan buku untuk mencatat ya.
                Klik pada kelas yang ingin kamu ikuti untuk bergabung ke kelas!</p>
        </div>
        <div class="row mt-4 pb-5">
            <div class="col-md-4">
                <a href="">
                    <div class="card card-category">
                        <img class="card-img category-img" src="/image/perkebunan/kelapa-sawit.png" alt="Cabai">
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">Budidaya
                                    Kelapa Sawit</h3>
                                <p class="card-text">Mentor : M. Abdullah Umam M.Hum</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="card card-category">
                        <img class="card-img category-img" src="/image/perkebunan/teh.png"
                            alt="Padi">
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">Budidaya Teh</h3>
                                <p class="card-text">Mentor : Anjay Mabar S.Pd</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="card card-category">
                        <img class="card-img category-img" src="/image/perkebunan/kelapa.png"
                            alt="Jagung">
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">Budidaya Kelapa</h3>
                                <p class="card-text">Mentor : Anjay Mabar S.Pd</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="card card-category">
                        <img class="card-img category-img" src="/image/perkebunan/karet.png"
                            alt="Kacang Tanah">
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">Budidaya karet</h3>
                                <p class="card-text">Mentor : M. Abdullah Umam M.Hum</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="card card-category">
                        <img class="card-img category-img" src="/image/perkebunan/kopi.png"
                            alt="Kacang Panjang">
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">Budidaya Kopi</h3>
                                <p class="card-text">Mentor : Anjay Mabar S.Pd</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/pengembangan">
                    <div class="card card-category">
                        <img class="card-img category-img" src="/image/perkebunan/coming-soon.png"
                            alt="Coming soon">
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">Segera hadir</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- KATEGORI KELAS END --}}
{{-- FEEDBACK --}}
<div class="container mt-5 mb-5">
    <div class="feedback-box">
        <div class="d-flex justify-content-between align-items-center feedback-content">
            <h4 class="feed-big pt-1">Lalu, bagaimana pendapatmu tentang si tani?</h4>
            <button type="button" class="btn btn-success testi-button" data-toggle="modal"
                data-target=".bd-example-modal-sm">KIRIM PENDAPATMU</button>
        </div>
    </div>
</div>
{{-- FEEDBACK END --}}

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="container">
                <div class="modal-body">
                    <div class="mt-2 mb-2 d-flex justify-content-center">
                        <span class="iconify" data-inline="false" data-icon="bi:chat-square-dots-fill" width="45"
                            height="45" style="color: #219653;"></span>
                    </div>
                    <div class="title-modal-feed mb-3">
                        <p>Yuk berikan pendapatmu
                            untuk pengembangan
                            si tani!</p>
                    </div>
                    <form action="" class="text-center">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="label-feed">Email</label>
                            <input type="email" class="form-feed form-control" id="exampleFormControlInput1"
                                placeholder="keitarokatsuki@apple.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2" class="label-feed">Pendapatmu</label>
                            <textarea name="" class="form-feed" id="exampleFormControlInput2" cols="31" rows="6"
                                placeholder="Web nya sih anjay mabar gaming contolodondon mantappu djiwaa bintang 10 ribu rupiah odading mang oleh"></textarea>
                        </div>
                        <div class="btn-fd text-center">
                            <button class="btn btn-outline-light feed-button-no" data-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn btn-success feed-button">KIRIM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
