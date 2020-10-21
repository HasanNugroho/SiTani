@extends('layout-home.app')

@section('title' , 'Si Tani')

@section('content')
{{-- JUMBOTRON --}}

<div class="jumbotron d-flex" style="background-image: url(/image/landing/jumbotron.png);">
    <div class="container m-auto">
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
<div class="container mt-5 mb-5" id="tentang">
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
            <a class="btn btn-outline-light about-button-3" href="#" role="button">PELAJARI LEBIH LANJUT </a>
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
                <a href="">
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
                <a href="">
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
                <a href="">
                    <div class="card card-category">
                        <img class="card-img category-img" src="/image/landing/kategori-hidroponik.png"
                            alt="Kategori Pertanian">
                        <div class="card-img-overlay">
                            <div class="category-content">
                                <h3 class="card-title">Kategori Pertanian Sistem Hidroponik</h3>
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
<div class="container" id="keuntungan">
    <div class="judul-keuntungan">
        <h3 class="keuntungan-judul">Apa keuntungan belajar bareng si tani?</h3>
        <p class="deskripsi-keuntungan">Dengan gabung ke kelas gratis di si tani tentu aja ada banyak keuntunganya loh,
            kira-kira apa saja keuntungnya yuk simak!</p>
    </div>
    <div class="row mb-5 pb-4">
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
{{-- KEUNTUNGAN END --}}
{{-- TESTIMONY --}}
<div class="container">
    <div class="testi-title pt-5">
        <h3>Apa kata mereka?</h3>
    </div>
    <div class="carousel-testi">
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-1 align-btn">
                        <a class="btn btn-carousel mb-3" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <span class="iconify" data-icon="grommet-icons:form-previous" color="#219653" data-width="30" data-height="30" data-inline="false"></span>
                        </a>
                    </div>
                    <div class="col-10">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 mb-3 justify-content-center">
                                            <div class="card-testi">
                                                <div class="body-testi">
                                                    <p class="card-text testi-small">Gurunya cantique banged asw mantappu djiwaaaaaaaaa!</p>
                                                    <h4 class="card-title testi-big">AnonymousPride3</h4>
                                                    <img class="testi-img-round" alt="Image"
                                                        src="/image/landing/profil1.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 justify-content-center">
                                            <div class="card-testi">
                                                <div class="body-testi">
                                                    <p class="card-text testi-small">Suka deh sama kelasnya, cara penyampaiannya asik parah dongg!</p>
                                                    <h4 class="card-title testi-big">Up Gan hehe</h4>
                                                    <img class="testi-img-round" alt="Image"
                                                        src="/image/landing/profil2.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 justify-content-center">
                                            <div class="card-testi">
                                                <div class="body-testi">
                                                    <p class="card-text testi-small">Gue siapa yak uhuy :3</p>
                                                    <h4 class="card-title testi-big">Anula</h4>
                                                    <img class="testi-img-round" alt="Image"
                                                        src="/image/landing/profil3.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card-testi">
                                                <div class="body-testi">
                                                    <p class="card-text testi-small">Gurunya cantique banged asw mantappu djiwaaaaaaaaa!</p>
                                                    <h4 class="card-title testi-big">AnonymousPride3</h4>
                                                    <img class="testi-img-round" alt="Image"
                                                        src="/image/landing/profil2.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card-testi">
                                                <div class="body-testi">
                                                    <p class="card-text testi-small">Gurunya cantique banged asw mantappu djiwaaaaaaaaa!</p>
                                                    <h4 class="card-title testi-big">AnonymousPride3</h4>
                                                    <img class="testi-img-round" alt="Image"
                                                        src="/image/landing/profil3.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card-testi">
                                                <div class="body-testi">
                                                    <p class="card-text testi-small">Gurunya cantique banged asw mantappu djiwaaaaaaaaa!</p>
                                                    <h4 class="card-title testi-big">AnonymousPride3</h4>
                                                    <img class="testi-img-round" alt="Image"
                                                        src="/image/landing/profil1.png">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 align-btn">
                        <a class="btn btn-carousel mb-3" href="#carouselExampleIndicators2" role="button"
                            data-slide="next">
                            <span class="iconify" data-icon="ic:baseline-navigate-next" color="#219653" data-width="30" data-height="30" data-inline="false"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
{{-- TESTIMONY END --}}
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
@endsection
