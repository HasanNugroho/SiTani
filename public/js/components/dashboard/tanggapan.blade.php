
<h2 class="mt-4 container-fluid">Tanggapan Pemirsa</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Email</th>
      <th scope="col">Pesan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($tanggapan as $key=>$tanggapan)
      <tr>
        <th scope="row">1</th>
        <td>{{$tanggapan->email}}</td>
        <td>{{$tanggapan->message}}</td>
        <td>@mdo</td>
      </tr>
    @endforeach
  </tbody>
</table>
