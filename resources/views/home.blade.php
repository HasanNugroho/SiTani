@extends('layout-home.app')

@section('title' , 'Si Tani')

@section('content')
{{-- JUMBOTRON --}}

<div class="jumbotron d-flex" style="background-image: url(/image/landing/jumbotron.png);">
    <div class="container jumbo-u">
        <h1 class="jumbo-big">Kini, semua bisa
            menjadi #petanimillenial,
            bareng <img class="jumbo-big-image" src="/image/landing/icon.svg">
        </h1>
        <p class="jumbo-small">Bareng si tani, kamu bisa mendapatkan kursus menjadi petani cerdas dibimbing
            mentor-mentor yang berkompeten dibidangnya loh! tunggu apalagi? yuk gabung sekarang!</p>
        <p class="lead mt-5">
            <a class="btn btn-light jumbo-button-1" href="#kategori" role="button">GABUNG KE KELAS</a>
            <a class="btn btn-outline-light jumbo-button-2" href="#keuntungan" role="button">APA KEUNTUNGANNYA?</a>
        </p>
    </div>
</div>
{{-- JUMBOTRON END --}}
{{-- ABOUT --}}
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <img src="/image/landing/img-about.png" class="about-img" alt="">
        </div>
        <div class="col-md">
            <h2 class="about-big">Selamat Datang di
                Sinau Tani Indonesia!</h2>
            <p class="about-small">
                Sinau Tani Indonesia atau biasa di singkat sitani, adalah sebuah platform website yang menyediakan kelas
                online gratis, yang membahas berbagai hal mengenai pertanian dan perkebunan dari tradisional maupun
                pertanian modern.
                <br> tani, dirancang untuk mudah dipahami dan digunakan di semua elemen masyarakat. Materi yang
                disampaikan pun dibuat mudah dipahami dan dipandu mentor yang berpengalaman loh!
            </p>
        </div>
    </div>
</div>
{{-- ABOUT END --}}
{{-- KATEGORI KELAS --}}
<div class="category" id="kategori">
    <div class="container">
        <div class="title-category">
            <h3 class="category-title">Pilih kategori kelas </h3>
            <p class="category-description">Yuk, pilih kategori kelas yang ingin kamu ikuti, semuanya gratis kok.
                Klik pada kategori yang ingin kamu ikuti untuk melihat kelas yang tersedia ya!.</p>
        </div>
        <div class="row mt-4 pb-5">
            <div class="col-md-4">
                <a href="/pertanian">
                    <div class="card card-category">
                        <img class="card-img category-img" src="/image/landing/kategori-pertanian.png"
                            alt="Kategori Pertanian">
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">Kategori Pertanian</h3>
                                <p class="card-text">Tersedia 5 kelas yang bisa kamu ikuti!</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/perkebunan">
                    <div class="card card-category">
                        <img class="card-img category-img" src="/image/landing/kategori-perkebunan.png"
                            alt="Kategori Pertanian">
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">Kategori Perkebunan</h3>
                                <p class="card-text">Tersedia 4 kelas yang bisa kamu ikuti!</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/hidroponik">
                    <div class="card card-category">
                        <img class="card-img category-img" src="/image/landing/kategori-hidroponik.png"
                            alt="Kategori Pertanian">
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">Kategori Pertanian Hidroponik</h3>
                                <p class="card-text">Tersedia 2 kelas yang bisa kamu ikuti!</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- KATEGORI KELAS END --}}
{{-- KEUNTUNGAN --}}
<div class="container pt-3" id="keuntungan">
    <div class="keuntungan" >
        <div class="judul-keuntungan">
            <h3 class="keuntungan-judul">Apa keuntungan belajar bareng si tani?</h3>
            <p class="deskripsi-keuntungan mb-5">Dengan gabung ke kelas gratis di si tani tentu aja ada banyak keuntunganya loh,
                kira-kira apa saja keuntungnya yuk simak!</p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img class="img-keuntungan" src="/image/landing/keuntungan1.png" alt="Gratis">
                <h4 class="keuntungan-big">Tanpa dipungut biaya apapun</h4>
                <p class="keuntungan-small">Kamu nggak perlu mengeluarkan uang satu rupiah pun untuk mengukuti semua kelas
                    yang ada.</p>
            </div>
            <div class="col-md-3">
                <img class="img-keuntungan" src="/image/landing/keuntungan2.png" alt="Mentor yang handal">
                <h4 class="keuntungan-big">Dibimbing mentor berpengalaman</h4>
                <p class="keuntungan-small">Semua mentor si tani berpengalaman pada bidangnya masing-masing dan memiliki
                    cara mengajar yang menyenangkan.</p>
            </div>
            <div class="col-md-3">
                <img class="img-keuntungan" src="/image/landing/keuntungan3.png" alt="Materi berkualitas">
                <h4 class="keuntungan-big">Video dan materi yang berkualitas</h4>
                <p class="keuntungan-small">Video pembelajaran yang ada di si tani, semua memiliki resolusi maksimal hingga
                    1080p! dan materi yang dibuat mudah dipahami.</p>
            </div>
            <div class="col-md-3">
                <img class="img-keuntungan" src="/image/landing/keuntungan4.png" alt="Ringkasan materi tersedia">
                <h4 class="keuntungan-big">Gratis ringkasan materi yang bisa kamu unduh</h4>
                <p class="keuntungan-small">Setelah menyimak pembelajaran, kamu juga bisa mendapatkan ringkasan materi yang
                    disampaikan untuk kamu pelajari lagi loh..</p>
            </div>
        </div>
    </div>
</div>
{{-- KEUNTUNGAN END --}}
{{-- TESTIMONY --}}
<div class="container" id="testimoni">
    <div class="pt-5 mb-5">
        <h3 class="testi-title">Apa kata mereka?</h3>
    </div>
    <div class="carousel-testi pb-4">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($tanggapan as $tanggapan)
                    <div class="swiper-slide">
                        <div class="card-testi">
                            <div class="body-testi">
                                <p class="card-text testi-small">{{$tanggapan->message}}</p>
                                <h4 class="card-title testi-big">{{$tanggapan->nama}}</h4>
                                <img class="testi-img-round" alt="Image"
                                src="/image/landing/profil1.png">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            {{-- <div class="swiper-button-next swp"></div>
            <div class="swiper-button-prev swp"></div> --}}
        </div>
    </div>
</div>
  <!-- Swiper -->

{{-- TESTIMONY END --}}
{{-- FEEDBACK --}}
<div class="container mt-5 mb-5">
    <div class="feedback-box">
        <div class="d-flex justify-content-between align-items-center feedback-content">
            <h4 class="feed-big pt-1">Lalu, bagaimana pendapatmu tentang si tani?</h4>
            <button type="button" class="btn btn-success testi-button btn1" data-toggle="modal"
                data-target=".bd-example-modal-sm">KIRIM PENDAPATMU</button>
        </div>
    </div>
</div>
{{-- FEEDBACK END --}}
@endsection
