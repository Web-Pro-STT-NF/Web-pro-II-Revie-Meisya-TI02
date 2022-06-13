<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nama Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">IPK</th>
      <th scope="col">Predikat</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $no = 1;
    foreach($list_mhs as $mhs):
    ?>

    <tr>
      <th scope="row">$no</th>
      <td><?= $mhs->nim?></td>
      <td><?= $mhs->nama?></td>
      <td><?= $mhs->ipk?></td>
      <td><?= $mhs->predikat{}?></td>
    </tr>
  </tbody>
  <?php
    $no++;
    endforeach;
    ?>

</table>
    </div>

</body>
</html>