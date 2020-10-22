<!-- user/profile , logout -->


@extends('layouts.main')

@section('title', 'Dashboard')
@section('css', 'dashboard.css')

@section('root')


<div class="row con">
    <div class="col-md-3 sidebar" id="sidebar">
        <div id="sidebar-side">
            
            <img src="/assets/image/logo.png" alt="" class="img-fluid d-flex m-auto my-4" width="200px">
              <a href="#"class="nav-link sidebar-nav my-3" aria-current="true" id="home">
              <span class="iconify" data-icon="ion:speedometer-outline" data-inline="false"></span>
                Ringkasan Performa
                </a>
                <hr>
                <a href="#" class="nav-link sidebar-nav mt-3" aria-current="true" id="kelas">
                    <span class="iconify" data-icon="ic:baseline-class" data-inline="false"></span>
                    Kelas
                </a>
                <div class="ml-4">
                    <a href="#" class="nav-link sidebar-nav " id="pertanian">
                        Pertanian
                    </a>
                    <a href="#" class="nav-link sidebar-nav" aria-current="true" id="kebun">
                        Perkebunan
                    </a>
                    <a href="#" class="nav-link sidebar-nav mb-3" aria-current="true" id="hidroponik">
                        Hidroponik
                    </a>
                </div>
                <hr>
                <a href="#" class="nav-link sidebar-nav mt-3" aria-current="true" id="tanggapan">
                    <span class="iconify" data-icon="ant-design:star-filled" data-inline="false"></span>
                    Tanggapan Pengguna
                </a>
                <a href="#" class="nav-link sidebar-nav mb-3" aria-current="true" id="komentar">
                    <span class="iconify" data-icon="gridicons:chat" data-inline="false"></span>
                    Komentar
                </a>
                <hr>
                <a href="#" class="nav-link sidebar-nav my-3" aria-current="true" id="user">
                    <span class="iconify" data-icon="bx:bxs-user" data-inline="false"></span>
                    User
                </a>
                <hr>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" href="/logout" class="btn btn-success  mt-4 d-flex mx-4">Logout</button>
            </form>
        </div>
<div class="col" id="root">
</div>  
</div>



<script src="/js/dashboard.js" type="module">
</script>

@endsection
