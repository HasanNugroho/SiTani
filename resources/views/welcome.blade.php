@extends('layout-home.app')

@section('title' , 'Si Tani')

@section('content')
{{-- JUMBOTRON --}}
<div class="jumbotron" style="background-image: url(/image/landing/jumbotron.svg);">
    <div class="container">
        <h1 class="jumbo-big">Kini, semua bisa
            menjadi #petanimillenial,
            bareng <img class="jumbo-big-image" src="/image/landing/icon.svg">
        </h1>
        <p class="jumbo-small">Bareng si tani, kamu bisa mendapatkan kursus menjadi petani cerdas dibimbing
            mentor-mentor yang berkompeten dibidangnya loh! tunggu apalagi? yuk gabung sekarang!</p>
        <p class="lead mt-5 d-flex">
            <a class="btn btn-light jumbo-button-1" href="#" role="button">GABUNG KE KELAS</a>
            <a class="btn btn-outline-light ml-3 jumbo-button-2" href="#" role="button">APA KEUNTUNGANNYA?</a>
        </p>
    </div>
</div>
{{-- JUMBOTRON END --}}
{{-- ABOUT --}}
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <img src="/image/landing/img-about.svg" class="about-img" alt="">
        </div>
        <div class="col-md-6">
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
<div class="category">
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
                        <img class="card-img category-img" src="/image/landing/kategori-pertanian.svg" alt="Kategori Pertanian">
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
                        <img class="card-img category-img" src="/image/landing/kategori-perkebunan.svg"
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
                        <img class="card-img category-img" src="/image/landing/kategori-hidroponik.svg"
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
<div class="container">
    <div class="judul-keuntungan">
        <h3 class="keuntungan-judul">Apa keuntungan belajar bareng si tani?</h3>
        <p class="deskripsi-keuntungan">Dengan gabung ke kelas gratis di si tani tentu aja ada banyak keuntunganya loh,
            kira-kira apa saja keuntungnya yuk simak!</p>
    </div>
    <div class="row mb-5 pb-4">
        <div class="col-md-3">
            <img class="img-keuntungan" src="/image/landing/keuntungan1.svg" alt="Gratis">
            <h4 class="keuntungan-big">Tanpa dipungut biaya apapun</h4>
            <p class="keuntungan-small">Kamu nggak perlu mengeluarkan uang satu rupiah pun untuk mengukuti semua kelas
                yang ada.</p>
        </div>
        <div class="col-md-3">
            <img class="img-keuntungan" src="/image/landing/keuntungan2.svg" alt="Mentor yang handal">
            <h4 class="keuntungan-big">Dibimbing mentor berpengalaman</h4>
            <p class="keuntungan-small">Semua mentor si tani berpengalaman pada bidangnya masing-masing dan memiliki
                cara mengajar yang menyenangkan.</p>
        </div>
        <div class="col-md-3">
            <img class="img-keuntungan" src="/image/landing/keuntungan3.svg" alt="Materi berkualitas">
            <h4 class="keuntungan-big">Video dan materi yang berkualitas</h4>
            <p class="keuntungan-small">Video pembelajaran yang ada di si tani, semua memiliki resolusi maksimal hingga
                1080p! dan materi yang dibuat mudah dipahami.</p>
        </div>
        <div class="col-md-3">
            <img class="img-keuntungan" src="/image/landing/keuntungan4.svg" alt="Ringkasan materi tersedia">
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
