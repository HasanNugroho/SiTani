@extends('dashboard')
@section('table')
<h2 class="mt-4 container-fluid">Daftar Kelas</h2>
<div class="row container-fluid mt-3">

	<div class="col-5">
		<a href="/dashboard/kelas/tani">
			<div class="card text-white">
				<img src="/assets/image/banner/tani.png" class="card-img" alt="...">
				<div class="card-img-overlay d-flex">
					<div class="mt-auto ml-auto text-right">
						<h5 class="card-title m-auto d-block">Pertanian</h5>
						<p class="card-text m-auto d-block">Terdapat {{$tani}} Bab Materi Pertanian</p>
					</div>
				</div>
			</div>
		</a>
	</div>
	<div class="col-5">
		<a href="/dashboard/kelas/kebun">

			<div class="card text-white">
				<img src="/assets/image/banner/hidro.png" class="card-img" alt="...">
				<div class="card-img-overlay d-flex">
					<div class="mt-auto ml-auto text-right">
						<h5 class="card-title m-auto d-block">Perkebunan</h5>
						<p class="card-text m-auto d-block">Terdapat {{$kebun}} Bab Materi Perkebunan</p>
					</div>
				</div>
			</div>
		</a>
	</div>

	<div class="col-5 mt-3">
		<a href="/dashboard/kelas/hidroponik">
			<div class="card text-white">
				<img src="/assets/image/banner/kebun.png" class="card-img" alt="...">
				<div class="card-img-overlay d-flex">
					<div class="mt-auto ml-auto text-right">
						<h5 class="card-title m-auto d-block">Hidroponik</h5>
						<p class="card-text m-auto d-block">Terdapat {{$hidro}} Bab Materi Hidroponik</p>
					</div>
				</div>
			</div>
		</a>
	</div>

</div>
</div>
@endsection