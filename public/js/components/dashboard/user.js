export const user= `

<div class="container-fluid">
  <div class="row mt-4 mb-3">
    <h3 class="mt-2 col-md-6 col-sm-6">User</h3>
    <div class="col-md-6 col-sm-6 text-right">
      <a href="{{route('register')}}" class="btn btn-success btn-md">Tambah Admin</a>
    </div>
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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
        <a href="/edit/{{1}}" class="btn btn-outline-primary btn-sm">Edit Admin</a>
        <a href="/hapus/{{1}}" class="btn btn-outline-danger btn-sm">Hapus</a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
`