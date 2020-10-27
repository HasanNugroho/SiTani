@extends('layout-home.app') @section('title' , 'Sitani | Perkebunan')
@section('content')
{{-- JUMBOTRON --}}
<div class="jumbotron d-flex" style="background-image: url(/image/perkebunan/jumbotron.png)">
    <div class="container m-auto jumbo-u">
        <h3 class="ktkls mt-5">KATEGORI KELAS</h3>
        <h1 class="jumbo-big mt-2">Perkebunan</h1>
        <p class="jumbo-small">
            Pada kelas online ini kamu akan belajar cara bertani secara konvensional. Kelas ini cocok untuk kamu yang baru mulai terjun di dunia perkebunan pada umumnya.
        </p>
        <p class="lead mt-4 d-flex">
            <a class="btn btn-light jumbo-button-1" href="#kategori-perkebunan" role="button">LIHAT DAFTAR KELAS</a>
        </p>
    </div>
</div>
{{-- JUMBOTRON END --}}
{{-- ABOUT --}}
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <img src="/image/perkebunan/perkebunan.png" class="about-img" alt="" />
        </div>
        <div class="col-md-6">
            <h2 class="about-big">Mengapa harus belajar Perkebunan?</h2>
            <p class="about-small mt-3">
                Perkebunan adalah usaha-usaha di bidang pertanian dengan
                mengelola dan memasarkan hasil produksi yang biasanya tidak
                disertai dengan produksi. Keadaan seperti ini sangat mudah
                ditemukan dalam kehidupan.
            </p>
            <p class="about-small mt-3">
                Perkebunan dapat memberikan lapangan pekerjaan masyarakat,
                khususnya petani-petani di Indonesia. Hal ini sangatlah wajar
                mengingat untuk Indonesia sendiri adalah negara agraris
                (pertanian) yang didukung dengan tingkat kesuburan tanah yang
                tinggi. Yuk ikut serta menjadi #pahlawanpangan, Berkebun itu
                asyik loh!
            </p>
        </div>
    </div>
</div>
{{-- ABOUT END --}}
{{-- KATEGORI KELAS --}}
<div class="category" id="kategori-perkebunan">
    <div class="container">
        <div class="title-category">
            <h3 class="category-title">Pilih Kelas</h3>
            <p class="category-description">
                Yuk, pilih kelas yang ingin kamu ikuti, jangan lupa siapkan buku
                untuk mencatat ya. Klik pada kelas yang ingin kamu ikuti untuk
                bergabung ke kelas!
            </p>
        </div>
        <div class="row mt-4 pb-5">
            @foreach ($bab as $bab)
            <div class="col-md-4">
                <a href="/materi/{{$bab->slug}}/1">
                    <div class="card card-category">
                        <img class="card-img category-img" src="{{ Storage::url($bab->gambar)}}" alt="Cabai" />
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">
                                    Budidaya {{$bab->judul_bab}}
                                </h3>
                                <p class="card-text">
                                    {{$bab->mentor}}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-md-4">
                <div class="card card-category">
                    <img class="card-img category-cms" src="/image/perkebunan/coming-soon.png" alt="Coming soon" />
                    <div class="card-img-overlay">
                        <div class="category-content">
                            <h3 class="card-title">Segera hadir</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- KATEGORI KELAS END --}}
{{-- FEEDBACK --}}
<div class="container mt-5 mb-5">
    <div class="feedback-box">
        <div class="d-flex justify-content-between align-items-center feedback-content">
            <h4 class="feed-big pt-1">
                Lalu, bagaimana pendapatmu tentang si tani?
            </h4>
            <button type="button" class="btn btn-success testi-button" data-toggle="modal" data-target=".bd-example-modal-sm">
                KIRIM PENDAPATMU
            </button>
        </div>
    </div>
</div>
{{-- FEEDBACK END --}}

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="container">
                <div class="modal-body">
                    <div class="mt-2 mb-2 d-flex justify-content-center">
                        <span class="iconify" data-inline="false" data-icon="bi:chat-square-dots-fill" width="45" height="45" style="color: #219653"></span>
                    </div>
                    <div class="title-modal-feed mb-3">
                        <p>
                            Yuk berikan pendapatmu untuk pengembangan si tani!
                        </p>
                    </div>
                    <form action="" class="text-center">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="label-feed">Email</label>
                            <input type="email" class="form-feed form-control" id="exampleFormControlInput1" placeholder="keitarokatsuki@apple.com" />
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2" class="label-feed">Pendapatmu</label>
                            <textarea name="" class="form-feed" id="exampleFormControlInput2" cols="31" rows="6" placeholder="Web nya sih anjay mabar gaming contolodondon mantappu djiwaa bintang 10 ribu rupiah odading mang oleh"></textarea>
                        </div>
                        <div class="btn-fd text-center">
                            <button class="btn btn-outline-light feed-button-no" data-dismiss="modal">
                                CANCEL
                            </button>
                            <button type="submit" class="btn btn-success feed-button">
                                KIRIM
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection