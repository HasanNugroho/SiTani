<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,600;0,700;0,800;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/@yield('css')">
    <title>Sitani | @yield('title')</title>
</head>

<body>
    @section('root')
    @show


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
        integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous">
    </script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
</body>
<!-- Modal -->
<!-- {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container">
                <div class="modal-body">
                    <div class="mt-2 mb-2 d-flex justify-content-center">
                        <h2>Update materimu</h2>
                    </div>
                    <form method="POST" action="{{route('tambah.materi')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label for="em" class="form-label">Kategori</label>
                          <select class="form-select" aria-label="Default select example" name="kategori" required>
                              <option selected>Pilih kategori</option>
                              <option value="pertanian">Pertanian</option>
                              <option value="perkebunan">Perkebunan</option>
                              <option value="hidroponik">Hidroponik</option>
                          </select>
                      </div>
                      <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Materi</label>
                          <select class="form-select" aria-label="Default select example" name="materi" required>
                              <option selected>Pilih materi</option>
                              <option value="cabai">Cabai</option>
                              <option value="padi">Padi</option>
                              <option value="jagung">Jagung</option>
                              <option value="kacang tanah">Kacang Tanah</option>
                              <option value="kacang panjang">Kacang Panjang</option>
                              <option value="kelapa sawit">Kelapa Sawit</option>
                              <option value="kelapa">Kelapa</option>
                              <option value="teh">Teh</option>
                              <option value="kopi">Kopi</option>
                              <option value="karet">Karet</option>
                              <option value="kangkung">Kangkung</option>
                              <option value="tomat">Tomat</option>
                              <option value="brokoli">Brokoli</option>
                              <option value="sawi">Sawi</option>
                              <option value="bayam">Bayam</option>
                              <option value="selada">Selada</option>
                              <option value="pakcoy">Pakcoy</option>
                              <option value="stroberi">Stroberi</option>
                          </select>
                      </div>
                      <div class="mb-3">
                          <label for="subbab" class="form-label">Judul</label>
                          <input type="text" class="form-control" id="subbab" name="judul" required>
                      </div>
                      <div class="mb-3">
                          <label for="mentor" class="form-label">Mentor</label>
                          <input type="text" class="form-control" id="mentor" name="mentor" required>
                      </div>
                      <div class="mb-3">
                          <label for="link" class="form-label">Link materi youtube</label>
                          <input type="text" class="form-control" id="link" name="youtube" required>
                      </div>
                      <div class="mb-3">
                          <label for="file" class="form-label">Ringkasan materi</label>
                          <input type="file" class="form-control" id="file" name="ringkasan" required>
                      </div>
                      <div class="text-right mt-3">
                        <button class="btn btn-outline-danger" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-success">KIRIM</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div> --}} -->
</html>
