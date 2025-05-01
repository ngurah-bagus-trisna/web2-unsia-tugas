<?php

$servername = "10.10.0.1";
$username = "root";
$password = "wait";
$dbname = "unsia";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3309", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = $conn->query("select * from mahasiswa");
  
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  //echo "Connected successfully";

} catch (\Throwable $th) {
  echo "Connection failed: " . $th->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Php</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    h1 {
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #007BFF;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    </style>
</head>

<body>
  <h1>Data Mahasiswa</h1>
  <table border="1">
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Kelas</th>
      <th>Program Studi</th>
      <th>Angkatan</th>

    </tr>
    <?php foreach ($result as $row): ?>
      <tr>
        <td><?php echo htmlspecialchars($row['id']); ?></td>
        <td><?php echo htmlspecialchars($row['nim']); ?></td>
        <td><?php echo htmlspecialchars($row['nama']); ?></td>
        <td><?php 
          if (htmlspecialchars($row['jenis_kelamin']) == 'L') {
            echo "Laki-laki";
          } else {
            echo "Perempuan";
          }
        ?></td>
        <td><?php echo htmlspecialchars($row['kelas']); ?></td>
        <td><?php echo htmlspecialchars($row['program_studi']); ?></td>
        <td><?php echo htmlspecialchars($row['angkatan']); ?></td>
      </tr>
    <?php endforeach; ?>
</body>
</html>