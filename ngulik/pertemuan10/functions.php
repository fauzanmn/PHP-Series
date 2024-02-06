<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', 'root', 'mhs_phpseries');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // Jika isi hasil/resultnya hanya 1 data :
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // Jika isi hasil/resultnya banyak data :
  $rows = []; // array kosong
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  };

  return $rows;
}
