
<h2 class="mt-4 container-fluid">User</h2>

  <div class="col-md text-right container-fluid my-3">
      <a href="/register" class="btn btn-success btn-md">Tambah Admin</a>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($users as $user):?>
    <tr>
      <th scope="row">1</th>
      <td>{{$user->name}}</td>
      <td>Otto</td>
      <td>
        <a href="/edit/{{1}}" class="btn btn-outline-primary btn-sm">Edit Admin</a>
        <a href="/hapus/{{id}}" class="btn btn-outline-danger btn-sm">Hapus</a>
      </td>
    </tr>
  <?php endforeach?>
  </tbody>
</table>
</div>