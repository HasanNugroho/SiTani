@extends('layout-home.app')

@section('title' , 'Sitani | Perkebunan')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-4 mt-5 text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-webplayer">
                        <img src="{{ Storage::url($bab[0]->gambar)}}" class="card-img-player" alt="...">
                        <div class="card-body">
                            <p class="card-player-small">{{$bab[0]->kategori}}</p>
                            <h5 class="card-player-big">Kelas {{$bab[0]->judul_bab}}</h5>
                            <p class="card-mentor">Mentor : {{$bab[0]->mentor}}</p>
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
                            @foreach($materis as $mat)
                            <a href="/materi/{{$bab[0]->slug}}/{{$mat['materi_ke']}}" class="dftr-playlist">
                                <div class="d-flex align-self-center">
                                    <div class="col-md-1">
                                        <span class="iconify play-icon" data-inline="true" data-icon="ant-design:play-circle-filled"></span>
                                    </div>
                                    <div class="col-md-11">
                                        <p class="materi-playlist">Materi {{$mat['materi_ke']}} - {{$mat['judul']}}</p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-5">
            <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="{{$materi[0]->youtube}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class=" row mt-3">
                <div class="col-6">
                    <h4 class="judul-materi">Materi {{$materi[0]->materi_ke}} - {{$materi[0]->judul}}</h4>
                </div>
                <div class="col-6 text-right">
                    <a href="/download/{{$materi[0]->ringkasan}}" type="button" class="btn btn-success testi-button display-button">DOWNLOAD RINGKASAN</a>
                </div>
            </div>

            <div class="row mt-3 mb-2 align-items-center">
                <hr>

            </div>
            <div class="row">
                <div class="text-center">
                    <p class="teks-komentar">Memiliki pertanyaan mengenai materi yang disampaikan? yuk tanyakan melalui
                        kolom komentar!</p>
                </div>
                @foreach($comment as $c)
                <div class="komentar-pengguna">
                    <div class="row mt-4 d-flex">
                        <div class="col-md-1">
                            <img src="/assets/{{$c['gambar]}}" alt="" class="img-comment" width="50px">
                        </div>
                        <div class="col-md-11">
                            <div class="bagian-komentar">
                                <p class="nama">{{$c['email']}}</p>
                                <p class="tanggal-komen">{{$c->created_at->isoFormat('dddd, D MMMM Y H:m')}}</p>
                                <p class="isi-komentar">{{$c['comment']}}</p>
                                <a href="#komen" class="reply">Reply</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="mt-5 pt-5" id="komen">
                    <div class="bg-form-comment">
                        <form action="/dashboard/komentar" method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{$materi[0]->post_id}}">
                            <div class="row d-flex align-items-center">

                                <div class="col-md-2">
                                    <label for="email" class="col-form-label judul-form">Email</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="email" id="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="row g-3 d-flex align-items-center mt-2">
                                <div class="col-md-2">
                                    <label for="comment" class="col-form-label judul-form">Komentar</label>
                                </div>
                                <div class="col-md-10">
                                    <textarea name="komen" id="comment" cols="50" rows="5" class="form-control" required></textarea>
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
</div>
</div>
</div>
</div>

@endsection