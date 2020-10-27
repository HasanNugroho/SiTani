@extends('dashboard')
@section('table')
<div class="row mt-4">
  <div class="col-md-6 col-sm-6 text-left">
    <h2>Tanggapan Pengguna</h2>
  </div>

</div>
@if(session('status') != Null)
<div class="alert alert-success col-6" role="alert">
  {{session('status')}}
</div>
@endif
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Pesan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    @foreach($feeds as $feed)
    <tr>

      <td scope="col"><?= $i ?></td>
      <td scope="col">{{$feed['nama']}}</td>
      <td scope="col">{{$feed['email']}}</td>
      <td scope="col">{{$feed['message']}}</td>
      <td scope="col">
        <form action="/dashboard/hapus/tanggapan/{{$feed['id']}}" method="POST">
          @csrf
          <input type="hidden" value="{{$feed['id']}}" name="id">
          <button class="btn btn-danger  btn-sm" type="submit">Hapus</button>
        </form>
      </td>
    </tr>
    <?php $i++ ?>
    @endforeach
  </tbody>
</table>
@endsection