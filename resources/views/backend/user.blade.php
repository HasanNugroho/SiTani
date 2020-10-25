@extends('dashboard')



@section('table')

<div class="row mt-4">
  <div class="col-md-6 col-sm-6 text-left">
    <h2>User Terdaftar</h2>
  </div>
  <div class="col-md-6 col-sm-6 text-right">
    <a href="/register" class="btn btn-success mr-3">
      Tambah User
    </a>
  </div>
</div>
<table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    @foreach($users as $user)
    <tr>

      <td scope="col"><?= $i ?></td>
      <td scope="col">{{$user['name']}}</td>
      <td scope="col">{{$user['email']}}</td>
      <td scope="col">
        <form action="/dashboard/user" method="POST">
          @csrf
          <input type="hidden" value="{{$user['id']}}" name="id">
          <button class="btn btn-danger  btn-sm" type="submit" onclick="confirm()">Hapus</button>
        </form>
      </td>
    </tr>
    <?php $i++ ?>
    @endforeach
  </tbody>
</table>

@endsection