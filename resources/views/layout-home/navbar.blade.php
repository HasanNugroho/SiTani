<nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-font basic-color">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/image/landing/icon.svg" width="80" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-3">
                    <a class="nav-link" href="/" aria-current="date">TEMUKAN</a>
                </li>
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        KATEGORI KELAS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pertanian">Pertanian</a>
                        <a class="dropdown-item" href="/perkebunan">Perkebunan</a>
                        <a class="dropdown-item" href="/hidroponik">Hidroponik</a>
                    </div>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#keuntungan">KENAPA HARUS SI TANI?</a>
                </li>

                <li class="nav-item mr-3">
                    <a class="nav-link" data-toggle="modal"
                    data-target=".bd-example-modal-sm" href="">SARAN</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">TENTANG</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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
                    <form action="{{route('feedback.post')}}" method="POST" class="text-left">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="label-feed">Email</label>
                            <input type="email" class="form-feed form-control" id="exampleFormControlInput1"
                                placeholder="keitarokatsuki@apple.com" name="email" required>
                        </div>
                        <div class="form-group mt-2">
                            <label for="exampleFormControlInput2" class="label-feed">Pendapatmu</label>
                            <textarea required name="message" class="form-feed form-control"
                                id="exampleFormControlInput2" cols="31" rows="6"
                                placeholder="Web nya sih anjay mabar gaming contolodondon mantappu djiwaa bintang 10 ribu rupiah odading mang oleh"></textarea>
                        </div>
                        <div class="btn-fd text-center mt-3">
                            <button class="btn btn-outline-light feed-button-no" data-dismiss="modal">CANCEL</button>
                            <button type="submit" class="btn btn-success feed-button">KIRIM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
