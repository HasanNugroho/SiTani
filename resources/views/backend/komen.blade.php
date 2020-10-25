@extends('dashboard')
@section('table')
<div class="row mt-4">
    <div class="col-md-6 col-sm-6 text-left">
        <h2>Komentar Pengguna</h2>
    </div>

</div>
<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Email</th>
            <th scope="col">Komentar</th>
            <th scope="col">Avatar</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 ?>
        @foreach($comments as $comment)
        <tr>

            <td scope="col"><?= $i ?></td>
            <td scope="col">{{$comment['email']}}</td>
            <td scope="col">{{$comment['comment']}}</td>
            <td scope="col">{{$comment['gambar']}}</td>
            <td scope="col">
                <form action="/dashboard/komen" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="_method" value="delete" />
                    <input type="hidden" value="{{$comment['id']}}" name="id">
                    <button class="btn btn-danger  btn-sm " type="submit" style="width: 60px;">Hapus</button>
                </form>
                <a href="#" class="btn btn-warning btn-sm  d-inline-block" style="width: 60px; height:30px;">Balas</a>
            </td>
        </tr>
        <?php $i++ ?>
        @endforeach
    </tbody>
</table>
@endsection