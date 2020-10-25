@extends('layout-home.app')

@section('title' , 'Sitani | Perkebunan')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-4 mt-5 text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-webplayer">
                        <img src="/image/pertanian/cabai.png" class="card-img-player" alt="...">
                        <div class="card-body">
                            <p class="card-player-small">PERTANIAN</p>
                            <h5 class="card-player-big">Kelas Budidaya Tanaman Cabai</h5>
                            <p class="card-mentor">Mentor : M. Abdullah Umam M.Hum</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12 mt-2">
                    <div class="card-webplayer">
                        <div class="judul-playlist text-center">
                            <p>Daftar materi :</p>
                        </div>
                        <div class="daftar-playlist">
                            <a href="">
                                <div class="d-flex align-self-center">
                                    <div class="col-md-1">
                                        <span class="iconify play-icon" data-inline="true" data-icon="ant-design:play-circle-filled"></span>
                                    </div>
                                    <div class="col-md-11">
                                        <p class="materi-playlist">Materi I - Persiapan sebelum budidaya cabai</p>
                                    </div>
                                </div>
                            </a>
                            <div class="d-flex align-self-center">
                                <div class="col-md-1">
                                    <span class="iconify play-icon" data-inline="true" data-icon="ant-design:play-circle-filled"></span>
                                </div>
                                <div class="col-md-11">
                                    <p class="materi-playlist">Materi II - Memilih bibit cabai yang pas</p>
                                </div>
                            </div>
                            <div class="d-flex align-self-center">
                                <div class="col-md-1">
                                    <span class="iconify play-icon" data-inline="true" data-icon="ant-design:play-circle-filled"></span>
                                </div>
                                <div class="col-md-11">
                                    <p class="materi-playlist">Materi I - Persiapan sebelum budidaya cabai</p>
                                </div>
                            </div>
                            <div class="d-flex align-self-center">
                                <div class="col-md-1">
                                    <span class="iconify play-icon" data-inline="true" data-icon="ant-design:play-circle-filled"></span>
                                </div>
                                <div class="col-md-11">
                                    <p class="materi-playlist">Materi III - Tata cara menyemai cabai agar hasil maksimal</p>
                                </div>
                            </div>
                            <div class="d-flex align-self-center">
                                <div class="col-md-1">
                                    <span class="iconify play-icon" data-inline="true" data-icon="ant-design:play-circle-filled"></span>
                                </div>
                                <div class="col-md-11">
                                    <p class="materi-playlist">Materi V - Teknik Pemupukan cabai yang tepat</p>
                                </div>
                            </div>
                            <div class="d-flex align-self-center">
                                <div class="col-md-1">
                                    <span class="iconify play-icon" data-inline="true" data-icon="ant-design:play-circle-filled"></span>
                                </div>
                                <div class="col-md-11">
                                    <p class="materi-playlist">Materi VI - Perawatan cabai dan cara memanen cabai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-5">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <h4 class="judul-materi">Materi III - Tata cara menyemai cabai agar hasil Baksimal</h4>
                </div>
                <div class="col-6 text-right">
                    <button type="button" class="btn btn-success testi-button display-button">DOWNLOAD RINGKASAN</button>
                </div>
            </div>
            {{-- <p class="about-small">
                Sayangnya, untuk saat ini, kelas yang ingin kamu ikuti sedang dalam
                pengembangan. Mohon untuk cek secara berkala untuk mengetahui
                update dari kami ya
            </p> --}}
            <div class="row mt-3 mb-2 align-items-center">
                <hr>
                <div class="col-md-6">
                    <a href="#" class="prev d-flex">
                        <span class="iconify" data-icon="grommet-icons:form-next-link" data-width="24" data-height="24" data-inline="true" data-flip="horizontal"></span>
                        <p class="not-hidden">Materi Sebelumnya</p>
                        <p class="hidden">Sebelumnya</p>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="next d-flex float-right">
                        <p class="not-hidden">Materi selanjutnya</p>
                        <p class="hidden">Selanjutnya</p>
                        <span class="iconify" data-icon="grommet-icons:form-next-link" data-width="24" data-height="24"></span>
                    </a>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="text-center">
                    <p class="teks-komentar">Memiliki pertanyaan mengenai materi yang disampaikan? yuk tanyakan melalui kolom komentar!</p>
                </div>
                <div class="komentar-pengguna">
                    <div class="row mt-4 d-flex">
                        <div class="col-md-1">
                            <img src="/image/asset/profil.png" alt="" class="img-comment">
                        </div>
                        <div class="col-md-11">
                            <div class="bagian-komentar">
                                <p class="nama">Marcus Schleifer</p>
                                <p class="tanggal-komen">Senin, 12 Juni 2098 at 18:56</p>
                                <p class="isi-komentar">Wah, pak susanto, saya sudah mempraktekkan, tetapi setelah di anu, jadi kering pak,
                                    bagaimana ya cara biar nggak kering?</p>
                                <a href="#" class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 d-flex">
                        <div class="col-md-1">
                            <img src="/image/asset/profil.png" alt="" class="img-comment">
                        </div>
                        <div class="col-md-11">
                            <div class="bagian-komentar">
                                <p class="nama">Giana Passaquindici Arcand</p>
                                <p class="tanggal-komen">Senin, 12 Juni 2098 at 18:56</p>
                                <p class="isi-komentar">Wah, pak susanto, saya sudah mempraktekkan, tetapi setelah di anu, jadi kering pak,
                                    bagaimana ya cara biar nggak kering?</p>
                                <a href="#" class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 ml-5 d-flex">
                        <div class="col-md-1 ">
                            <img src="/image/asset/profil.png" alt="" class="img-comment">
                        </div>
                        <div class="col-md-11">
                            <div class="bagian-komentar">
                                <p class="nama">Madelyn Aminoff</p>
                                <p class="tanggal-komen">Senin, 12 Juni 2098 at 18:56</p>
                                <p class="isi-komentar">Wah, pak susanto, saya sudah mempraktekkan, tetapi setelah di anu, jadi kering pak,
                                    bagaimana ya cara biar nggak kering?</p>
                                <a href="#" class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="bg-form-comment">
                        <form action="/dashboard/komentar" method="POST">
                            @csrf
                            <div class="row d-flex align-items-center">

                                <div class="col-md-2">
                                    <label for="email" class="col-form-label judul-form">Email</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="email" id="email" class="form-control" name="email">
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
        </div>
    </div>
</div>
@endsection