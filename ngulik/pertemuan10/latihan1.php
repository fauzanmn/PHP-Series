<?php

// Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', 'root', 'mhs_phpseries');

// Query isi tabel mahasiswa
$result = mysqli_query($conn, 'SELECT * FROM mahasiswa');

// Ubah data ke dalam array asosiatif
$rows = []; // array kosong
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
};
// Tampung ke dalam variabel mahasiswa
$mahasiswa = $rows;

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="80"></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
          <a href="">Edit</a> |
          <a href="">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>

</body>

</html>