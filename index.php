<?php
$conn = mysqli_connect("localhost", "root", "", "belajar");
$result = mysqli_query($conn, "SELECT * FROM kampus");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
        </tr>


        <?php while( $r = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $r["id"]; ?></td>
            <td><?= $r["nama"]; ?></td>
            <td><?= $r["nim"]; ?></td>
            <td><?= $r["prodi"]; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>