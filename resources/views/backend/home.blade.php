@extends('dashboard')



@section('table')

<div class="container">
	<div class="row mt-4">
		<div class="col-md-6 col-sm-6 text-left">
			<h2>Dashboard</h2>
		</div>

	</div>
	<div class="row container-fluid mt-3">


		<div class="col-4">
			<a href="/dashboard/user">
				<div class="card text-white">
					<img src="/assets/image/banner/user.png" class="card-img" alt="...">
					<div class="card-img-overlay d-flex">
						<div class="mt-auto ml-auto text-right">
							<h5 class="card-title m-auto d-block">USER</h5>
							<p class="card-text m-auto d-block">Terdaftar {{$users}} User </p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-4 ">
			<a href="/dashboard/kelas">
				<div class="card text-white">
					<img src="/assets/image/banner/kelas.png" class="card-img" alt="...">
					<div class="card-img-overlay d-flex">
						<div class="mt-auto ml-auto text-right">
							<h5 class="card-title m-auto d-block">Kelas</h5>
							<p class="card-text m-auto d-block">Terdapat 3 Kelas</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-4">
			<a href="/dashboard/kelas">

				<div class="card text-white">
					<img src="/assets/image/banner/bab.png" class="card-img" alt="...">
					<div class="card-img-overlay d-flex">
						<div class="mt-auto ml-auto text-right">
							<h5 class="card-title m-auto d-block">Sub Bab</h5>
							<p class="card-text m-auto d-block">Terdapat 3 Bab</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-4 mt-3">
			<a href="/dashboard/tanggapan">
				<div class="card text-white">
					<img src="/assets/image/banner/tanggapan.png" class="card-img" alt="...">
					<div class="card-img-overlay d-flex">
						<div class="mt-auto ml-auto text-right">
							<h5 class="card-title m-auto d-block">Tanggapan Pengguna</h5>
							<p class="card-text m-auto d-block">Terdapat {{$feed}} tanggapan</p>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-4 mt-3">
			<div class="card text-white">
				<img src="/assets/image/banner/komen.png" class="card-img" alt="...">
				<div class="card-img-overlay d-flex">
					<div class="mt-auto ml-auto text-right">
						<h5 class="card-title m-auto d-block">Komentar</h5>
						<p class="card-text m-auto d-block">Terdapat 10 komentar</p>
					</div>
				</div>
			</div>
		</div>


	</div>


</div>

@endsection